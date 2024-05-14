
// JavaScript for image slider
        const slides = document.querySelectorAll('.slide');
        const slider = document.querySelector('.slides');

        let index = 0;

        function nextSlide() {
            index++;
            if (index === slides.length) index = 0;
            updateSlide();
        }

        function updateSlide() {
            slider.style.transform = `translateX(${-index * 100}%)`;
        }

        setInterval(nextSlide, 2000); // Change slide every 5 seconds