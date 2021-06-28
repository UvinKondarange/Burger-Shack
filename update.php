<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $images = $_POST['images'];
        $price = $_POST['price'];

        $query = " update products set name = '".$name."', images='".$images."',price='".$price."' where id='".$id."'";
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