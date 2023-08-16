document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.querySelector('.carousel-inner');
    const slideWidth = carouselInner.offsetWidth;
    let slideIndex = 0;

    function showNextSlide() {
      slideIndex = (slideIndex + 1) % carouselInner.children.length;
      carouselInner.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
    }

    // Automatically move to the next slide every 3 seconds
    const intervalId = setInterval(showNextSlide, 3000);

    // Pause automatic sliding when hovering over the carousel
    carouselInner.addEventListener('mouseenter', () => {
      clearInterval(intervalId);
    });

    // Resume automatic sliding when mouse leaves the carousel
    carouselInner.addEventListener('mouseleave', () => {
      intervalId = setInterval(showNextSlide, 3000);
    });
  });
