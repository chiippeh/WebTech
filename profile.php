<?php
require_once("conn.php");
require_once("BackendFiles/secure.php");
$student_id_current = $_SESSION['student_id'];
$query = "SELECT student_fname, student_email, student_image, student_lname, student_num
          FROM students
          WHERE student_id = '" . $student_id_current . "';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$student_fname = $row["student_fname"];
$student_email = $row["student_email"];
$student_profile_image = $row["student_image"];
$student_lname = $row["student_lname"];
$student_num = $row["student_num"];

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
        <div  id="profile-content" class="profile-info small-bubble">
            <br>
            <div>
                <?php
                    if (isset($student_profile_image) ){
                        echo "<img id=\"profile-img\" src=\"images/studentImages/" . $student_profile_image . "\">";
                    } else{
                        echo "<img id=\"profile-img\" src=\"images/profile.png\">";
                    }
                ?>
            </div><br><br>
            <div >
                <?php
                echo "Full Name: <br> <p>{$student_fname} {$student_lname}</p>";
                ?>
            </div><br>
            <div>
                <?php
                    echo "Student Number: <br> <p>{$student_num}</p>";
                ?>
            </div><br>
            <div>
                <?php
                echo "Email Address: <br> <p>{$student_email}</p>";
                ?>
            </div><br>
            
            <div id="profile-edit-logout"> 
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><input type="button" value="Edit Details"></a>
                <a  href="logOut.php"><input type="button" value="Log Out" onClick="return confirm('Are you sure you want to log out?')"></a>
            </div>

            
            <!-- <button class="button-styles" >
                
            </button>
            <button  class="button-styles">
                
            </button> -->
            <br><br> 
        </div >
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
