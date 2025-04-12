
<?php
require '../config/db-connect.php';
//for admin name
$sql=mysqli_query($db,"SELECT * FROM `register-table` WHERE status='1'");

if(mysqli_num_rows($sql) === 1){
    foreach($sql as $name){
        $admin_name =$name['name'];
        $status =$name['status'];
    }
}

if(isset($_REQUEST['del_btn'])){
        $del_id =$_GET['req_id'];
        $qry=mysqli_query($db,"SELECT * FROM `register-table` WHERE id=$del_id");
        if(mysqli_num_rows($qry) === 1){
            foreach($qry as $status){              
                $st = $status['status'];
            }
            if($st == 1){
                
                echo "<script> window.onload = () =>{ alert('You are currently login state!')}</script>";
                
                
            }else{
            
                
              
                mysqli_query($db,"DELETE FROM `register-table` WHERE id=$del_id");
                header('location:admin-dashboard.php');
            }
        }
        
      
}
if(isset($_REQUEST['edit_btn'])){
            global $edit_id;
         $edit_id =$_GET['req_id'];
        $qry = mysqli_query($db,"SELECT * FROM `register-table` WHERE id=$edit_id");
        foreach($qry  as $edit_acc){
           $edit_name= $edit_acc['name'];
           $edit_email= $edit_acc['email'];
           $edit_password= $edit_acc['password'];
           $edit_role= $edit_acc['role'];
        }
}
if(isset($_REQUEST['update-btn'])){

            
        // $qry = mysqli_query($db,"SELECT * FROM `register-table` WHERE id=$edit_id");        
           $update_id= $_REQUEST['update_id'];
           $update_name= $_REQUEST['update_name'];
           $update_email= $_REQUEST['update_email'];
           $update_password=trim($_REQUEST['update_password']);         
           $update_role= $_REQUEST['update_role'];
           mysqli_query($db,"UPDATE `register-table` SET `name`='$update_name',`email`='$update_email',`password`='$update_password',`role`='$update_role' WHERE id=$update_id");
           header('location:admin-dashboard.php');
           
}


// 
// 
?>


<?php
    function userlist(){
?>

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
                    require '../config/db-connect.php';
                    $query=mysqli_query($db,'SELECT * FROM `register-table`');
                   
                    foreach($query as $userList){
                        
                        $id = $userList['id'];
                        $status = $userList['status'];
                ?>
            <tr>
                <td><?php echo $userList['name'];?></td>
                <td><?php echo $userList['email'];?></td>
                <td><?php echo $userList['password'];?></td>
                <td><?php echo $userList['role'];?></td>
                <td>
                    <form action="admin-dashboard.php?req_id=<?php echo $id; ?>&&status=<?php echo $status; ?>" method="POST">
                        <button name="edit_btn" type="submit" class = "btn btn-sm btn-primary">Edit</button>
                        /
                        <button type="submit" name="del_btn" class = "btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
                

            </tr>
            <?php   }?>
        
        </tbody>                  
</table>

<?php }?>
