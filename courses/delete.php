<?php

$servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='sis_ci';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);

$id2=$_GET['rn'];

$query="DELETE FROM course WHERE course_id='$id2' ";

$result=mysqli_query($con,$query);

if ($result)
{

    header('Location: courses.php');

}
else
{
    header('Location: courses.php');

}