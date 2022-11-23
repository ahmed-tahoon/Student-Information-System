
<?php
  $servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='sis_ci';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);


$sql = ("SELECT * FROM stu");

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
        <link rel="stylesheet" href="student223.css">
        <script src="student2.js" defer></script>
    </head>
    <body>
        <div class="body">
            <div class="nav">
             
                <div class="admin">
                    <a href="../direct1.php"><img src="../images/home-icon-silhouette (1).png" height="50px" class="home"></a>
                    <a href = "./signout.php " > <button  class="logout">Logout</button> </a>

                    <p></p>
                     
               </div>
               <ul class="links"> 
                <li class="lll"> <a href="student2.php" class="profile link1">Student</a></li> 
                <li class="lll"> <a href="../courses/courses.php" class="profile link2">Courses</a></li> 
                <li class="lll"><a href="../department/department.php" class="profile link3">Department</a></li> 
                <li class="lll"> <a href="../setting/setting.php" class="profile link4">Setting</a></li> 
          </ul>
          <img src="../images/list.png" height="40px" class="menu" onclick="menu()">
             
           
             


          </div>
          <!--==================================================================================================================================================-->
         <a href="Add.php"> <button class="button right" onclick="header " >Add New Student</button> </a>
        <h1 class="left">Student Details</h1>
        
            <table>
            <tr>
                <th class="first">ID</th>
                <th class="small">Full Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Semster</th>
                <th>department</th>
                <th>GPA</th>
                <th class="small">Address</th>
                <th>Edit</th>
                <th>Delede</th>
                


            </tr>
            
 <?php
while ($student = mysqli_fetch_array($result))
{   
  echo"
  <tr>
                <td>". $student['id'] ."</td>
                <td>". $student['student_name'] ."</td>
                <td>". $student['student_email'] ."</td>
                <td>". $student['student_gender'] ."</td>
                <td>". $student['student_semester'] ."</td>
                <td>". $student['student_department'] . "</td>
                <td>". $student['gpa'] . "</td>
                <td>". $student['student_address'] ."</td>
                <td>
                <a href='editing.php?s_n=$student[student_name] &s_e=$student[student_email] 
                &sg=$student[student_gender] &gpa=$student[gpa]&q=$student[id]&sse=$student[student_semester] 
                &sd=$student[student_department] &ss=$student[student_address]' >";?>
                <img src="../images/editing.png" alt="" height="25px"></a>
                <?php
                echo "
                <td>
                    <a href='delete.php?rn=$student[id]'>";?>
                    <img src="../images/delete.png" alt="" height="25px"></a>
                    </td>
                </td>
                

 </tr>

<?php
}

?>
            
        </table>

    </div>
        <!--==========================================================================================================================================================-->
        

        

        <div class="opacity"></div>

        
        <div class="menu_list">
            <ul class="lists"> 
                <li class="list"> <a href="student2.php" class="icon">Student</a></li> 
                <li class="list"> <a href="../courses/courses.php" class="icon">Courses</a></li> 
                <li class="list"><a href="../department/department.php" class="icon">Department</a></li> 
                <li class="list"> <a href="../setting/setting.php" class="icon">Setting</a></li> 
          </ul>
        
        
           </div>


        
    </body>
</body>