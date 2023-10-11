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
    <script src="js/honoursForm.js" defer></script>
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
            I see you have come to apply for Honours as you have nothing better to do with your life. JK Honours is an honour to experience and you should feel honoured to even have the opportunity to apply.
        </p>
        <br>
        <p>
            Please note that you must indicate the subject you would like to do honours in as well as your reason for choosing honours. The reason is just to help motivate why we should choose you.
        </p>
        <br>
        <p>
            When you have completed the form, click "submit" to proceed to the next step.
        </p>
        <br>
        <div id="hon-form" class="bubble">
            <form action="#">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" ><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" ><br>
                <label for="snum">Student number:</label><br>
                <input type="text" id="snum" name="snum" ><br><br>
                <p>Subject:</p>
                <input type="radio" id="one" name="seat" value="One">
                <label for="one">Computer Science</label><br>
                <input type="radio" id="two" name="seat" value="Two">
                <label for="two">Information Systems</label><br>
                <input type="radio" id="three" name="seat" value="Three" >
                <label for="three">Literally Anything Else</label><br><br>
                <p>Reason for wanting to attempt honours:</p>
                <input type="radio" id="one" name="a" value="One">
                <label for="one">I am passionate about studying</label><br>
                <input type="radio" id="two" name="b" value="Two">
                <label for="two">It is required for my particular field</label><br>
                <input type="radio" id="three" name="c" value="Three">
                <label for="three">This is an impulse decision</label><br>
                <input type="radio" id="one" name="d" value="One">
                <label for="one">I don't know what else to do</label><br>
                <input type="radio" id="two" name="e" value="Two">
                <label for="two">I am afraid of the real world</label><br>
                <input type="radio" id="three" name="f" value="Three">
                <label for="three">I got rejected from every job application</label><br><br>
                <input id="lol" type="submit" name="submit" value="Submit"> <input type="submit" name="submit" value="Cancel" style="margin-left: 15% ;">
            </form>
        </div>
        <br>
        <div id="last-laugh" style="display:none;">
            
        </div><br>
       
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