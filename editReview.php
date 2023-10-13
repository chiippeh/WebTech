<?php
    require_once("BackendFiles/secure.php");
    require_once('conn.php');

    if(isset($_GET['id']) && isset($_GET['rating']) && isset($_GET['text'])) {
        $reviewId = $_REQUEST['id'];
        $rating = $_REQUEST['rating'];
        $reviewText = $_REQUEST['text'];
    }

    // echo $rating;
    // echo $reviewText;

    if($_SERVER["REQUEST_METHOD"] == "POST") { //if the submit button has been pressed
        require_once('validate.php');
        
        $review_rating_update = $_POST['rating'];
        $review_stuff_update = $_POST["reviewText"];
        $review_id_update = $_POST['reviewId'];

        $query = " UPDATE reviews
                   SET review_stuff = '$review_stuff_update', rating = '$review_rating_update'
                   WHERE review_id = '$review_id_update'";

        $result = mysqli_query($conn, $query);

        echo "<div id=\"review-popup\" class=\"center\">
                    <br><br><br>
                    <strong>
                        Your review has been edited and updated succesfully!
                  
                        <br><br>
                        <a href=\"reviews.php\"><button style=\"width:10%; height:2em;\">OK</button></a>
                    </strong>
                </div>";
    }
    
    mysqli_close($conn);
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
    </nav>

    <main class="center">
        <div class="small-bubble">
            <form method="POST" action="editReview.php">
                <label for="rating" style="font-size:85%;">1-5 rating:</label><br>
                <input type="number" id="rating" name="rating" min="1" max="5" value="<?php echo $rating;?>"><br><br>
                <label for="reviewText" style="font-size:85%;">Your Review:</label><br>
                <textarea name="reviewText" id="reviewText">
                    <?php echo $reviewText;?>
                </textarea>
                <input type="hidden" name="reviewId" id="reviewId" value="<?php echo $reviewId ?>">
                <button id="submit-review" type="submit">Submit Review</button>
            </form>
        </div>
    </main>

    <footer>
        <div id="top-footer">
            <p class="center">HAMRAT UNIVERSITY<br>Where Leaders Yearn</p> 
            
        </div><br>
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