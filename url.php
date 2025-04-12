<a href="home.php?userID='.$row->customer_id.'">kshskdg</a>



    <?php

    //MySQL Database Connect
    include 'connect.php';

        // confirm that the 'id' variable has been set
        if (isset($_GET['userID']) && is_numeric($_GET['userID']))
        {
                // get the 'id' variable from the URL
                $id = $_GET['userID'];

                /* Delete row from the customer table */
                $id = $dbh->exec("DELETE FROM customer WHERE customer_id = '$id'");

                $stmt->execute();
        }
?>
