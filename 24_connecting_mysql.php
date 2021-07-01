<?php
    # Two ways to connect to a MySql db

    /*
    1. MySQLi extention
    2. PDO
    */

    // db connection to mysql
    $servername = 'localhost';
    $username = 'root';
    $password = '';


    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);

    // Die if connection was not succeccfull.
    if (!$conn) {
        die('<h1> Sorry we cannot connect to database </h1>'.mysqli_connect_error());
    } else {
        echo "Connection was successfull";
    }

?>