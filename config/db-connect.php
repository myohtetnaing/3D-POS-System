<?php 
$server = 'localhost';
$userName = 'root';
$passWord = '';
$databaseName = 'mydb';
$db= mysqli_connect($server,$userName,$passWord,$databaseName);

if(empty($db)){
    $error = "Database is not connected succeful!";
    die('Error :'.$error);
}

?>