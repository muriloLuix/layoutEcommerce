
document.getElementById('btnConcluir').addEventListener('click', function () {
    let inputs = document.querySelectorAll('.input-field, textarea, select');
    inputs.forEach(input => {
        input.style.transition = 'all 0.5s ease-in-out';
        input.style.backgroundColor = '#e1dfdf';
        setTimeout(() => {
            input.setAttribute('disabled', 'true');
        }, 500);
    });
});

