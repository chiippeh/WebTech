<?php
    $nameRequiredErr = $surnameRequiredErr = $usernameRequiredErr =  $passwordRequiredErr = $emailRequiredErr = "";
    $nameValid = $surnameValid = $usernameValid = $passwordValid = $confirmPasswordValid = $emailValid = false;

    if($_SERVER["REQUEST_METHOD"] == "POST") { //if the submit button has been pressed
        require_once('validate.php');
        require_once('conn.php');

        if(empty($_POST["fname"])) {
            $nameRequiredErr = "* First name is required";
        }else {
            echo "you have entered something";
            $fname = sanitiseInput($_POST["fname"]);

            // validate name
            $errors  = validateAlphabet($fname); 

            if(empty($errors)){
                echo "it should never get here";
                $nameValid = true;
            }
        }

        if(empty($_POST["lname"])) {
            $surnameRequiredErr = "* Surname is required";
        }else {
            $lname = sanitiseInput($_POST["lname"]);

            //validate surname
            $errors = validateAlphabet($lname);

            if(empty($errors)){
                $surnameValid = true;
            }
        }

        if (empty($_POST["username"])) {
            echo "<script>console.log(you have entered nothing);</script>";
            $usernameRequiredErr = "* Username is required";
            
        } else {
            echo "you have entered something";
            $username = sanitiseInput($_POST["username"]);

            // validate username
            $errors  = validateUsername($username);
            
            if (empty($errors)) { //is valid
                echo "<br>usernameis valid<br>";
                $usernameValid = true;

            }
        }

        if (empty($_POST["email"])) {
            $emailRequiredErr = "* Email is required";
        } else {
            $email = sanitiseInput($_POST["email"]);

            //validate email
            $errors = validateEmail($email);

            if(empty($errors)) {
                $emailValid = true;
            }
        }

        if (empty($_POST["password"])) {
            $passwordRequiredErr = "* Password is required";
        } else {
            $password = sanitiseInput($_POST["password"]);
            
            // validate password
            $errors = validatePassword($password);

            if (empty($errors)) {
                echo "Password is valid.";
                $passwordValid = true;
            }
        }

        if (empty($_POST["confirm-pass"])) {
            $passwordRequiredErr = "* Password is required";
        } else {
            $confirmPassword = sanitiseInput($_POST["confirm-pass"]);
            
            // validate password
            $errors = validatePassword($confirmPassword);
            if (empty($errors)) {
                echo "Confirm Password is valid.";
                echo $password;
                if ($password == $confirmPassword) {
                    $confirmPasswordValid = true;
                    echo $confirmPassword;
                } else {
                    echo "you idiot the password are not the same";
                }
            }
        }

        // if all the inputs are valid
        if ($nameValid && $surnameValid && $usernameValid && $passwordValid && $confirmPasswordValid && $emailValid) {
            echo "<br>all inputs are valid<br>";
            $encryptedPassword = sha1($password);
            $query = "INSERT INTO students (`student_num`, `student_fname`, `student_lname`, `student_email`, `student_password`)
                      VALUES ('$username', '$fname', '$lname', '$email', '$encryptedPassword');";
                      
            $result = mysqli_query($conn, $query)
            or die("cringe");

            header("Location:home.php");


        }
    }
 
?>

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

<body>
    <header>
    </header>
    <main>
        <div id="home-container" class="main-container center">
            <!-- <div id="welcome">Welcome to LOSS</div>
            <br><br> -->
            <form id="sign-up" action="" method="POST">
                <label for="fname">First Name:</label><br>
                <input class="focus-input" type="text" id="fname" name="fname" value="">
                <br><br>
                <label for="lname">Surname:</label><br>
                <input class="focus-input" type="text" id="lname" name="lname" value="">
                <br><br>
                <label for="username">Username:</label><br>
                <input class="focus-input" type="text" id="username" name="username" value="">
                <br><br>
                <label for="email">Email:</label><br>
                <input class="focus-input" type="text" id="email" name="email" value="">
                <br><br>
                <label for="password">Password:</label><br>
                <input class="focus-input" type="password" id="password" name="password" value="">
                <br><br>
                <label for="confirm-pass">Confirm Password:</label><br>
                <input class="focus-input" type="password" id="confirm-pass" name="confirm-pass" value="">
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
                <br><br>

                <input type="submit" name="submit" id="submitBtn" value="Sign Up">
            </form>
            <br><br>
            <div id="signup-forgot-container">
                <div id="signup">
                    Already have an account? <a href="./home.php" >Sign In!</a>
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