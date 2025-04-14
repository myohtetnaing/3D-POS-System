<?php 
    session_start();
    require '../link/css-link.php'; 
    require '../link/js-link.php';
    require 'admin.php'; 
    require '../config/db-connect.php';
    include './partials/admin/addUser.php';
    
    if(!isset($_SESSION['$adminName'])){
        header('location:../index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-dashboard</title>
    <?php include '../access_php/custom-css.php'; admin_css_dashboard();  ?>
    <?php include '../access_php/custom-js.php'; admin_js_dashboard();  ?>  
    <?php dashboardCssLink() ?>
</head>
<body class="bg-info">
<div class="container-fluid bg-success">
    <div class="py-3">
        
        <form action="../config/logout.php" method="POST">
            <span class="text text-white">
                <i class="fa-solid fa-user text-danger px-2"></i> 
                <span class="bg-info rounded py-1 px-3"><?php echo $_SESSION['$adminName']; ?></span>
            </span>
            <button type="submit" name="adminLogoutBtn" href="#" onclick="return confirm('Are you logout account?')" class="float-end btn btn-sm btn-warning">Logout</button>
        </form>
        
    </div>
    
</div>
     
<div class="container-fluid mt-4">
    <div class="row px-5">
        <div class="col-md-4">    
            <div class="row mt-1">
                <div class="col">
                    <?php 
                        
                        if(isset($_REQUEST['userEditBtn'])){                   
                            require '../dashboard/partials/admin/editUserSection.php';
                        }else{
                            require '../dashboard/partials/admin/addUserSection.php';
                        }
                      
                    ?>
                   
                </div>
            </div>   
            
        </div>
        <div class="col-md-8">
            <table class="table table-borderd table-hover">
                <thead>
                    <tr class="text text-secondary">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Action</th>    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $users =mysqli_query($db,'SELECT * FROM `users_table`');
                            foreach($users as $userList){
                            $userId = $userList['id'];
                            $userStatus = $userList['status'];
            
                    ?>
                        <tr>
                            <td><?php echo $userList['name'];?></td>
                            <td><?php echo $userList['email'];?></td>
                            <td><?php echo $userList['password'];?></td>
                            <td><?php echo $userList['role'];?></td>
                            <td>
                                <form action="admin-dashboard.php?req-user-edit-id=<?php echo $userId ; ?> &&req-status=<?php echo $userStatus; ?>" method="POST">
                                    <button name="userEditBtn" type="submit" class = "btn btn-sm btn-primary">Edit</button>
                                    /
                                    <button type="submit" name="userDeleteBtn" class = "btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                            

                        </tr>
                        <?php   }?>
                    
                    </tbody>                  
            </table>
        </div>
        
    </div>
</div> 
<script>
    
</script>
          
</body>
</html> 

