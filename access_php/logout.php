<?php
//for home page logout
    session_start();
    include '../config/db-connect.php';
    echo $status =  $_SESSION['$admin_id'];
    if(isset($_REQUEST['logout-btn']) || isset($_REQUEST['login-account-btn'])){
        mysqli_query($db,"UPDATE `register-table` SET `status`= 0 WHERE id= $status");
    }
    session_destroy();
    header('location:../index.php');
?>