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

function validateFees() {
    // Reset error messages
    const errorMessages = document.getElementById("errorMessages");
    errorMessages.innerHTML = "";

    // Get form input values
    const name = document.getElementById("full-name").value;
    const number = document.getElementById("student-id").value;
    const fee = document.getElementById("amount").value;
    const card = document.getElementById("credit-card").value;
    const expDate = document.getElementById("expiration-date").value;
    const cvv = document.getElementById("cvv").value;


    // Validate Name (non-empty)
    if (name.trim() === "") {
        displayError("First name is required!");
        return false; // Prevent form submission
    }

    // Validate student number (correct format)
    const numPattern = /^g\d{2}[a-zA-Z]\d{4}$/;
    if (!number.match(numPattern)) {
        displayError("Invalid student number format!");
        return false; // Prevent form submission
    }

    // Validate amount to pay (non-empty)
    if (fee.trim() === ""){
        displayError("Please enter amount to pay!");
        return false;
    }

    // Validate card number (non-empty)
    if (card.trim() === ""){
        displayError("Please enter credit card number!");
        return false;
    }

    //Validate expiration date on card (non-empty and correct format)
    const datePattern = /\d{2}\/\d{2}$/;
    if (expDate.trim() === "" ){
        displayError("Please enter expiration date on card!");
        return false;
    }

    if (!expDate.match(datePattern)){
        displayError("Incorrect date format!");
        return false;
    }

    // Validate cvv (non-empty and correct format)
    const cvvPattern = /\d{3}/;
    if (cvv.trim() === ""){
        displayError("Please enter your cvv!")
        return false;
    }

    if (!cvv.match(cvvPattern)) {
        displayError("Incorrect cvv format!");
        return false;
    }

    // If all validation passes, allow form submission
    return true;
}

function displayError(message) {
    const errorMessages = document.getElementById("errorMessages");
    const errorDiv = document.createElement("div");
    errorDiv.className = "center";
    errorDiv.textContent = message;
    errorDiv.style.color = "red";
    errorDiv.style.fontWeight = "bold";
    errorMessages.appendChild(errorDiv);
}