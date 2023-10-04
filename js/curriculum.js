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


// multi column layout
// if column change button is clicked, change the column number
let colInput = document.getElementById('col-num');
let col = document.getElementById('marks');

function changeColNum() {

    //check that the value of the input element (colInput) is a number
    if (isNaN(colInput.value)) {
        alert('Please enter a number');
    } else {
        // check if number is between 1 and 10
        if (colInput.value < 1 || colInput.value > 10) {
            alert('Please enter a number between 1 and 10');
        } else {    
            col.style.columnCount = colInput.value;
        }
    }
}