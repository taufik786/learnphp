<?php
    // db connection to mysql
    $servername = 'localhost';
    $username = 'root';
    $password = '';


    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);
    
    // Die if connection was not succeccfull.
    if (!$conn) {
        die('Sorry we cannot connect to database'.mysqli_connect_error());
    } else {
        echo "Connection was successfull";
    }

    echo '<br>';

    // Create a db
    $sql = 'CREATE DATABASE dbPHP';
    $result = mysqli_query($conn, $sql);

    // check the creation successfull or not
    if($result) {
        echo "The db was created successfully!";
    } else {
        echo "The db was not created succesfully bcz of error ----> ". mysqli_error($conn);
    }
    // echo "This is result ". var_dump($result);


?>