<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['images']) || empty($_POST['price']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $name = $_POST['name'];
            $images = $_POST['images'];
            $price = $_POST['price'];

            $query = " insert into products (name, images, price) values('$name','$images','$price')";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>