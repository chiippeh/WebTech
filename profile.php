<?php
require_once("conn.php");
require_once("BackendFiles/secure.php");
$student_id_current = $_SESSION['student_id'];
$query = "SELECT student_fname, student_email, student_image FROM students
          WHERE student_id = '" . $student_id_current . "';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$student_id = $row["student_fname"];
$student_email = $row["student_email"];
$student_profile_image = $row["student_image"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body class="no-shrink">
    <header>
    </header>
    <div class="profile-container">
        <div class="profile-image">
            <?php
                echo "<img src=\"images/studentImages/" . $student_profile_image . "\">";
            ?>
        </div>
        <div class="profile-name">
            <?php
            echo $student_id;
            ?>
        </div>
        <div class="profile-email">
            <?php
            echo $student_email;
            ?>
        </div>
        <button class="profile-password">
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Show More</a>
        </button>
    </div>
</body>

</html>