console.log('xdfxffdd')

document.getElementById("toggleButton").addEventListener("click", function () {
    var button = this;
    var icon = document.getElementById("toggleIcon");
    var isCollapsed = button.getAttribute("aria-expanded") === "false";

    button.innerHTML = isCollapsed
        ? '<strong>See More <i class="bi bi-chevron-down" id="toggleIcon"></i></strong>'
        : '<strong>Show Less <i class="bi bi-chevron-up" id="toggleIcon"></i></strong>';
});

function showPass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

