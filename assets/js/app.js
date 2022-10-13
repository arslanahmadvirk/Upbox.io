const ele = document.getElementById('kt_theme_mode_toggle');

ele.addEventListener("click", function () {
    if (document.body.classList.contains("dark-mode")) {
        KTApp.setThemeMode("light", function () {
            console.log("changed to light mode");
        }); // set light mode
    } else {
        KTApp.setThemeMode("dark", function () {
            console.log("changed to dark mode");
        }); // set dark mode
    }
})