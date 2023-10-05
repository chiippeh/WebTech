<?php
   if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];


        // $usernamePattern = '/^[A-Za-z]+$/';
        // if ( preg_match($usernamePattern, $username) ) {

        //     echo 'string contains only alphabets';
        // } else {
        //     echo 'string does not contain only alphabets';
        // }
   }

   function validateAlphabet($input) {
        return preg_match('/^[a-zA-Z]+$/', $input);
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
            <div id="welcome">Welcome to LOSS</div>
            <br><br>
            <form action="home.php" method="POST">
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password</label><br>
                <input type="text" id="password" name="password"><br><br>
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