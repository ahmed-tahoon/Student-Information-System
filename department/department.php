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
                <a href="../direct1.php"><img src="../images/home-icon-silhouette (1).png" height="50px" class="home"></a>
               
               
                <a href = "./signout.php " > <button  class="logout">Logout</button> </a>

                 
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
        
          <?php
          $cs="CS";
          $it="IT";
          $is="IS";
          $mm="MM";

          ?>
        <table>
            <tr>
                <th class="big">Department Name</th>
                <th>Student</th>
            </tr>
            <tr>
                <td>Computer Science (CS) </td>
                <?php
                echo "
                <td>
                <a href='department1.php?s_n=$cs '>";?>
                <img src="../images/student2.png" alt="" height="35px" class="student">
                </td>

            </tr>
            
            <tr>
                <td>Information Technology (IT) </td>
                <?php
                echo "
                <td>
                <a href='department1.php?s_n=$it '>";?>
                <img src="../images/student2.png" alt="" height="35px" class="student">
                </td>
               
            </tr>
            <tr>
                <td>Information System (IS) </td>
                <?php
                echo "
                <td>
                <a href='department1.php?s_n=$is '>";?>
                <img src="../images/student2.png" alt="" height="35px" class="student">
                </td>
               
            </tr>
            <tr>
                <td>Multi Media (MM)</td>
                <?php
                echo "
                <td>
                <a href='department1.php?s_n=$mm '>";?>
                <img src="../images/student2.png" alt="" height="35px" class="student">
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