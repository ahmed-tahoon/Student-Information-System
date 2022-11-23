<?php
  $servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='sis_ci';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);


$sql = ("SELECT * FROM department");

$result = mysqli_query($con,$sql);
$coun = mysqli_num_rows($result);

if (!$result)
{

echo "there are probelm". mysqli_error($con);

}

//$student = mysqli_fetch_array($result);

?>


<body>
    <head>
        <link rel="stylesheet" href="department.css">
        <script src="department.js" defer></script>
    </head>
    <body>
        <div class="body">
        <div class="nav">
             
            <div class="admin">
                <a href="../student.html"><img src="../images/home-icon-silhouette (1).png" height="50px" class="home"></a>
               
                <p>Admin</p>
                 
           </div>
           <ul class="links"> 
            <li class="lll"> <a href="../student2/student2.php" class="profile link1">Student</a></li> 
            <li class="lll"> <a href="../courses/courses.php" class="profile link2">Courses</a></li> 
            <li class="lll"><a href="department.php" class="profile link3">Department</a></li> 
            <li class="lll"> <a href="../setting/setting.php" class="profile link4">Setting</a></li> 
      </ul>
      <img src="../images/list.png" height="40px" class="menu" onclick="menu2()">
             
           
             


          </div>
          <!--========================================================== table ========================================================================================-->
          <h1 class="left">Department Details</h1>
        
        <table>
            <tr>
                <th>Department Name</th>
                <th>Studend</th>
            </tr>
            <tr>
                <td>Computer Science (CS) </td>
                <td>
                    <img src="../images/delete.png" alt="" height="25px">
                </td>
               
            </tr>
            
            <tr>
                <td>Information Technology (IT) </td>
                <td>
                    <img src="../images/delete.png" alt="" height="25px">
                </td>
               
            </tr>
            <tr>
                <td>Information System (IS) </td>
                <td>
                    <img src="../images/delete.png" alt="" height="25px">
                </td>
               
            </tr>
            <tr>
                <td>Multi Media (MM)</td>
                <td>
                    <img src="../images/delete.png" alt="" height="25px">
                </td>
               
            </tr>
            
        </table>
    </div>
        <!--================================================================= add new =========================================================================================-->
        
        </div>
        <div class="opacity"></div>
        <div class="menu_list">
            <ul class="lists"> 
                <li class="list"> <a href="../student2/student2.php" class="icon">Student</a></li> 
                <li class="list"> <a href="../courses/courses.php" class="icon">Courses</a></li> 
                <li class="list"><a href="department.php" class="icon">Department</a></li> 
                <li class="list"> <a href="../setting/setting.php" class="icon">Setting</a></li> 
          </ul>
        
        
           </div>


        
    </body>
</body>