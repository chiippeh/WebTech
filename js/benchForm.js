function validateBench() {
    // Reset error messages
    const errorMessages = document.getElementById("errorMessages");
    errorMessages.innerHTML = "";

    // Get form input values
    const name = document.getElementById("fname").value;
    const surname = document.getElementById("lname").value;
    const number = document.getElementById("snum").value;

    // Validate Name (non-empty)
    if (name.trim() === "") {
        displayError("First name is required!");
        return false; // Prevent form submission
    }

    // Validate Surname (non-empty)
    if (surname.trim() === "") {
        displayError("Last name is required!");
        return false; // Prevent form submission
    }

    // Validate student number (min length)
    const numPattern = /^g\d{2}[a-zA-Z]\d{4}$/;
    if (!number.match(numPattern)) {
        displayError("Invalid student number format!");
        return false; // Prevent form submission
    }

    // Get all radio buttons with the same name
    const radioButtons = document.getElementsByName("seat");

    // Check if at least one radio button is selected
    let isChecked = false;
    for (const radioButton of radioButtons) {
        if (radioButton.checked) {
            isChecked = true;
            break; // Exit the loop early if a radio button is checked
        }
    }

    // If none of the radio buttons is checked, display an error
    if (!isChecked) {
        displayError("Please select the number of seats!");
        return false; // Prevent form submission
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