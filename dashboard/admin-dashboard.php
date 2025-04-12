<?php 
    session_start();
    require '../link/css-link.php'; 
    require '../link/js-link.php';
    require 'admin.php'; 
    include '../access_php/register.php';
    
    if(!isset($_SESSION['$admin_name'])){
        header('location:../index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <?php include '../access_php/custom-css.php'; admin_css_dashboard();  ?>
    <?php include '../access_php/custom-js.php'; admin_js_dashboard();  ?>  
    <?php dashboardCssLink() ?>
</head>
<body class="bg-info">
<div class="container-fluid bg-success">
    <div class="p-3">
        
        <form action="../access_php/logout.php" method="POST">
            <span class="text text-white"><i class="fa-solid fa-user"></i> <?php echo $admin_name; ?></span>
            <button type="submit" name="logout-btn" href="#" onclick="return confirm('Are you logout account?')" class="float-end btn btn-sm btn-warning">Logout</button>
        </form>
        
    </div>
    
</div>
     
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-4">    
            <div class="row mt-1">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <?php 
                        
                        if(isset($_REQUEST['edit_btn'])){                   
                            require '../access_php/edit.php';
                            
                        }elseif(isset($_REQUEST['create_acc_btn'])){
                            require '../access_php/signup.php';
                        }else{
                            require '../access_php/signup.php';
                        }
                      
                    ?>
                   
                </div>
                <div class="col-md-1"></div>
            </div>   
            
        </div>
        <div class="col-md-8">
            <div>
                <?php userlist(); ?>
            </div>
        </div>
        
    </div>
</div> 
<script>
    
</script>
          
</body>
</html> 

