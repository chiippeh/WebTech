<?php
    require_once("BackendFiles/secure.php");
    $student_num = $_SESSION['student_num'];

?>
<!--Created in collaboration with:-->
<!--Mila-jo Davies (g21d6937), Wynne Edwards (g21e2079), Manusizwe Jourdan (g21j5408)-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HamRat University - where leaders yearn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="js/script.js" defer></script>
    <script src="js/fees.js" defer></script>
</head>

<body>
    <header id="header">
        
        <h3 id="header-container">
            Logged into LOSS as <?php echo $student_num ?>
        </h3>
    </header>
    <nav>
        <img id="nav-home-logo" src="./images/hamrat_png_logo.png"></img>
        <a id="no-hover">
            <button id="back-btn" class="material-icons">arrow_back </button>

        </a>
        <a href="./index.php">
            <span class="material-icons">dashboard</span>
            <p class="nav-btn-text">My Dashboard</p>
        </a>
        <a href="./about.php">
            <span class="material-icons">psychology_alt</span>
            <p class="nav-btn-text">About Us</p>
        </a>
        <a class="current-nav" href="./curriculum.php"> 
            <span class="material-icons">library_books</span>
            <p class="nav-btn-text">Curriculum</p>
        </a>
        <a href="./bookings.php">
            <span class="material-icons">list_alt</span>
            <p class="nav-btn-text">My Bookings</p>
        </a>
        <a id="utilities" class="dropdown dropbtn">
            <span id="util-icon" class="material-icons">tune</span>
            <p id="my-util" class="nav-btn-text">My Utilities</p>
        </a>
        <div id="myDropdown" class="dropdown-content">
            <a href="./reviews.php">Reviews</a>
            <a href="https://x.com/catshouldnt/status/1706917149984657713?s=20">Cat</a>
            <a href="https://www.youtube.com/watch?v=L1ung0wil9Y&ab_channel=MITOpenCourseWare">Secret</a>
        </div>
        <a href="./profile.php"> 
            <span id="profile-icon" class="material-icons">account_circle</span>
        </a>
    </nav>
    <main class="center">
        <div class="main-container">
            <div id="top-main-container">
                <div id="timer"></div>
                <div id="amount-owed">Amount owed = R35,000</div>
            </div>
            <br><br>
            <h1>Tuition Fee Payment</h1>
            <div id="errorMessages" ></div>
            <form action="" method="post" onsubmit="return validateFees()">
                <label for="full-name">Full Name:</label><br>
                <input type="text" id="full-name" name="full-name"><br><br>

                <label for="student-id">Student ID:</label><br>
                <input type="text" id="student-id" name="student-id"><br><br>

                <label for="amount">Amount to Pay:</label><br>
                <input type="number" id="amount" name="amount" min="0"><br><br>

                <label for="credit-card">Credit Card Number:</label><br>
                <input type="text" id="credit-card" name="credit-card" p><br><br>

                <label for="expiration-date">Expiration Date:</label><br>
                <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YY" ><br><br>

                <label for="cvv">CVV:</label><br>
                <input type="text" id="cvv" name="cvv" ><br><br>

                <input type="submit" value="Pay Now">
            </form>
        </div>
    </main>
    
    <footer>
        <div id="top-footer">
            <p class="center">HAMRAT UNIVERSITY<br>Where Leaders Yearn</p> 
            
        </div>
        <div id="bottom-footer">
            <p class="center">&copy 2023 - loss Inc. <br>
                <a href="mailto:g21j5408@campus.ru.ac.za?cc=g21d6937@campus.ru.ac.za&bcc=g21e2079@campus.ru.ac.za&subject=Feedback for LOSS&body=Add what you want we dont care really">
                g21j5408@campus.ru.ac.za
            </a>,
            <a href="mailto:g21j5408@campus.ru.ac.za?cc=g21d6937@campus.ru.ac.za&bcc=g21e2079@campus.ru.ac.za&subject=Feedback for LOSS&body=Add what you want we dont care really">
                g21d6937@campus.ru.ac.za
            </a>,
            <a href="mailto:g21j5408@campus.ru.ac.za?cc=g21d6937@campus.ru.ac.za&bcc=g21e2079@campus.ru.ac.za&subject=Feedback for LOSS&body=Add what you want we dont care really">
                g21e2079@campus.ru.ac.za
            </a></p>
        </div>
    </footer>
</body>

</html>