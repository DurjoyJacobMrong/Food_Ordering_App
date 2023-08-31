<?php 
    session_start();

    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/Food_Ordering_App/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNSAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');

    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error()); //selecting database

?>