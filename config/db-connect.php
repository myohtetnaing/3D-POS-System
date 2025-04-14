<?php 
$server = 'localhost';
$userName = 'root';
$passWord = '';
$databaseName = 'mydb';
$db= mysqli_connect($server,$userName,$passWord,$databaseName);

if(empty($db)){
    die('Error : Database is not connected succeful!');
}
?>