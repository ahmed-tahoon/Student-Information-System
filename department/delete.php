<?php

$servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='project';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);

$name=$_GET['r_n'];

$query="DELETE FROM users WHERE Username='$name' ";

$result=mysqli_query($con,$query);

if ($result)
{

    header('Location: department.php');

}
else
{
    header('Location: department.php');

}