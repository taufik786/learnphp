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

// Create table
$sql = "CREATE TABLE `my_table2` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `role` VARCHAR(20) NOT NULL , `doj` DATE NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

if($result) {
    echo "The Table was created successfully!";
} else {
    echo "The Table was not created succesfully bcz of error ----> ". mysqli_error($conn);
}

?>

