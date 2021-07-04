<?php

include './assets/_dbconnect.php';
// require './assets/_dbConnect1.php';


$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'] .  ". Hello ". $row['name'] ." Your Email ". $row['email']. " and Your Concern is ". $row['concern']. " Date is ". $row['dt'];
        echo "<br>";
    }
