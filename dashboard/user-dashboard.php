<?php 
    session_start();
    require '../link/css-link.php'; 
    require '../link/js-link.php';
    require 'user.php'; 
    if(!isset($_SESSION['$user_name'])){
        header('location:../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <?php dashboardCssLink() ?>
    <?php require '../access_php/custom-css.php'; user_dashboard();?>
</head>
<body class="bg-info">
<div class="container-fluid bg-success">
    <div class="p-3">
        
        <form action="../access_php/logout.php" method="POST">
            <span class="text text-white user_name"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['$user_name']; ?></span>
            <a href="../access_php/total-record.php">Total Record</a>
            <a href="../access_php/limitation-record.php">Limation Record</a>
            <button type="submit" onclick="return confirm('Are you logout account?')" href="#" class="float-end btn btn-sm btn-warning">Logout</button>
        </form>
        
    </div>
    
</div>
    
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-3">
            <h5 class="title-limitation">Limitation</h5>
            
                <div class="form-group mt-4">
                    <form action="user-dashboard.php" method="POST">
                        <button type="submit" name="limit_btn" class="btn btn-primary btn-sm mb-2 text-uppercase">Add value</button>
                        <input type="text" required="required" id ="limit"  name="limit_num" maxlength="7" onkeyup="numberonly(this)" class="limit-input">
                        <label class="limit-label" for="limit">Enter limitation value</label>
                        
                        <?php if(!empty($exit_value)): ?>
                        <div>
                            <span class="text-danger form-control mt-2"> 
                                <?php error_reporting(0); echo $exit_value; ?>
                                <a href="" name="close" class="float-end text-decoration-none h5">&times;</a>
                            </span>
                        </div>
                    
                        <?php endif ?>
                        <?php if( !empty($display)): ?>
                        <span class="text-danger text-center form-control mt-2"><strong class="letter-spacing"><?php error_reporting(0); echo $display;?> KYATS</strong></span>
                        <?php endif ?>
                    </form>
                    <form action="user-dashboard.php" method="POST">
                        <button type="submit" name="limit_del_btn" class="btn btn-danger btn-sm mt-2">Delete value</button>                
                    </form>
                    
                </div>                
              
        </div>
        <div class="col-md-6">
            <div class="row">
                <?php

                $sum = mysqli_query($db,"SELECT SUM(Amount) as amount FROM `number_table`");
                while($amt = mysqli_fetch_array($sum )){
        
                ?>
               
                <div class="col-md-12">
                    <div>
                        <h5 class="letter-spacing pass-limitation-amount text-uppercase">Pass Limitation Amount : <?php echo $amt['amount'] ?></h5>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row mt-2">
                <?php dispaly_num() ?>
            </div>
        </div>
        <div class="col-md-3">
            <h5 class="title-insert">Insert 3D Number</h5>
            <form action="user-dashboard.php" method="POST">
                <div class="form-group insert-form-group mt-4">
                    
                    <input type="text" required class="insert-input" name="3dnumber" maxlength="3" onkeyup="numberonly(this)" id="3dnum">
                    <label for="3dnum" class="text-uppercase insert-label">Enter 3D Number</label>
                </div>
                <div class="form-group insert-form-group mt-3">

                    <input type="text" required class="insert-input" name="3damount" maxlength="6" onkeyup="numberonly(this)" id="3damount">
                    <label for="3damount" class="text-uppercase insert-label">Enter amount</label>
                </div>
                <div class="form-group insert-form-group mt-3">
                   
                    <input type="checkbox" name="3dreverse" id="r" name="reverse" value="show">
                    <label for="r" class="text-uppercase reverse">Reverse(R)</label><br> 
                </div>
                
                
                <div class="form-group insert-form-group mt-2" id="show-hide" style="display:none">               
                    <input type="text" id="reverse_amount" class="insert-input" name="3dreverseamount" maxlength="6" onkeyup="numberonly(this)">
                    <label for="reverse_amount" class="text-uppercase insert-label">Enter reverse value</label>
                </div>
               
                <button type="submit" id="mybtn" name="3dbtn" class="mt-3 btn btn-primary btn-sm mt-2 text-uppercase">Add value</button>  
            </form>
        </div>
    </div>
</div>     
<span id='tt'></span>          
<span id='ttr'></span>          
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        
        function numberonly(input){
                var num = /[^0-9]/gi;
                input.value = input.value.replace(num,"");
            }

            let r = document.getElementById('r');
           let showHide = document.getElementById('show-hide');
           let reverse_amount = document.getElementById('reverse_amount');
                var show = "show";
                var hide = "hide";
                let result;
        
                r.onclick = ()=>{
    
        if(r.value == show){
            r.setAttribute('value',hide); 
            showHide.style.display ="block";
            let atrr =document.createAttribute('required');
            reverse_amount.setAttributeNode(atrr)
        }else{
           r.setAttribute('value',show);
            showHide.style.display ="none";
            reverse_amount.removeAttribute('required')
        }     
    }

    </script>
   
</body>
</html> 
