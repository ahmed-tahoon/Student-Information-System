<?php
  $servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='sis_ci';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);


$sql = ("SELECT * FROM course");

$result = mysqli_query($con,$sql);
$coun = mysqli_num_rows($result);

if (!$result)
{

echo "there are probelm". mysqli_error($con);

}

//$student = mysqli_fetch_array($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="courses2.css">
     <script src="courses.js" defer></script>
    <title>Courses</title>
</head>
<body>
    <!-- 000000000000000000000000000000000000000000000000                 nav    000000000000000000000000000000000000000000000000000000-->
      <div class="body">
          <div class="nav">
             
            <div class="admin">
                <a href="../direct1.php"><img src="../images/home-icon-silhouette (1).png" height="50px" class="home"></a>
                <a href = "./signout.php " > <button  class="logout">Logout </button></a>

                 
           </div>
           <ul class="links"> 
            <li class="lll"> <a href="../student2/student2.php" class="profile link1">Student</a></li> 
            <li class="lll"> <a href="courses.php" class="profile link2">Courses</a></li> 
            <li class="lll"><a href="../department/department.php" class="profile link3">Department</a></li> 
            <li class="lll"> <a href="../setting/setting.php" class="profile link4">Setting</a></li> 
         </ul>
         <img src="../images/list.png" height="40px" class="menu" onclick="menu2()">

          </div>



          <!--  000000000000000000000000000000000000000000000000000000000000000000000    page  table  000000000000000000000000000000000000000-->
          <a href="editing2.php"> <button class="button right"  onclick="header " >Add New Course</button> </a>
          <h1 class="left">Course Details</h1>
          
          <table>
              <tr>
                  <th class="first">Course id</th>
                  <th>Course Name</th>
                  <th>Credit</th>
                  <th>Update</th>
                  <th>Delete</th>

              </tr>
              <?php
while ($course = mysqli_fetch_array($result))
{   
  echo"
  <tr>
                <td>". $course['course_id'] ."</td>
                <td>". $course['course_name'] ."</td>
                <td>". $course['course_credit'] ."</td>
                
                <td>
                <a href='editing1.php?pp=$course[course_id] &kk=$course[course_name] &ll=$course[course_credit]'>";?>
                <img src="../images/editing.png" alt="" height="25px"></a>
                <?php
                echo "
                <td>
                    <a href='delete.php?rn=$course[course_id]'>";?>
                    <img src="../images/delete.png" alt="" height="25px"></a>
                    </td>
                </td>
                

 </tr>

<?php
}

?>
              
          </table>
        </div> 
        

 <!--  000000000000000000000000000000000000000000000000000     form        000000000000000000000000000000000000-->


      <div class="student-form">
        <div class="adress">
             <h2>Courses information</h2>
            <img src="../images/close.png" height="30px" class="exit" onclick="exit()">
        </div>

        <h3>Course Credit</h3>
        <input type="text" name ="cridet" placeholder="Course Credit" class="inputs">

         <input type="submit" name ="submit" value="Submit" class="submting"> 
      </form>
    </div>
    <div class="menu_list">
        <ul class="lists"> 
            <li class="list"> <a href="../student2/student2.php" class="icon">Student</a></li> 
            <li class="list"> <a href="courses.php" class="icon">Courses</a></li> 
            <li class="list"><a href="../department/department.php" class="icon">Department</a></li> 
            <li class="list"> <a href="../setting/setting.php" class="icon">Setting</a></li> 
      </ul>
    
    
       </div>


</body>
</html>






























