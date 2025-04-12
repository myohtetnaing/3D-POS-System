<?php 
    require '../link/css-link.php'; 
    require '../link/js-link.php';
    require 'custom-css.php';
    require '../config/db-connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Record Page</title>
    <?php access_phpCssLink(); totalRecord(); ?>
</head>
<body class="bg-info">

<div class="container-fluid bg-danger">
    <div class="p-3">
        
        <form action="../access_php/logout.php" method="POST">
            <a href="../dashboard/user-dashboard.php" class="text text-white">Home</a>
            <button type="submit" onclick="return confirm('Are you logout account?')" href="#" class="float-end btn btn-sm btn-warning">Logout</button>
        </form>
        
    </div> 
</div>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-title text-center mt-4"><h5>Total Amount</h5></div><hr>
                <div class="card-body">
                    <?php
                        $sum = mysqli_query($db,"SELECT SUM(Amount) as amount FROM `number_table`");
                        while($amt = mysqli_fetch_array($sum )){
                    ?>
                    <h5 class="text"><i class="fa fa-calculator"></i> Calculation : <?php echo $amt['amount'];?></h5>
                    <?php } ?>
                    <h5 class="text"><i class="fa fa-calculator"></i>Total Amount</h5>
                </div>
            </div>
                 
        </div>
        <div class="col-md-8">

                <div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>3D</th>
                                <th>AMOUNT</th>
                                <th>Action / <button type="submit" class="btn btn-danger btn-sm">Delete All</button</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $qry = mysqli_query($db,"SELECT * FROM number_table");
                                foreach($qry as $data) {    
                                    $arr = $data['ID'];
                                   
                                  
                            ?>
                            <tr>
                                <td><?php echo $arr-531;?></td>
                                <td><?php echo $data['Number']?></td>
                                <td><?php echo $data['Amount']?></td>          
                                <td>
                                    <form action="" method="POST">                              
                                        <button type="button" name="edit_btn" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                                         /
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>  
                                    </form>
                                </td>
                            </tr>  
                       <?php } ?>
                        </tbody>                  
                    </table>
                </div>
        </div>       
    </div>  
</div> 
</body>
</html>  


