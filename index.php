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
        <a id="no-hover">
            <button id="back-btn" class="material-icons">arrow_back </button>

        </a>
        <a class="current-nav" href="./index.php">
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
    

    <main>
        <div class="main-container center">
            <div class="dashboard"> 
                <p>Online Depression Bench bookings for 2028 is now available by clicking the link below or by clicking on "My Bookings".</p>
                <br>
                <p>Click <a href="./benchForm.php">here</a> for more details</p> 
            </div><br>
            <div class="dashboard"> 
                <p>Meals need to be booked daily. To book your Meals please click the link below or click on "My Bookings".</p>
                <br>
                <p>Click <a href="./mealForm.php">here</a> for more details</p> 
            </div><br>
            <div class="dashboard"> 
                <p>Parking lot bookings for 2028 is now available by clicking the link below or by clicking on "My Bookings".</p>
                <br>
                <p>Click <a href="./parkingForm.php">here</a> for more details</p> 
            </div><br>
            <div class="dashboard"> 
                <p>Honours applications are now open for 2028. If you wish to sell your soul to the university click the link below or go to "My Bookings".</p>
                <br>
                <p>Click <a href="./honoursForm.php">here</a> if you're lazy</p> 
            </div><br>
            <div class="dashboard"> 
                <p>You have <strong style="color: red">UNPAID</strong> tuition fees</p>
                <br>
                <p>Click <a href="./fees.php">here</a> for more details</p> 
            </div><br>
            <div class="dashboard"> 
                <p>Check out the WORK IN PROGRESS profile page</p>
                <br>
                <p>Let us know your thoughts -> <a href="profile.php">here</a></p> 
            </div><br>
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