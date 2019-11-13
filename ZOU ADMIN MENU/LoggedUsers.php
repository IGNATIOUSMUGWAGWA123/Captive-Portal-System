<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA_Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <title>ZOU CAPTIVE PORTAL ADMIN MENU</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: ZOU CAPTIVE PORTAL
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: ignatiousmugwagwa.netlify.com
    License: https://ignatiousmugwagwa.netlify.com/license/
  ======================================================= -->
    <style>
        nav {
            width: 100%;
            background: #007bff;
            overflow: auto;
        }
        
        ul {
            padding: 0;
            margin: 0 0 0 150px;
            list-style: none;
        }
        
        li {
            float: right;
        }
        
        .logo img {
            position: absolute;
            margin-top: 15px;
            margin-left: 10px;
        }
        
        nav a {
            width: 100px;
            display: block;
            padding: 20px 15px;
            text-decoration: none;
            font-family: Arial;
            color: #f2f2f2;
            text-align: center;
        }
        
        nav a:hover {
            background: white;
            transition: 0.5s;
        }
    </style>

</head>
<div class="logo">
    <a href="#"><img src="img/ADMIN LOGO.png"></a>
</div>
<nav>
    <ul>
        <li><a href="index.php">Logout</a></li>
        <li><a href="Admin.php">Home</a></li>
    </ul>
</nav>
<br>
<br>
<br>

<body>
    <?php

     if(isset($_SESSION['Adminname']))
{
    echo '<right>You are loggedin as ' . $_SESSION['Adminname'].'</right><br/>';   
}

?>
        <?php require_once 'process.php'; ?>

            <?php

         if (isset($_SESION['message'])): ?>

                <div class="alert alert-<?=$_SESSION['msg_type']?>">

                    <?php

            echo $_SESSION['message'];
            unset($_SESSION['message']);

            ?>
                </div>
                <?php endif ?>

                    <div class="container">
                        <?php
        $mysqli = new mysqli('localhost','root','','students') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM user_sessions") or die(mysqli_error);
       // pre_r($result);
        ?>
                            <div class="row justify-content">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th>ID</th>
                                            <th>USER_IP</th>
                                            <th>AGENT</th>
                                            <th>USER_ID</th>
                                            <th>EXPIRES_AT</th>
                                        </tr>
                                    </thead>

                                    <?php
                while ($row = $result->fetch_assoc()):
                 ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['ip']; ?>
                                                
                                            </td>
                                            <td>
                                                <?php echo $row['agent']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['user_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['expires_at']; ?>
                                            </td>
                                            

                                        </tr>
                                        <?php endwhile; ?>
                                </table>
                                <?php

       function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';

        }
        ?>

                            </div>
</body>

</html>