<?php
    require_once('validate.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") { //if the submit button has been pressed
        $userNameErr = $passwordErr = "";

        if (empty($_POST["username"])) {
            $nameErr = "Username is required";
        } else {
            $username = sanitiseInput($_POST["username"]);

            // validate username
            $errors  = validateAlphabet($username);
            if (empty($errors)) { //is valid
                
            } else {
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
            }
        }

        if (empty($_POST["password"])) {
            $nameErr = "Password is required";
        } else {
            $username = sanitiseInput($_POST["password"]);
            
            // validate password
            $errors = validatePassword($password);
            if (empty($errors)) {
                echo "Password is valid.";
            } else {
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
            }
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

<body>
    <header>
    </header>
    <main>
        <div id="home-container" class="main-container center">
            <!-- <div id="welcome">Welcome to LOSS</div>
            <br><br> -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username"><br>
                <span class="error">* <?php echo $userNameErr;?></span>
            
                <label for="password">Password</label><br>
                <input type="text" id="password" name="password"><br><br>
                <span class="error">* <?php echo $passwordErr;?></span>

                <input type="submit" name="submit" value="Sign In">
            </form>
            <br><br>
            <div id="signup-forgot-container">
                <div id="signup">
                    New here? <a href="">Apply!</a>
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