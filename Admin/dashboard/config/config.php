<?php
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $database = 'website';
    global $db;

    $db = new mysqli($servername, $username, $password, $database, 3308);
    if ($db->connect_error) {
        die("Connection failed: ". $db->connect_error);
    }
?>