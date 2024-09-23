const carouselWrapper = document.querySelector('.carousel-wrapper');
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;
let currentIndex = 0;

function moveToNextSlide() {
    currentIndex = (currentIndex + 1) % totalItems;
    const offset = -currentIndex * 100;
    carouselWrapper.style.transform = `translateX(${offset}%)`;
}

setInterval(moveToNextSlide, 5000); // Mover para o próximo slide a cada 15 secondos
