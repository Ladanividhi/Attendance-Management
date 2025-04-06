<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "hwproject";

    $conection = mysqli_connect($servername,$username,$password,$db);
    // echo "<br>Database Connectivity Ok";
?>