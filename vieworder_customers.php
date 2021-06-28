<?php 

    require_once("connection.php");
    $query = " select * from customers ";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>View Records</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered" >
                            <tr>
                                <td>  ID </td>
                                <td> First_Name </td>
                                <td> Last_Name </td>
								<td> Email </td>
								<td> Phome </td>
								<td> Address </td>
                              
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['id'];
                                        $first_name = $row['first_name'];
                                        $last_name = $row['last_name'];
                                        $email = $row['email'];
										$phone = $row['phone'];
										$address = $row['address'];
										
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $first_name ?></td>
                                        <td><?php echo $last_name ?></td>
                                        <td><?php echo $email ?></td>
										<td><?php echo $phone ?></td>
										<td><?php echo $address ?></td>
										
                                       
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>