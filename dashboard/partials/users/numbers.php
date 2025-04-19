<?php
    require '../../../asset/customize/custom-css.php';
    require '../../../config/db-connect.php';
    require '../../../link/css-link.php';
    require '../../../link/js-link.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>numbers-page</title>
    <link rel="stylesheet" href="../../../asset/css/bootstrap.min.css">
    <?php access_phpCssLink(); totalRecord(); ?>
</head>
<body class="bg-info">
    <section>
        <div class="container-fluid">
            <div class="row bg-danger p-3">
                <div class="col-md-12">
                    <nav>
                        <form action="../access_php/logout.php" method="POST">
                            <a href="../../user-dashboard.php" class="text text-white">>> Home </a>
                            <button type="submit" onclick="return confirm('Are you logout account?')" href="#" class="float-end btn btn-sm btn-warning">Logout</button>
                        </form>
                    </nav>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-title text-center mt-4"><h5>Total Amount</h5><hr></div>
                        <div class="card-body">
                            <?php
                                $sum = mysqli_query($db,"SELECT SUM(Amount) as amount FROM `numbers_table`");               
                                while($amt = mysqli_fetch_array($sum )){
                            ?>
                            <h5 class="text"><i class="fa fa-calculator"></i> Calculation : <?php echo $amt['amount'];?></h5>
                            <?php } ?>
                            <h5 class="text"><i class="fa fa-calculator"></i> Total Amount</h5>
                        </div>
                    </div>                
                </div>
                <div class="col-md-9">
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
                                        $qry = mysqli_query($db,"SELECT * FROM numbers_table");
                                        $id = 0;
                                        foreach($qry as $data) {  
                                            $id ++;  
                                            $arr = $data['id'];
                                        
                                        
                                    ?>
                                    <tr>
                                        <td><?php echo $id;?></td>
                                        <td><?php echo $data['number']?></td>
                                        <td><?php echo $data['amount']?></td>          
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
    </section>

    <script src="../../../asset/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</body>
</html>  


