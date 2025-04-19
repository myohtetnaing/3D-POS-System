<?php
 session_start();
 require 'config/db-connect.php';  

if(isset($_POST['loginBtn'])){
    $email = $_POST['loginEmail'];
    $password = trim($_POST['loginPassword']);

    $user = mysqli_query($db,"SELECT * FROM `users_table` WHERE email='$email' AND password='$password'");      
    if(mysqli_num_rows($user)===1){  
        
        foreach($user as $loginPerson){     
            $id = $loginPerson['id'];         
            $name = $loginPerson['name'];         
            $email = $loginPerson['email'];         
            $password = $loginPerson['password'];         
            $role = $loginPerson['role'];         
            $status = $loginPerson['status'];         
        }
        if($role=="admin"){
            header('location:dashboard/admin-dashboard.php');
            $_SESSION['$adminName'] = $name ;
            $_SESSION['$adminId'] = $id ;
            $_SESSION['adminStatus'] = $status;
            mysqli_query($db,"UPDATE `users_table` SET `status`= 'loginstate' WHERE id= $id");
        }else{
            header('location:dashboard/user-dashboard.php');
            $_SESSION['$userName'] = $name ;
            $_SESSION['$userId'] = $id ;
            $_SESSION['userStatus'] = $status;
            mysqli_query($db,"UPDATE `users_table` SET `status`= 'loginstate' WHERE id= $id");
        }
    
    }
}
?>