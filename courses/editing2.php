
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="editing22.css">
     <script src="editing2.js" defer></script>
    <title>editing</title>
    </head>
<body>
    <!--   000000000000000000000000000000000000000000       nav    0000000000000000000000000000000000000000000000-->
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


  <!---       0000000000000000000000             editing form    00000000000000000000000000000000000000000000000000000000000000-->

  <h2>Courses information</h2>
  <div class="student-form">
   
  <form class="form" action = "editing2.php" method="POST">     
    <h3>Course Name</h3>
    <input type="text" name ="cn" placeholder="Course Name" class="inputs" required>

    <h3>Course Credit</h3>
    <input type="text" name = "cc" placeholder="Course Credit" class="inputs" required>

     <input type="submit" name ="submit" value="Add" class="submting"> 
  </form>
  </div>

  <?php
           $servername = 'localhost'; 
           $user = 'root';
           $pass= '';
           $con =mysqli_connect($servername , $user ,$pass );
           
           if (!$con)
           {
  
          die("there are problem to connect with database ...." . mysqli_connect_error());

           }
          
        mysqli_select_db($con,'sis_ci');

         if (isset($_POST['submit']))
          {
          
             $course_name = $_POST['cn'];
             $credit   = $_POST['cc'];
           

       
          $sql =" INSERT into course ( course_name , course_credit)
            VALUES ('$course_name','$credit')";

            $result = mysqli_query($con,$sql);

             if (!$result)
              { 

             echo "there are probelm". mysqli_error($con);
                exit();
              }
              else
              {
                header('Location: courses.php');
              }
            

            }
         ?>



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



