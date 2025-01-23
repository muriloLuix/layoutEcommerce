const comentariosWrapper = document.querySelector('.comentariosWrapper');
const comentarios = document.querySelectorAll('.comentariosClientes');
const dotsContainer = document.querySelector('.dots');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
let currentIndex = 0;

// Cria os pontos para o carrossel
comentarios.forEach((_, index) => {
    const dot = document.createElement('span');
    if (index === 0) {
        dot.classList.add('active'); // Adiciona a classe 'active' para o primeiro ponto
    }
    dot.addEventListener('click', () => goToSlide(index));
    dotsContainer.appendChild(dot);
});

// Reatribua `dots` depois que eles forem criados
const dots = document.querySelectorAll('.dots span');

// Função para atualizar o carrossel
function updateCarousel() {
    const offset = -currentIndex * 100; // Calcula o deslocamento
    comentariosWrapper.style.transform = `translateX(${offset}%)`;
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex); // Atualiza o indicador ativo
    });
}

// Navega para o slide seguinte
function nextSlide() {
    currentIndex = (currentIndex + 1) % comentarios.length;
    updateCarousel();
}

// Navega para o slide anterior
function prevSlide() {
    currentIndex = (currentIndex - 1 + comentarios.length) % comentarios.length;
    updateCarousel();
}

// Vai para um slide específico
function goToSlide(index) {
    currentIndex = index;
    updateCarousel();
}

// Event listeners para os botões
nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);
