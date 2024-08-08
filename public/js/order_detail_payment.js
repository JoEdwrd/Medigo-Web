document.addEventListener("DOMContentLoaded", function () {
    console.log("Script loaded and DOM fully loaded.");
    var checkoutButton = document.getElementById("checkoutButtonOD");

    if (!checkoutButton) {
        console.error("Checkout button not found.");
        return;
    }

    checkoutButton.addEventListener("click", function (e) {
        e.preventDefault();
        var form = this.closest("form");
        var formData = new FormData(form);
        var data = new URLSearchParams(formData);
        var objData = Object.fromEntries(data.entries());

        // Calculate the total price
        var total = 0;
        var itemDetails = [];
        formData.forEach((value, key) => {
            if (key.includes("products") && key.endsWith("[price]")) {
                var index = key.match(/\[(\d+)\]/)[1]; // Extract the product index
                var quantity = formData.get(`products[${index}][quantity]`);
                var price = parseFloat(value);
                var productTotal = price * parseInt(quantity);

                // Add product details to itemDetails array
                itemDetails.push({
                    id: formData.get(`products[${index}][id]`),
                    name: formData.get(`products[${index}][name]`),
                    price: price,
                    quantity: parseInt(quantity),
                    subtotal: productTotal,
                });

                total += productTotal;
            }
        });

        var discount = parseFloat(formData.get("discount"));
        var promo_id = formData.get("promotion_id");
        var promo_name = formData.get("promotion_name");
        if (discount) {
            var discountAmount = total * discount;
            itemDetails.push({
                id: promo_id,
                name: promo_name,
                price: -discountAmount,
                quantity: 1,
                subtotal: -discountAmount,
            });
            total -= discountAmount;
        }

        // Add the total attribute to objData
        objData.total = Math.round(total); // Ensure total is an integer
        objData.item_details = itemDetails; // Add item details to objData

        console.log("Form Data:", objData); // Log to verify

        // Make an AJAX request to get the Snap token
        $.ajax({
            url: "/get-snap-token",
            method: "GET",
            data: objData,
            success: function (response) {
                console.log("Snap Token Response:", response);
                if (response.snap_token) {
                    snap.pay(response.snap_token, {
                        onSuccess: function (result) {
                            console.log("Payment Success:", result);
                        },
                        onPending: function (result) {
                            console.log("Payment Pending:", result);
                        },
                        onError: function (result) {
                            console.log("Payment Error:", result);
                        },
                        onClose: function () {
                            console.log("Payment Popup Closed");
                        },
                    });
                } else {
                    console.error("Snap token not received");
                }
            },
            error: function (xhr, status, error) {
                console.error("Error getting snap token:", error);
            },
        });
    });
});
