<?php
    require_once("BackendFiles/secure.php");

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
    <script src="js/benchForm.js" defer></script>
</head>

<body>
    <header id="header">
        <h3 id="header-container">
            Logged into LOSS as YoMamma
        </h3>
    </header>
    <nav>
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
        <p>
            The closing date to apply for a seat on the Depression Bench is 1 November 2027. If you have not applied for
            a seat by this date then you will not be allocated a seat on a Depression Bench for 2028. It is up to you to
            ensure that your payment arrangements are cleared by the CFO before 1 January 2028, so that if a seat
            becomes available you can be allocated it.
        </p>
        <br>
        <p>
            Please note that booking an entire Depression Bench for yourself results in additional charges, so please
            indicate your preference clearly in the form below.
        </p>
        <br>
        <p>
            To cancel your application for a Depression Bench, please contact the CEO directly.
        </p>
        <br>
        <div id="errorMessages" ></div>
        <div class="bubble">
            <form name="bench" action="#" onsubmit="return validateBench()">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>

                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" ><br>

                <label for="snum">Student number:</label><br>
                <input type="text" id="snum" name="snum" ><br><br>

                <p>Number of seats:</p>
                <input type="radio" id="one" name="seat" value="One">
                <label for="one">One (R500.00)</label><br>
                <input type="radio" id="two" name="seat" value="Two">
                <label for="two">Two (R750.00)</label><br>
                <input type="radio" id="three" name="seat" value="Three">
                <label for="three">Three (R1000.00)</label><br>
                <input type="radio" id="bench" name="seat" value="All">
                <label for="bench">Entire bench (R5000.00)</label><br><br>
                <input type="submit" name="submit" value="Submit"> <input type="submit" name="submit" value="Cancel" style="margin-left: 15% ;">
            </form>
        </div> <br>

        <p>
            Please note that the above booking is only applicable for the FIRST SEMESTER of 2028. Bookings will need to be renewed for the second semester in May of 2028.
        </p>
        <br>
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