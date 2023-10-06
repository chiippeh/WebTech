// let usernameInput = document.getElementById('username');
// let passwordInput = document.getElementById('password');

// // if the user types in the username input
// usernameInput.addEventListener('input', function(event) {
//     console.log('Input received:', event.target.value);
// });


// let usernameInput = document.getElementById('username');
// let passwordInput = document.getElementById('password');

// // if the user types in the username input
// if (usernameInput.target.value) {
//     usernameInput.addEventListener('input', function(event) {
//         console.log('Input received:', event.target.value);
//     });
// }

// get submit button
// const loginSubmit = document.getElementById('login');

// loginSubmit.addEventListener('submit', function(event) {
    //     console.log(event); 
    //     popUp.style.display = 'block';
    //     return false;
    // });
    
const popUp = document.getElementById('popup');
const inputs = document.getElementsByClassName('focus-input');
const inputsArray = Array.from(inputs);

inputsArray.forEach(function(element) {
    element.addEventListener('focus', function() {
        popUp.style.display = 'block';
    });
});

document.getElementById('close-popup').addEventListener('click', function() {
    popUp.style.display = 'none';
});
