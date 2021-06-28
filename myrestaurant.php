<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Burger Shack </title>
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>	
	<style>
	   body {
		background-image:url(admin.jpg);
	background-size:cover;
	background-attachment:fixed;
   
        }
		</style>
		
		
  </head>

  

  <body>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li><br>
			  <li><a href="view.php"><span class="glyphicon glyphicon-user"></span> View Items </a></li><br>
			  <li><a href="viewuser.php"><span class="glyphicon glyphicon-user"></span> View Users </a></li><br>
			  <li><a href="viewfeedback.php"><span class="glyphicon glyphicon-user"></span> View Feedbacks </a></li><br>
			  <li><a href="vieworders.php"><span class="glyphicon glyphicon-user"></span> View Orders </a></li><br>
			  <li><a href="vieworder_items.php"><span class="glyphicon glyphicon-user"></span> View Order Items </a></li><br>
			   <li><a href="vieworder_customers.php"><span class="glyphicon glyphicon-user"></span> View Order Customers </a></li><br>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
       
 

<div class="container">
    <div class="jumbotron">
     <h1>Hello Manager! </h1>
     <p>Add food items to your cart from here.</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	  <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder="  Name " name="name">
                                <input type="text" class="form-control mb-2" placeholder=" Images[images/<filename>.<extention>] " name="images">
                                <input type="text" class="form-control mb-2" placeholder=" Price " name="price">
                                <button class="btn btn-primary" name="submit">Add Items</button>
                            </form>  
         
</div>

  </body>
</html>