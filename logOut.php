<?php
    require_once("BackendFiles/secure.php");

    session_destroy();

    header("Location: home.php");
?>