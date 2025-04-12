<?php
 session_start();
 require 'config/db-connect.php';
    

if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = trim($_POST['password']);

    $sql= mysqli_query($db,"SELECT * FROM `register-table` WHERE email='$email' AND password='$password'");      
    if(mysqli_num_rows($sql)===1){  
        
        foreach($sql as $user){     
            $id = $user['id'];         
            $name = $user['name'];         
            $role = $user['role'];         
        }
        if($role=='admin'){
            header('location:dashboard/admin-dashboard.php');
            mysqli_query($db,"UPDATE `register-table` SET `status`='1' WHERE id=$id");
            $_SESSION['$admin_name'] = $name ;
            $_SESSION['$admin_id'] = $id ;
        }else{
            header('location:dashboard/user-dashboard.php');
            $_SESSION['$user_name'] = $name ;
        }
     
    }

}
?>