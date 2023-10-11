<?php
    require_once("BackendFiles/secure.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") { //if the submit button has been pressed
        require_once('validate.php');
        require_once('conn.php');

        $review_stuff = $_POST["reviewText"];
        $student_id = $_SESSION['student_id'];
        $query = "INSERT INTO reviews (`student_id`, `review_stuff`)
                  VALUES ('$student_id', '$review_stuff');";

        $result = mysqli_query($conn, $query);
    }
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
    <script src="js/reviews.js" defer></script>
</head>
<body>
    <header id="header">
        <h3 id="header-container">
            Logged into LOSS as YoMamma
        </h3>
    </header>
    <nav>
        <div class="nav-elements-container">
            <a >
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
            <a href="./bookings.php">
                <span class="material-icons">list_alt</span>
                <p class="nav-btn-text">My Bookings</p>
            </a>
            <a onclick="myFunction()" class="dropdown dropbtn" >
                <span class="material-icons">tune</span>
                <p class="nav-btn-text" class="current-nav">My Utilities</p>
                <div id="myDropdown" class="dropdown-content">
                    <a href="./reviews.php">Reviews</a>
                    <a href="https://x.com/catshouldnt/status/1706917149984657713?s=20">Cat</a>
                    <a href="https://www.youtube.com/watch?v=L1ung0wil9Y&ab_channel=MITOpenCourseWare">Secret</a>
                </div>
            </a>
        </div>
    </nav>

    <main class="center">
        <h1>Reviews</h1>
        <div class="bubble" id="reviews">
            <!-- Reviews will be displayed here dynamically -->
        </div>
        <h2>Add a Review</h2>
        <form method="POST" action="reviews.php" id="reviewForm">
            <input type="text" id="userName" placeholder="Your Name" required>
            <input type="number" id="rating" placeholder="Rating (1-5)" min="1" max="5" required>
            <textarea name="reviewText" id="reviewText" placeholder="Write your review" required></textarea>
            <button id="submit-review" type="submit">Submit Review</button>
        </form>
        <script src="script.js"></script>
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