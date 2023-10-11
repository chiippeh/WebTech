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
</head>
<body>
    <header id="header">
        <h3 id="header-container">
            Logged into LOSS as <?php echo $student_num ?>
        </h3>
    </header>
    <nav>
        <img id="nav-home-logo" src="./images/hamrat_png_logo.png"></img>
        <div class="nav-elements-container">
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
            <a href="./curriculum.php"> 
                <span class="material-icons">library_books</span>
                <p class="nav-btn-text">Curriculum</p>
            </a>
            <a class="current-nav" href="./bookings.php">
                <span class="material-icons">list_alt</span>
                <p class="nav-btn-text">My Bookings</p>
            </a>
            <a onclick="myFunction()" class="dropdown dropbtn">
                <span class="material-icons">tune</span>
                <p class="nav-btn-text">My Utilities</p>
                <div id="myDropdown" class="dropdown-content">
                    <a href="./reviews.php">Reviews</a>
                    <a href="https://x.com/catshouldnt/status/1706917149984657713?s=20">Cat</a>
                    <a href="https://www.youtube.com/watch?v=L1ung0wil9Y&ab_channel=MITOpenCourseWare">Secret</a>
                </div>
            </a>
        </div>
    </nav>

    <main class="center">
        <div class="bubble"> 
            <ul id="bookings-list">
                <li><a href="./benchForm.php">Depression Bench Seat Application</a></li>
                <li><a href="./honoursForm.php">Honours application</a></li>
                <li><a href="./mealForm.php">Meal Bookings</a></li>
                <li><a href="./parkingForm.php">Parking Spot Reservations</a></li>
            </ul>
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