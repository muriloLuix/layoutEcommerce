document.querySelectorAll('.input-group input').forEach(input => {
    input.addEventListener('focus', () => {
        input.parentElement.classList.add('focused');
    });

    input.addEventListener('blur', () => {
        input.parentElement.classList.remove('focused');
        if (input.value !== '') {
            input.parentElement.classList.add('filled');
        } else {
            input.parentElement.classList.remove('filled');
        }
    });
});

function togglePasswordVisibility(selector) {
    document.querySelectorAll(selector).forEach(toggle => {
        toggle.addEventListener('click', function () {
            const passwordInput = document.getElementById('usu_senha');
            const icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash'); // Ícone de "olho riscado"
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye'); // Ícone de "olho aberto"
            }
        });
    });
}
togglePasswordVisibility('.toggle-password');
