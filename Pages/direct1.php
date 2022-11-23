<?php
session_start(); 
if (isset($_SESSION['username']))
{
    
include 'student.php';

}
else
{

header(' Location : index.php');

exit();

}
?>