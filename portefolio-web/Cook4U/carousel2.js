document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.carrousel-container').forEach(function(container) {
        const carrousel = container.querySelector('.carrousel');
        const slides = container.querySelectorAll('.carrousel-slide');
        const prevButton = container.querySelector('.carrousel-button-left');
        const nextButton = container.querySelector('.carrousel-button-right');
        
        let currentIndex = 0;
        const totalSlides = slides.length;

        function showSlide(index) {
            const slideWidth = slides[0].clientWidth;
            carrousel.style.transform = `translateX(-${index * slideWidth}px)`;
            updateButtons();
        }

        function updateButtons() {
            prevButton.disabled = currentIndex === 0;
            nextButton.disabled = currentIndex === totalSlides - 1;
        }

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                showSlide(currentIndex);
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
                showSlide(currentIndex);
            }
        });

        // Initialisation
        showSlide(currentIndex);
    });
});
