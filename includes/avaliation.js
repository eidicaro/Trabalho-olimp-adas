const stars = document.querySelectorAll('.star');
const ratingInput = document.getElementById('nota');

stars.forEach(star => {
    star.addEventListener('click', () => {
        const value = star.getAttribute('data-value');

        // Remover a classe 'selected' de todas as estrelas
        stars.forEach(s => s.classList.remove('selected'));

        // Adicionar a classe 'selected' às estrelas clicadas
        for (let i = 0; i < value; i++) {
            stars[i].classList.add('selected');
        }

        // Atualizar o valor do input oculto
        ratingInput.value = value;
    });
});
