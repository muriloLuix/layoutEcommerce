document.addEventListener('DOMContentLoaded', function () {
    const modalCredentials = document.getElementById('modalCredentials');
    const forgetCredentialsBtn = document.getElementById('forgetCredentialsBtn');

    if (modalCredentials && forgetCredentialsBtn) {
        forgetCredentialsBtn.addEventListener('click', function () {
            modalCredentials.style.display = 'flex';
            setTimeout(() => {
                modalCredentials.classList.add('show'); // Adiciona animação
            }, 10);
        });
    }
});
