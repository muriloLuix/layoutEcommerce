document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".dropdown"); // Seleciona todos os dropdowns

    dropdowns.forEach((dropdown) => {
        dropdown.addEventListener("click", function (event) {
            event.stopPropagation(); // Evita fechamento imediato ao clicar dentro
            
            // Fecha todos os dropdowns antes de abrir o atual
            dropdowns.forEach((d) => {
                if (d !== dropdown) {
                    d.classList.remove("active");
                }
            });

            // Alterna o estado do dropdown clicado
            this.classList.toggle("active");
        });
    });

    // Fechar dropdown ao clicar fora
    document.addEventListener("click", function () {
        dropdowns.forEach((dropdown) => {
            dropdown.classList.remove("active");
        });
    });
});
