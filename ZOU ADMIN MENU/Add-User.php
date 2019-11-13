<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA_Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Add-Student</title>
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
        <li><a href="Admin.php">Dashboard</a></li>

    </ul>
</nav>
<br>
<br>
<br>

<body>

    <div class="row justify-content-center">

        <form action="process.php" method="POST">

            <input type="hidden" name="id" value="">
            <div class="form-group">
                <label>PinNumber :</label>
                <input type="text" name="PinNumber" class="form-control" value="" placeholder="Enter student PinNumber">
            </div>
            <div class="form-group">
                <label>Firstname :</label>
                <input type="text" name="FirstName" class="form-control" value="" placeholder="Enter student FirstName">
            </div>
            <div class="form-group">
                <label>Surname :</label>
                <input type="text" name="Surname" class="form-control" value="" placeholder="Enter student Surname">
            </div>
            <div class="form-group">
                <label>Programme :</label>
                <input type="text" name="Programme" class="form-control" value="" placeholder="Enter student Programme">
            </div>
            <div class="form-group">
                <label>Password :</label>
                <input type="password" name="Password" class="form-control" value="" placeholder="Enter student Password">
            </div>
            <div class="form-group">

                <button type="submit" name="save" class="btn btn-primary">Save</button>
                


            </div>
        </form>
    </div>
</body>

</html>