<?php 
require '../config/db-connect.php';
error_reporting(0);
$btn = $_REQUEST['limit_btn'];
$num = $_REQUEST['limit_num'];
$del_btn= $_REQUEST['limit_del_btn'];
$max_num = 9999999;
$min_num = 1000;

$qry = mysqli_query($db,"SELECT * FROM limitation_table");
foreach($qry as $data){
    $display = $data['limitation'];
}

if(isset($btn)){
    if($num >= $min_num && $num < $max_num && $num != '' && $display == ''){
        mysqli_query($db,"INSERT INTO limitation_table (limitation) VALUES('$num')");
        header('location:user-dashboard.php');
    }
}
if(isset($btn)){
    if(!empty($display) && !empty($num)){
        $exit_value = "Delete previous value!";
            
    }
    if($num < $min_num){
        $exit_value = $num.' is less than '.$min_num;
       
    }
}


if(isset($del_btn)){
    mysqli_query($db,"DELETE FROM `limitation_table` WHERE limitation = $display ");
    header('location:user-dashboard.php');
}

//for insert data 

if(isset($_REQUEST['3dbtn'])){
    $num = $_REQUEST['3dnumber'];
    $amount = $_REQUEST['3damount'];
    $reverse = $_REQUEST['3dreverse'];
    mysqli_query($db,"INSERT INTO `number_table`(Number,Amount) VALUES ('$num','$amount')");
    header('location:user-dashboard.php');
}

?>

<?php 
//Display data from number-table

function dispaly_num(){ ?>
    <div>
                        <table class="table table-borderd text-center table-hover">
                            <thead>
                                <tr>
                                    <th class="letter-spacing text-danger">3D</th>
                                    <th class="letter-spacing text-danger">AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   require '../config/db-connect.php';
                                    $query = mysqli_query($db,"SELECT * FROM number_table");
                                    foreach($query as $data_output){
                                ?>
                                <tr>
                                    <td class="letter-spacing text-bolder"><?php echo $data_output['Number'] ?></td>
                                    <td class="letter-spacing text-bolder"><?php echo $data_output['Amount'] ?></td>
                                
                                </tr>
                            <?php } ?>
                            </tbody>                  
                        </table>
    </div>
<?php } ?>