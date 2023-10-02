let slideIndex = 0;

function showSlides() {
    const slides = document.querySelectorAll('#slideshow-gallery img');

    // Hide all images
    slides.forEach((slide) => {
        slide.style.display = 'none';
    });

    // Increment slide index
    slideIndex++;

    // Reset slide index if it exceeds the number of slides
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    // Display the current slide
    slides[slideIndex - 1].style.display = 'block';

    // Set the slideshow interval (change image every 3 seconds)
}


let i = 1;

function plusSlides(n) {
    showSlides((i += n));
}