 function validatePasswords() {
            const password = document.getElementById('passwordInput').value;
            const confirmPassword = document.getElementById('confirmPasswordInput').value;
            const errorMessage = document.getElementById('error-message');

            if (password !== confirmPassword) {
                errorMessage.style.display = 'block';
                return false;
            } else {
                errorMessage.style.display = 'none';
                return true;
            }
        }