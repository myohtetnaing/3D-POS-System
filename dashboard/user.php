<?php 
require '../config/db-connect.php';
error_reporting(0);

$closeNumber = $_REQUEST['closeNumberInput'];
$max_num = 9999999;
$min_num = 1000;

$closeNumbers = mysqli_query($db,"SELECT * FROM close_table");
foreach($closeNumbers as $data){
    $closeNumberFromDb = $data['number'];
}

if(isset($_REQUEST['closeNumberBtn'])){
    if($closeNumberFromDb == $closeNumber){
        $exitClosedNumber = "exit closed number!";
    }else{
        if(strlen($closeNumber)=== 3 ){
            mysqli_query($db,"INSERT INTO close_table (number) VALUES($closeNumber)");
            header('location:user-dashboard.php');
        }
    }
   
}


if(isset($_REQUEST['closeNumberDeleteBtn'])){
    mysqli_query($db,"DELETE FROM `close_table` WHERE number = $closeNumberFromDb ");
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