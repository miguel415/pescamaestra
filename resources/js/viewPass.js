function togglePassword() {
    var passwordField = document.getElementById("password");
    var toggleBtn = document.querySelector(".toggle-password");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleBtn.innerHTML = '<img src="/images/eye.png" alt="Hide Password" width="20">';
    } else {
        passwordField.type = "password";
        toggleBtn.innerHTML = '<img src="/images/crossed-eyes.png" alt="Show Password" width="20">';
    }
}
