<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $id = $_GET['Del'];
            $query = " delete from products where id = '".$id."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }

?>