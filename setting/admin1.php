<?php
  $servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='project';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);


$sql = ("SELECT * FROM users");

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
        <link rel="stylesheet" href="admin.css">
        <script src="admin.js" defer></script>
    </head>
    <body>
        <div class="body">
        <div class="nav">
             
            <div class="admin">
                <a href="../direct1.php"><img src="../images/home-icon-silhouette (1).png" height="50px" class="home"></a>
               
                <a href = "./signout.php " > <button  class="logout">Logout</button> </a>

                 
           </div>
           <ul class="links"> 
            <li class="lll"> <a href="../student2/student2.php" class="profile link1">Student</a></li> 
            <li class="lll"> <a href="../courses/courses.php" class="profile link2">Courses</a></li> 
            <li class="lll"><a href="../department/department.php" class="profile link3">Department</a></li> 
            <li class="lll"> <a href="../setting/setting.php" class="profile link4">Setting</a></li> 
      </ul>
      <img src="../images/list.png" height="40px" class="menu" onclick="menu2()">
             
           
             


          </div>
          <!--========================================================== table ========================================================================================-->
          <h1 class="left">Admin Details</h1>
        
        <table>
            <tr>
                <th>Admin Name</th>
                <th>Email</th>
                <th>Delete</th>

            </tr>
            <?php
           while ($admin = mysqli_fetch_array($result))
                {   
                  echo"
              <tr>
                <td>". $admin['Username'] ."</td>
                <td>". $admin['Email'] ."</td>
                <td>
                <a href='deleteadmin.php?rn=$admin[Email]'>";?>

                <img src="../images/delete.png" alt="" height="25px"></a>
                </td>
<?php
                }
     ?>       
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