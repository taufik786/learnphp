<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'phpProject';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Db Connection failed");
} else {
    echo 'Db Connection successfull';
} 
echo '<br>';

// Insert data in sql 
$sql = "INSERT INTO my_table2 (name, role) VALUES ('Taufik', 'India')";
$result = mysqli_query($conn, $sql);

if($result) {
    echo "The record has been inserted successfully!";
} else {
    echo "The record has not been inserted successfully! bcz of error ----> ". mysqli_error($conn);
}

?>

