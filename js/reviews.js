// document.addEventListener('DOMContentLoaded', () => {
//     const reviewForm = document.getElementById('reviewForm');
//     const reviewsContainer = document.getElementById('reviews');

//     reviewForm.addEventListener('submit', async (e) => {
//         e.preventDefault();

//         const userName = document.getElementById('userName').value;
//         const rating = document.getElementById('rating').value;
//         const reviewText = document.getElementById('reviewText').value;

//         if (userName && rating && reviewText) {
//             const reviewData = {
//                 userName,
//                 rating,
//                 reviewText,
//                 date: new Date().toLocaleDateString()
//             };

//             // Simulate sending review data to the server (you'd need to implement this on your back-end).
//             // For simplicity, this example does not include server communication.

//             displayReview(reviewData);
//         }
//     });

//     function displayReview(reviewData) {
//         const reviewElement = document.createElement('div');
//         reviewElement.classList.add('review');
//         reviewElement.innerHTML = `
//             <strong>${reviewData.userName}</strong> rated it ${reviewData.rating}/5 on ${reviewData.date}<br>
//             ${reviewData.reviewText}
//         `;

//         reviewsContainer.appendChild(reviewElement);

//         // Clear the form
//         reviewForm.reset();
//     }
// });