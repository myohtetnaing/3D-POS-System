<?php 
require '../config/db-connect.php';
error_reporting(0);

#For close number and it's portion
$closeNumber = $_REQUEST['closeNumberInput'];
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





#For inserting 3d-numbers to database

if(isset($_REQUEST['add3DnumberBtn'])){
    $number = $_REQUEST['input3Dnumber'];
    $amount = $_REQUEST['input3Damount'];
    $reverse = $_REQUEST['reverse'];

    $firstNum = str_split($number)[0];
    $secondNum = str_split($number)[1];
    $thirdNum = str_split($number)[2];

 

    if(isset($reverse)){
        #000
        if($firstNum == $secondNum and $firstNum == $thirdNum and $secondNum == $firstNum and $secondNum == $thirdNum and $thirdNum == $firstNum and $thirdNum == $secondNum){ 
            mysqli_query($db,"INSERT INTO `numbers_table`(number,amount) VALUES ($number,$amount)");
        }

        #001 010 100
        if($firstNum == $secondNum or  $firstNum == $thirdNum or $secondNum == $firstNum or $secondNum == $thirdNum or $thirdNum = $firstNum or $thirdNum == $secondNum ){
            $secondOf3 = $secondNum.$firstNum.$thirdNum;
            $thirdOf3 = $thirdNum.$secondNum.$firstNum;
            mysqli_query($db,"INSERT INTO `numbers_table`(number,amount) VALUES ('$number',$amount)");
            mysqli_query($db,"INSERT INTO `numbers_table`(number,amount) VALUES ('$secondOf3',$amount)");
            mysqli_query($db,"INSERT INTO `numbers_table`(number,amount) VALUES ('$thirdOf3',$amount)");

        }
    

    }else{

        mysqli_query($db,"INSERT INTO `numbers_table`(number,amount) VALUES ($number,$amount)");

    }
   
    header('location:user-dashboard.php');
   
}

?>

<?php 
//Display data from number-table

function dispalyFromNumberTable(){ ?>
    <div>
                        <table class="table table-borderd text-center table-hover">
                            <thead>
                                <tr>
                                    <th class="letter-spacing text-danger">No</th>
                                    <th class="letter-spacing text-danger">3D</th>
                                    <th class="letter-spacing text-danger">AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   require '../config/db-connect.php';
                                    $numbers = mysqli_query($db,"SELECT * FROM numbers_table");
                                    $id = 0;
                                    foreach($numbers as $number){
                                        $id++;
                                ?>
                                <tr>
                                    <td class="letter-spacing text-bolder"><?php echo $id ?>.</td>
                                    <td class="letter-spacing text-bolder"><?php echo $number['number'] ?></td>
                                    <td class="letter-spacing text-bolder"><?php echo $number['amount'] ?></td>
                                
                                </tr>
                            <?php } ?>
                            </tbody>                  
                        </table>
    </div>
<?php } ?>
 