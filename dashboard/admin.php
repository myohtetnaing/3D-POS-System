
<?php

    require '../config/db-connect.php';

// For deleting users but admin is currently login state
if(isset($_REQUEST['userDeleteBtn'])){
        $userDeleteId =$_GET['req-user-edit-id'];
        $deleteUser=mysqli_query($db,"SELECT * FROM `users_table` WHERE id=$userDeleteId");
        if(mysqli_num_rows($deleteUser) === 1){
            foreach($deleteUser as $checkStatus){              
                $status = $checkStatus['status'];
            }
            if($status == 'loginstate'){
                echo "<script> window.onload = () =>{ alert('You are currently login state!')}</script>";   
            }else{
                mysqli_query($db,"DELETE FROM `users_table` WHERE id=$userDeleteId");
                header('location:admin-dashboard.php');
            }
        }
        
      
}
// For making edit with edit buttion
if(isset($_REQUEST['userEditBtn'])){
        global $userEditId;
         $userEditId=$_GET['req-user-edit-id'];
        $user = mysqli_query($db,"SELECT * FROM `users_table` WHERE id= $userEditId");
        foreach($user  as $userEdit){
           $userEditName= $userEdit['name'];
           $userEditEmail= $userEdit['email'];
           $userEditPassword= $userEdit['password'];
        }
}
// For updating user information
if(isset($_REQUEST['updateBtn'])){
   
    echo $updateId= $_REQUEST['updateId'];
    echo $updateName= $_REQUEST['updateName'];
    echo $updateEmail= $_REQUEST['updateEmail'];
    echo $updatePassword=trim($_REQUEST['updatePassword']);         
    mysqli_query($db,"UPDATE `users_table` SET `name`='$updateName',`email`='$updateEmail',`password`='$updatePassword' WHERE id=$updateId");
    header('location:admin-dashboard.php');
           
}


?>



