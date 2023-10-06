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
            <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="username">Username</label><br>
                <input class="focus-input" type="text" id="username" name="username" value="<?php echo $username;?>">
                <br><br>
                <label for="password">Password</label><br>
                <input class="focus-input" type="text" id="password" name="password" value="<?php echo $password;?>">
                <div class="popup" id="popup">
                    <h4>Input Requirements</h2><br>
                    <span class="close" id="close-popup">&times;</span>
                    <?php echo " Username:<br>{$usernameErr}<br>"; ?>
                    <?php echo " Password:<br>{$passwordErr}<br>"; ?>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submitBtn" value="Sign In">
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