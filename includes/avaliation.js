document.addEventListener("DOMContentLoaded", () => {
    const ratingButtons = document.querySelectorAll('.rating-button');
    const ratingInput = document.getElementById('nota');
    const form = document.getElementById('avaliacaoForm');
    const recentReviewsContainer = document.getElementById('recentReviews');

    ratingButtons.forEach(button => {
        button.addEventListener('click', () => {
            const value = button.getAttribute('data-value');

            ratingButtons.forEach(b => b.classList.remove('selected'));
            button.classList.add('selected');

            ratingInput.value = value;
            console.log('Nota selecionada:', ratingInput.value); // Debug
        });
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const nome = document.getElementById('nome_avaliador').value;
        const nota = ratingInput.value;
        const descricao = document.getElementById('descricao').value;

        const newReview = document.createElement('div');
        newReview.classList.add('avaliacao-item');
        newReview.innerHTML = `<strong>${nome}</strong> (Nota: ${nota})<p>${descricao}</p>`;
        recentReviewsContainer.prepend(newReview);

        form.reset();
        ratingButtons.forEach(b => b.classList.remove('selected'));
        ratingInput.value = '';
    });
});
