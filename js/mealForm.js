function validateMeals() {
    // Reset error messages
    const errorMessages = document.getElementById("errorMessages");
    errorMessages.innerHTML = "";

    // Get form input values
    const date = document.getElementById("date").value;

    // Validate Name (non-empty)
    if (date.trim() === "") {
        displayError("Date field is required.");
        return false; // Prevent form submission
      }
    
      // Define a regex pattern for a valid date in YYYY-MM-DD format
      const datePattern = /^\d{4}-\d{2}-\d{2}$/;
    
      // Check if the input matches the regex pattern
      if (!datePattern.test(date)) {
        displayError("Invalid date format. Please use YYYY-MM-DD.");
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