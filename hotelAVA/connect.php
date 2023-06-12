<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "AVA";

    $link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    mysqli_query($link, "SET NAMES utf8");
?>