<?php

session_start();


$mysqli = new mysqli('localhost','root','','students') or die(mysqli_error($mysqli));

$update = false;
$id = 0;
$PinNumber = '';
$FirstName = '';
$Surname = '';
$Programme = '';
$Password = '';



if(isset($_POST['save'])){

    $PinNumber = $_POST['PinNumber'];
    $FirstName = $_POST['FirstName'];
    $Surname = $_POST['Surname'];
    $Programme = $_POST['Programme'];
    $Password = $_POST['Password'];

   $mysqli->query("INSERT INTO logindetails (PinNumber, FirstName, Surname, Programme, Password) VALUES('$PinNumber', '$FirstName', '$Surname', '$Programme', '$Password')") or 
   die(mysqli_error($mysqli)); 

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: Admin.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM logindetails WHERE id=$id") or die(mysqli_error($mysqli));


    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: Admin.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM logindetails WHERE id=$id") or  die(mysqli_error($mysqli));
   if (count($result)==1){
    
         $row = $result->fetch_array();
         $PinNumber  = $row['PinNumber'];
         $FirstName  = $row['FirstName'];
         $Surname    = $row['Surname'];
         $Programme  = $row['Programme'];
         $Password   = $row['Password'];
       }

       
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $PinNumber  = $row['PinNumber'];
    $FirstName  = $row['FirstName'];
    $Surname    = $row['Surname'];
    $Programme  = $row['Programme'];
    $Password   = $row['Password'];

   $mysqli->query("INSERT INTO logindetails (PinNumber, FirstName, Surname, Programme, Password) VALUES('$PinNumber', '$FirstName', '$Surname', '$Programme', '$Password')") or die(mysqli_error($mysqli));
    
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header("location: Admin.php");
}