<style>
    table,th,tr,td{border:1px solid red;border-collapse:collapse;}
</style>

<table>
    <tr>
        <th>No</th>
        <th>Name</th>
        
    </tr>
    <?php 
        require '../config/db-connect.php';
      $arr = mysqli_query($db,"SELECT * FROM number_table");
        print_r($arr);
    

    //$arr = array('ko ko','kyaw kyaw','Mg Mg',"Hla Hla",'Aye Aye','Tun Tun');
    ?>
   
</table>