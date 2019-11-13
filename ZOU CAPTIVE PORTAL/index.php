<?php 
session_start();
if(isset($_SESSION['User'])) {
    header('location: welcome.php');
}

if(isset($_SESSION['logged_already'])) {
    echo'<script type="text/javascript">alert("Oops, looks like you are logged in already. Please log out your current session first.")</script>' ;
    unset($_SESSION['logged_already']);
}
?>

<html>
<head>
<title>ZOU CAPTIVE PORTAL</title>
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
       <h3>WIFI ACCESS</h3>     
           
            <!-- added target="_blank" attribute to make the instructions
                open on their own tab
             -->
            <a target="_blank" href="img/ZOU CAPTIVE PORTAL LOGIN INSTRUCTIONS.pdf"><button type="button" class="btn btn-primary"> Login Instructions</button></a>
		</div>

		<div class="col-md-7 register-right">
          <form action="process.php" method="post">
            <h2> Login </h2>
                <!-- check for the invalid_login flag
                     if it's set, then show the invalid_login error
                 -->
                <?php if(isset($_SESSION['invalid_login'])): ?>
                    <center><h7 style="color:red"> Invalid login, please try again </h7></center><br>
                <!-- finally unset the flag -->
                <?php endif; unset($_SESSION['invalid_login']); ?>

				<input type="text" name="PinNumber" class="form-control mb-3" placeholder="Username"  required="">
			
			
				<input type="password" name="Password" class="form-control mb-3" placeholder="Password"  required="">
			
			<button class="btn btn-primary" name="Login">Login</button>
              
        </form>
		</div>
	</div>
</div>
</div>
</div>


</html>
