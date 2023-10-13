<?php 
    require_once("BackendFiles/secure.php");
    require_once('conn.php');

    $reviewId = $_REQUEST['id'];

    $query = "DELETE FROM reviews WHERE review_id = '$reviewId'";

    $result = mysqli_query($conn, $query);

    mysqli_close($conn);

    header("Location: reviews.php");
?>