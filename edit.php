<?php 

    require_once("connection.php");
    $id = $_GET['GetID'];
    $query = " select * from products where id='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $name = $row['name'];
        $images = $row['images'];
        $price = $row['price'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<style>
	   body {
		background-image:url(admin.jpg);
	background-size:cover;
	background-attachment:fixed;
   
        }
		</style>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form </h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?id=<?php echo $id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder="  Name " name="name" value="<?php echo $name ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Image [images/<filename>.<extention>]" name="images" value="<?php echo $images ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Price " name="price" value="<?php echo $price ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>