<?php
require '../config/db-connect.php';
error_reporting(0);

$register_btn = $_POST['register-btn'];
$email = $_POST['email'];
$name= $_POST['name'];
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm-password']);
$role = $_POST['role'];
$query = "INSERT INTO `register-table`(`name`,`email`, `password`,`role`) VALUES ('$name','$email','$password','$role')";
$sql=mysqli_query($db,"SELECT * FROM `register-table` WHERE `email`='$email'");
$row = mysqli_num_rows($sql);

if(isset($register_btn)){

    if($row === 1){
              
            $noti_mail = "Email is exit, try again!";
            
    }else{
        if($email!='' && $password!='' && $password == $confirm_password){
            $noti_mail = "Account is created successful!";
            mysqli_query($db,$query);
            
            
        }
       
    }
    
    
}


?>
   

