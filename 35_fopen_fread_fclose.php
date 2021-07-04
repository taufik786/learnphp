<?php

$fptr = fopen("./assets/file.txt", 'r');
// echo var_dump($fptr);

if(!$fptr){
    die('Unable to open file. plz enter a valid filename');
}

$content = fread($fptr, filesize('./assets/file.txt'));
echo $content;

?>