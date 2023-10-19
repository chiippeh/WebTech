<?php

$fname = $lname = $email = $password = $confirmPassword = "";
// $nameRequiredErr = $surnameRequiredErr = $usernameRequiredErr =  $passwordRequiredErr = $emailRequiredErr = "";
$nameErr = $surnameErr = $usernameErr = $passwordErr  = $confirmPasswordErr = $emailErr = "";
$nameValid = $confirmImagesValid = $surnameValid = $usernameValid = $passwordValid = $confirmPasswordValid = $emailValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") { //if the submit button has been pressed
    require_once('validate.php');
    require_once('conn.php');

    if (empty($_POST["fname"])) {
        $nameErr = "* First name is required";
    } else {
        $fname = sanitiseInput($_POST["fname"]);

        // validate name
        $errors  = validateAlphabet($fname);

        if (empty($errors)) {
            $nameValid = true;
        } else {
            $nameErr = "* First name is invalid";
        }
    }

    if (empty($_POST["lname"])) {
        $surnameErr = "* Surname is required";
    } else {
        $lname = sanitiseInput($_POST["lname"]);

        //validate surname
        $errors = validateAlphabet($lname);

        if (empty($errors)) {
            $surnameValid = true;
        } else {
            $surnameErr = "* Surname is invalid";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "* Email is required";
    } else {
        $email = sanitiseInput($_POST["email"]);

        //validate email
        $errors = validateEmail($email);

        if (empty($errors)) {
            $emailValid = true;
        } else {
            $emailErr = "* Email is invalid";
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
        }
    }

    if (empty($_POST["confirm-pass"])) {
        $confirmPasswordErr = "* Password is required";
    } else {
        $confirmPassword = sanitiseInput($_POST["confirm-pass"]);

        // validate password
        $errors = validatePassword($confirmPassword);
        if (empty($errors)) {
            // echo "Confirm Password is valid.";
            // echo $password;
            if ($password == $confirmPassword) {
                $confirmPasswordValid = true;
                // echo $confirmPassword;
            } else {
                // echo "you idiot the password are not the same";
            }
        } else {
            $confirmPasswordErr = "* Confirm Password is invalid";
        }
    }
    if (empty($_FILES['profile-image']['name'])) {
        $confirmImagesValid = false;
    } else {

        $uploadedFiles = $_FILES['profile-image']['name'];
        $file_name = time() . $uploadedFiles;
        // Construct the destination path for the uploaded file
        $destination = "./images/studentImages/" . $file_name;
        // Move the uploaded file to the destination
        move_uploaded_file($_FILES['profile-image']["tmp_name"], $destination);


        $confirmImagesValid = true;
    }

    // if all the inputs are valid
    if ($nameValid && $surnameValid && $passwordValid && $confirmPasswordValid && $emailValid && $confirmImagesValid) {
        // echo "<br>all inputs are valid<br>";
        $encryptedPassword = sha1($password);
        $username = "g" . substr(date("Y"), 2) . strtolower(substr($lname, 0, 1)) . rand(1000, 9999);
        $query = "INSERT INTO students (`student_num`, `student_fname`, `student_lname`, `student_email`, `student_password`, `student_image`)
                      VALUES ('$username', '$fname', '$lname', '$email', '$encryptedPassword', '$file_name');";

        $result = mysqli_query($conn, $query);
        echo "<div id=\"success-popup\" class=\"center\">
                    <br><br><br>
                    <strong>
                        You have successfully been signed up!
                        <br>
                        Your username is: {$username}
                        <br><br>
                        <a href=\"home.php?username=" . $username . "\"><button style=\"width:20%; height:2em;\">Login</button></a>
                    </strong>
                  </div>";
    } else if ($nameValid && $surnameValid && $passwordValid && $confirmPasswordValid && $emailValid) {
        // echo "<br>all inputs are valid<br>";
        $encryptedPassword = sha1($password);
        $username = "g" . substr(date("Y"), 2) . strtolower(substr($lname, 0, 1)) . rand(1000, 9999);
        $query = "INSERT INTO students (`student_num`, `student_fname`, `student_lname`, `student_email`, `student_password`)
                      VALUES ('$username', '$fname', '$lname', '$email', '$encryptedPassword');";

        $result = mysqli_query($conn, $query);
        echo "<div id=\"success-popup\" class=\"center\">
                    <br><br><br>
                    <strong>
                        You have successfully been signed up!
                        <br>
                        Your username is: {$username}
                        <br><br>
                        <a href=\"home.php?username=" . $username . "\"><button style=\"width:20%; height:2em;\">Login</button></a>
                    </strong>
                  </div>";
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

<body class = "no-shrink">
    <header>
    </header>
    <main id="home-signup-main">
        <div class="center" style="text-align: center;">
            <a href="home.php">
                <img id="logo" src="images/hamrat_png_logo.png" alt="">
            </a>
        </div>

        <div class="home-container main-container center">
            <!-- <div id="welcome">Welcome to LOSS</div>
            <br><br> -->
            <form id="sign-up" action="" method="POST" enctype="multipart/form-data">
                <label for="fname">* First Name:</label><br>
                <input class="focus-input" type="text" id="fname" name="fname" value="<?php echo $fname; ?>">
                <span id="err"><?php echo $nameErr ?></span>
                <br><br>
                <label for="lname">* Surname:</label><br>
                <input class="focus-input" type="text" id="lname" name="lname" value="<?php echo $lname; ?>">
                <span id="err"><?php echo $surnameErr ?></span>
                <br><br>
                <!-- <label for="username">Username:</label><br>
                <input class="focus-input" type="text" id="username" name="username" value="">
                <br><br> -->
                <label for="email">* Email:</label><br>
                <input class="focus-input" type="text" id="email" name="email" value="<?php echo $email; ?>">
                <span id="err"><?php echo $emailErr ?></span>
                <br><br>
                <label for="password">* Password:</label><br>
                <input class="focus-input" type="password" id="password" name="password" value="<?php echo $password; ?>">
                <span id="err"><?php echo $passwordErr ?></span>
                <br><br>
                <label for="confirm-pass">* Confirm Password:</label><br>
                <input class="focus-input" type="password" id="confirm-pass" name="confirm-pass" value="<?php echo $confirmPassword; ?>">
                <span id="err"><?php echo $confirmPasswordErr ?></span><br><br>
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
                <label for="profile-image">Add a profile Image:</label><br>
                <input style="text-align:center" class="focus-input" type="file" id="profile-image" name="profile-image" accept=".jpg, .png, .jpeg">
                <br><br>

                <input type="submit" name="submit" id="submitBtn" value="Sign Up">
                <div id="signup-forgot-container" style="text-align: right">
                    Already have an account? <a href="./home.php">Sign In!</a>
                    <!-- <div id="signup" >
                </div> -->
                </div>
            </form>

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
                </a>
            </p>
        </div>
    </footer>
</body>

</html>