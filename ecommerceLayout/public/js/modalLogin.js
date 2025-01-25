
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('feedbackModal');
    // const closeModal = document.getElementById('closeModal');

    if (modal) {
        // Exibe o modal automaticamente ao carregar a página
        modal.style.display = 'flex'; // Exibe o modal (flex para centralizar)
        setTimeout(() => {
            modal.classList.add('show'); // Adiciona animação
        }, 10); // Delay para a animação funcionar
    }

    // if (closeModal) {
    //     closeModal.addEventListener('click', function () {
    //         modal.classList.remove('show'); // Remove a classe de animação
    //         setTimeout(() => {
    //             modal.style.display = 'none'; // Oculta o modal após a animação
    //         }, 300); // Deve corresponder ao tempo de `transition` no CSS
    //     });
    // }
});