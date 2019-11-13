<html>
<head>
<title>ZOU CAPTIVE PORTAL ADMIN MENU</title>
<link rel="stylesheet"  href="style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

</head>
<body>
</body>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-10 offset=md-1">
	<div class="row">
		<div class="col-md-5 register-left">
			<img src="img/zoulogo.png">
       <h4>ZOU CAPTIVE PORTAL</h4>
       <h5>Student WIFI Access Details</h5> 
       
           
        
		</div>
         <?php
                        
                        if(@$_GET['Empty']==true)
                        {
                        
                        ?>
                        <div class="alert-light text-danger text-center py-3">
                            <?php echo $_GET['Empty'] ?> 
                    </div>
                        <?php
                            
                        }
                        
                        ?>
                        
                        
                         <?php
                        
                        if(@$_GET['Invalid']==true)
                        {
                        
                        ?>
                        <div class="alert-light text-danger text-center py-3">
                            <?php echo $_GET['Invalid'] ?> 
                    </div>
                        <?php
                            
                        }
                        
                        ?>
		<div class="col-md-7 register-right">
          <form action="process1.php" method="post">
            <h2> Login </h2>
				<input type="text" name="Adminname" class="form-control mb-3" placeholder="Admin Name"  required="">
			
			
				<input type="password" name="Password" class="form-control mb-3" placeholder="Password"  required="">
			
			<button class="btn btn-primary" name="Login">Login</button>
              
        </form>
		</div>
	</div>
</div>
</div>
</div>


</html>
