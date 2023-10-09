<?php
    session_start();
    
    $usernameErr = $passwordErr = "";
    $username = $password = "";
    $usernameRequiredErr =  $passwordRequiredErr = "";
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
            $usernameRequiredErr = "* Username is required";
            
        } else {
            // echo "you have entered something";
            $username = sanitiseInput($_POST["username"]);

            // validate username
            $errors  = validateUsername($username);
            
            if (empty($errors)) { //is valid
                $usernameValid = true;

            } else {
                // $usernameErr = "* ";
                foreach ($errors as $error) {
                    $usernameErr .= $error;
                }
            }
        }

        if (empty($_POST["password"])) {
            $passwordRequiredErr = "* Password is required";
        } else {
            $password = sanitiseInput($_POST["password"]);
            
            // validate password
            $errors = validatePassword($password);
            if (empty($errors)) {
                // echo "Password is valid.";
                $passwordValid = true;
            } else {
                $passwordErr = "* ";
                foreach ($errors as $error) {
                    $passwordErr .= $error;
                }
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
                $_SESSIOM['acesss'] = 'granted';
                // ob_end_flush();
                // header("Location: Index/index.php");
                // header("Location: example.php");
                exit();
            } else {
                echo "account does not exist";
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

<body>
    <header>
    </header>
    <main>
        <div id="home-container" class="main-container center">
            <!-- <div id="welcome">Welcome to LOSS</div>
            <br><br> -->
            <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="username">Username</label><br>
                <input class="focus-input" type="text" id="username" name="username" placeholder="Enter your studentnumber" value="<?php echo $username;?>">
                <span id="required-err"><?php echo $usernameRequiredErr ?></span>
                <br><br>
                <label for="password">Password</label><br>
                <input class="focus-input" type="password" id="password" name="password" value="<?php echo $password;?>">
                <span id="required-err"><?php echo $passwordRequiredErr ?></span>
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

                <input type="submit" name="submit" id="submitBtn" value="Sign In">
            </form>
            <br><br>
            <div id="signup-forgot-container">
                <div id="signup">
                    New here? <a href="./signUp.php" >Apply!</a>
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