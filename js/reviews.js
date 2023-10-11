const reviews = document.getElementById('hidden-reviews');
const button = document.getElementById('show-reviews');

button.addEventListener('click', () => {
    if (reviews.style.display === 'none' || reviews.style.display === ''){
        reviews.style.display = 'block';
    } else {
        reviews.style.display = 'none';
    }
})
