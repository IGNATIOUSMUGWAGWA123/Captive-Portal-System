<?php

$con=mysqli_connect('localhost','root','','students');

if(!$con)
{
    die(' Please Check Your Connect'.mysql_error($con));
}

?>