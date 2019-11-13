<?php

require_once('connection.php');
session_start();

if(isset($_POST['Login']))
{
    
    

    $query="select * from administrators where Adminname='".$_POST['Adminname']."' and Password='".$_POST['Password']."'";
    $result=mysqli_query($con,$query);
        
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['User']=$_POST['Adminname'];
            
            

            $result = mysqli_query($con,$query);

            header("location:Admin.php");
        }
        else
        {
          header("location:index2.php");
        }
   }



?>