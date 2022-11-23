<?php

$servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='project';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);

$id2=$_GET['rn'];

$query="DELETE FROM users WHERE Email='$id2' ";

$result=mysqli_query($con,$query);

if ($result)
{

    header('Location: admin1.php');

}
else
{
    header('Location: admin1.php');

}