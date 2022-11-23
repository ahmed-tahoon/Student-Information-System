<?php

$servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='sis_ci';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);

$id2=$_GET['rn'];

$query="DELETE FROM stu WHERE id='$id2' ";

$result=mysqli_query($con,$query);

if ($result)
{

    header('Location: student2.php');

}
else
{
    header('Location: student2.php');

}