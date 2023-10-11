<?php
    // ob_start();
    session_start();
    
    $usernameErr = $passwordErr = "";
    $username = $password = "";
    // $usernameRequiredErr =  $passwordRequiredErr = "";
    $usernameErr = $passwordErr = "";
    $usernameValid = $passwordValid = false;


    if($_SERVER["REQUEST_METHOD"] == "GET") { //if the user signs up they will be redirected with their username
        if (!empty($_GET["username"])) {
            $username = $_GET["username"];
            // echo "the query username is {$username}";
            $usernameValid = true;
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") { //if the submit button has been pressed
        require_once('validate.php');
        require_once('conn.php');

        if (empty($_POST["username"])) {
            // echo "<script>console.log(you have entered nothing);</script>";
            $usernameErr = "* Username is required";
            
        } else {
            // echo "you have entered something";
            $username = sanitiseInput($_POST["username"]);

            // validate username
            $errors  = validateUsername($username);
            
            if (empty($errors)) { //is valid
                $usernameValid = true;

            } else {
                $usernameErr = "* Username is invalid ";
                // foreach ($errors as $error) {
                //     $usernameErr .= $error;
                // }
            }
        }

        if (empty($_POST["password"])) {
            $passwordErr = "* Password is required";
        } else {
            $password = sanitiseInput($_POST["password"]);
            
            // validate password
            $errors = validatePassword($password);
            if (empty($errors)) {
                // echo "Password is valid.";
                $passwordValid = true;
            } else {
                $passwordErr = "* Password is invalid";
                // foreach ($errors as $error) {
                //     $passwordErr .= $error;
                // }
            }
        }

        if ($usernameValid && $passwordValid) {
            $encryptedPassword = sha1($password);

            $query = "SELECT * 
                      FROM students
                      WHERE student_num = '$username'
                      AND student_password = '$encryptedPassword'";

            $result = mysqli_query($conn, $query);  //run query on database

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['access'] = "granted";
                // ob_end_flush();
                $result = mysqli_fetch_array($result);
                $_SESSION['student_id'] = $result['student_id'];
                $_SESSION['student_num'] = $result['student_num'];
                header("Location: index.php");
                exit();
            } else {
                // echo "account does not exist";
                header("Location: home.php");
            }
            mysqli_close($conn);
        }
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
    <script src="js/home.js" defer></script>
</head>

<body class = "no-shrink">
    <header>
    </header>
    <main id="home-signup-main">
        <div class="center" style="text-align: center;">
            <!-- <img src="images/hamrat_png_logo.png" alt=""> -->
            <a href="home.php">
                <img id="logo" src="images/hamrat_png_logo.png" alt="">
            </a>
        </div>

        <div class="home-container main-container center">
            <!-- <div id="welcome">Welcome to LOSS</div>
            <br><br> -->
            <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="username">Username</label><br>
                <input class="focus-input" type="text" id="username" name="username" placeholder="Enter your student number" value="<?php echo $username;?>">
                <br><span id="err"><?php echo $usernameErr ?></span>
                <br><br>
                <label for="password">Password</label><br>
                <input class="focus-input" type="password" id="password" name="password" value="<?php echo $password;?>">
                <br><span id="err"><?php echo $passwordErr ?></span>
                <div class="popup" id="popup">
                    <h4>Input Requirements</h2><br>
                    <span class="close" id="close-popup">&times;</span>
                    <?php 
                        echo " Username must contain:<br>
                        Format: g[year][surname-initial][4-digits] eg: g21j4308
                        <br><br>"; 
                    ?>
                    <?php 
                        echo " 
                            Password must contain:<br> At least one uppercase letter.<br>
                            At least one lowercase letter.<br>
                            At least one number.<br>
                            At least one special character.<br>
                            Must be at least 8 characters long.<br>
                            <br>"; 
                    ?>
                </div>
                <br><br><br>

                <input type="submit" name="submit" id="submitBtn" value="Sign In">
            </form>
            <br><br>
            <hr><br>
            <div id="signup-forgot-container">
                <div id="signup">
                    New here? &nbsp <a href="./signUp.php" id="apply"><b>Apply!</b></a>
                </div>
                <div id="forgot">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" >Forgot Password? </a>
                </div>
            </div>   
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