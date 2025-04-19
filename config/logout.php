<?php

    session_start();
    include '../config/db-connect.php';
    
    $adminId =  $_SESSION['$adminId']; 
    #logout from admin-dashboard
    if(isset($_REQUEST['adminLogoutBtn']) || isset($_REQUEST['loginAccountBtnFromAdminDashboard'])){
        mysqli_query($db,"UPDATE `users_table` SET `status`= 0 WHERE id= $adminId");
    }


    #Logut from user-dashboard
    $userId = $_SESSION['$userId'];
    if(isset($_REQUEST['userLogoutBtn'])){
        mysqli_query($db,"UPDATE `users_table` SET `status`= 0 WHERE id= $userId");

    }

    session_destroy();
    header('location:../index.php');
?>

