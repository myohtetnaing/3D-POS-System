<?php
require '../config/db-connect.php';
error_reporting(0);

$addUserBtn = $_POST['addUserBtn'];
$email = $_POST['email'];
$name= $_POST['name'];
$password = trim($_POST['password']);
$newUser = "INSERT INTO `users_table`(`name`,`email`, `password`) VALUES ('$name','$email','$password')";
$exitUser=mysqli_query($db,"SELECT * FROM `users_table` WHERE `email`='$email'");
$exitEmail = mysqli_num_rows($exitUser);

if(isset($addUserBtn)){
    if($exitEmail=== 1){
        $addUserMsg = $name." is exit and use unique email!";  
    }else{
        if($email!='' && $password!=''){
            mysqli_query($db,$newUser);
            $addUserMsg = "New user is added successful!";    
        }   
    }
        
}


?>
   

