<?php 
session_start();
if (!isset($_SESSION['granted'])) {
    header("Location:../home.php");
}
?>