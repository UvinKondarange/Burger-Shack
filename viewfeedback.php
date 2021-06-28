<?php 

    require_once("connection.php");
    $query = " select * from contact ";
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
                                <td>  Name </td>
                                <td> Email </td>
                                <td> Mobile </td>
								<td> Subject </td>
								 <td>  Message </td>
                              
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Name = $row['Name'];
                                        $Email = $row['Email'];
                                        $Mobile = $row['Mobile'];
                                        $Subject = $row['Subject'];
										$Message = $row['Message']
                            ?>
                                    <tr>
                                        <td><?php echo $Name ?></td>
                                        <td><?php echo $Email ?></td>
                                        <td><?php echo $Mobile ?></td>
                                        <td><?php echo $Subject ?></td>
										<td><?php echo $Message ?></td>
                                       
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