// Get the timer and amount owed elements
const timerElement = document.getElementById('timer');
const amountOwedElement = document.getElementById('amount-owed');

let startTime = null;
let intervalId = null;
let amountOwed = 35000;

function updateTimer() {
    const currentTime = new Date().getTime();
    const elapsedTime = Math.floor((currentTime - startTime) / 1000); // in seconds
    timerElement.textContent = `Time wasted: ${elapsedTime} seconds`;

    // Update the amount owed value
    amountOwed += 1000;
    amountOwedElement.textContent = `Amount owed = R${amountOwed.toLocaleString()}`;
}

// Start the timer
function startTimer() {
    startTime = new Date().getTime();
    intervalId = setInterval(updateTimer, 1000); // Update every 1second
}

startTimer();