let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        document.querySelector('.next').addEventListener('click', showNextSlide);
        document.querySelector('.prev').addEventListener('click', showPrevSlide);

        function updateSlide() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
                if (index === currentSlide) {
                    slide.classList.add('active');
                }
            });
        }

        function showNextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlide();
        }

        function showPrevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlide();
        }

        function autoSlide() {
            showNextSlide();
            setTimeout(autoSlide, 4000); 
        }

        updateSlide();
        autoSlide();