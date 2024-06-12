document.addEventListener("DOMContentLoaded", function () {
    var toggleButtons = document.querySelectorAll(".toggleButton");

    toggleButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var targetId = this.getAttribute("data-bs-target");
            console.log("Target ID:", targetId);

            var targetDiv = document.querySelector(targetId);
            console.log("Target div:", targetDiv);

            var icon = this.querySelector(".toggleIcon");
            console.log("Icon:", icon);

            var isCollapsed = targetDiv.style.display === "none";
            console.log("Is collapsed:", isCollapsed);

            if (isCollapsed) {
                targetDiv.style.display = "block"; // Show the div
                icon.classList.remove("bi-chevron-down");
                icon.classList.add("bi-chevron-up");
            } else {
                targetDiv.style.display = "none"; // Hide the div
                icon.classList.remove("bi-chevron-up");
                icon.classList.add("bi-chevron-down");
            }
        });

        // Initially hide all target divs except the first one
        var targetId = button.getAttribute("data-bs-target");
        var targetDiv = document.querySelector(targetId);
        if (targetDiv && targetId !== "#order-info-waitForPayment") {
            targetDiv.style.display = "none";
        }
    });
});

// document.addEventListener("DOMContentLoaded", function () {
//     var checkoutButton = document.getElementById("checkoutButton");

//     checkoutButton.addEventListener("click", function (e) {
//         e.preventDefault();
//         var form = this.closest("form"); // Get the closest form element
//         var formData = new FormData(form);
//         var data = new URLSearchParams(formData);
//         var objData = Object.fromEntries(data.entries());

//         // Calculate the total price
//         var total = 0;
//         formData.forEach((value, key) => {
//             if (key.includes("products") && key.endsWith("[price]")) {
//                 var index = key.match(/\[(\d+)\]/)[1]; // Extract the product index
//                 var quantity = formData.get(`products[${index}][quantity]`);
//                 total += parseFloat(value) * parseInt(quantity);
//             }
//         });

//         // Add the total attribute to objData
//         objData.total = total;

//         console.log(objData);
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    var checkoutButton = document.getElementById("checkoutButton");

    checkoutButton.addEventListener("click", function (e) {
        e.preventDefault();
        var form = this.closest("form"); // Get the closest form element
        var formData = new FormData(form);
        var data = new URLSearchParams(formData);
        var objData = Object.fromEntries(data.entries());

        // Calculate the total price
        var total = 0;
        formData.forEach((value, key) => {
            if (key.includes("products") && key.endsWith("[price]")) {
                var index = key.match(/\[(\d+)\]/)[1]; // Extract the product index
                var quantity = formData.get(`products[${index}][quantity]`);
                total += parseFloat(value) * parseInt(quantity);
            }
        });

        // Add the total attribute to objData
        objData.total = total;

        console.log(objData);

        // Make an AJAX request to get the Snap token
        $.ajax({
            url: "/get-snap-token",
            method: "GET",
            data: objData,
            success: function (response) {
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
            },
            error: function (xhr, status, error) {
                console.error("Error getting snap token:", error);
            },
        });
    });
});
