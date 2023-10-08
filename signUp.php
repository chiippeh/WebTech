<?php
    $usernameErr = $passwordErr = "";
    $username = $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") { //if the submit button has been pressed
        require_once('validate.php');
        require_once('conn.php');

        if (empty($_POST["username"])) {
            echo "<script>console.log(you have entered nothing);</script>";
            $usernameErr = "* Username is required";
        } else {
            echo "you have entered something";
            $username = sanitiseInput($_POST["username"]);

            // validate username
            $errors  = validateAlphabet($username);
            echo "hello {$errors}";
            
            if (empty($errors)) { //is valid

                // $query = "SELECT * FROM students";
                // $result = mysqli_query($conn, $query);  //run query on database
                // while ($row = mysqli_fetch_array($result)) {
                //     echo $row['student_fname'];
                //     echo "<br>";
                // }
                // $result = mysqli_fetch_array($result);

            } else {
                // $usernameErr = "* ";
                foreach ($errors as $error) {
                    $usernameErr .= $error;
                }
            }
        }

        if (empty($_POST["password"])) {
            $passwordErr = "* Password is required";
        } else {
            $password = sanitiseInput($_POST["password"]);
            
            // validate password
            $errors = validatePassword($password);
            if (empty($errors)) {
                echo "Password is valid.";
            } else {
                $passwordErr = "* ";
                foreach ($errors as $error) {
                    $passwordErr .= $error;
                }
            }
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
            <form id="sign-up" action="#" method="POST">
                <label for="fname">First Name:</label><br>
                <input class="focus-input" type="text" id="fname" name="fname" value="">
                <br><br>
                <label for="lname">Surname:</label><br>
                <input class="focus-input" type="text" id="lname" name="lname" value="">
                <br><br>
                <label for="username">Username:</label><br>
                <input class="focus-input" type="text" id="username" name="username" value="<?php echo $username;?>">
                <br><br>
                <label for="password">Password:</label><br>
                <input class="focus-input" type="text" id="password" name="password" value="<?php echo $password;?>">
                <br><br>
                <label for="confirm-pass">Confirm Password:</label><br>
                <input class="focus-input" type="text" id="confirm-pass" name="confirm-pass" value="">
                <div class="popup" id="popup">
                    <h4>Input Requirements</h2><br>
                    <span class="close" id="close-popup">&times;</span>
                    <?php echo " Username:<br>{$usernameErr}<br>"; ?>
                    <?php echo " Password:<br>{$passwordErr}<br>"; ?>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submitBtn" value="Sign Up">
            </form>
            <br><br>
            <div id="signup-forgot-container">
                <div id="signup">
                    Already have an account? <a href="./home.php" >Sign In!</a>
                </div>
                <div id="forgot">
                    Forgot Password?
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