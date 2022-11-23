<?php
  $servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='project';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);

$s_n = $_GET['s_n'];
$s_e = $_GET['s_e'];
$s_g = $_GET['sg'];
$s_se= $_GET['sse'];
$s_d = $_GET['sd'];
$s_s = $_GET['ss'];
$idee = $_GET['q'];
$gpa = $_GET['gpa'];





?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Edit Student</title>
    <link rel="stylesheet" href="editing4.css">
    <script src="editing.js" defer></script>
</head>
<body>

    <!-- 00000000000000000000000000                     nav 0000000000000000000000000000000000000000000-->
  
        <div class="nav">
             
          <div class="admin">
            <a href="../direct1.php"><img src="../images/home-icon-silhouette (1).png" height="50px" class="home"></a>
         
            <a href = "./signout.php " > <button  class="logout">Logout</button> </a>

             
       </div>
           <ul class="links"> 
            <li class="lll"> <a href="student2.php" class="profile link1">Student</a></li> 
            <li class="lll"> <a href="../courses/courses.php" class="profile link2">Courses</a></li> 
            <li class="lll"><a href="../department/department.php" class="profile link3">Department</a></li> 
            <li class="lll"> <a href="../setting/setting.php" class="profile link4">Setting</a></li> 
      </ul>
      <img src="../images/list.png" height="40px" class="menu" onclick="menudrop()">
    </div>
    
  
    <!-- 000000000000000000000000000000000000                            editing 0000000000000000000000000000000000000000000000000-->
    
    <h2>Update Student Detailes</h2>
    <div class="student-form">
        
    <form class="form" action action = "student2.php" method="POST">
        <div class="form1" >
       
        <h3>Student Name</h3>
        <input type="text" name ="name" value=<?php echo $s_n ?>  class="inputs"required>

        <h3>Student E-Mail</h3>
        <input type="text" name ="email"value=<?php echo $s_e ?>  class="inputs" required>

        <h3>Student GPA</h3>
        <input type="number" name ="gpa" value=<?php echo $gpa ?> class="inputs" required step="any">


        <h3>Gender</h3>
        <select class="inputs" name ="gender" required>
            <option value=<?php echo $s_g ?> ><?php echo $s_g ?>  </option>  
          <option value="M">M</option>
          <option value="F">F</option>
        </select>
       </div>


       <div class="form2">
        <h3>Student Semester</h3>
        <select class="inputs"  name ="semester" name ="semester" required>
           <option value=<?php echo $s_se ?>><?php echo $s_se ?>  </option>
           <option value="First">First</option>
           <option value="Sconed">Scond</option>
        </select>
        
        <h3>Student Department</h3>
        <select class="inputs" name ="department" required>
            <option value=<?php echo $s_d ?>><?php echo $s_d ?> </option>
            <option value="CS">CS</option>
            <option value="IT">IT</option>
            <option value="IS">IS</option>
            <option value="MM">MM</option>
         </select>

         <h3>Student Adress</h3>
         <textarea name ="address" ><?php echo $s_s ?></textarea required>
         
        </div>

        <input type="submit" name ="submit" value="Update" class="submting">
      </form>
    
    </div>

    <div class="menu_list">
      <ul class="lists"> 
          <li class="list"> <a href="student2/student2.php" class="icon">Student</a></li> 
          <li class="list"> <a href="courses/courses.php" class="icon">Courses</a></li> 
          <li class="list"><a href="department/department.php" class="icon">Department</a></li> 
          <li class="list"> <a href="setting/setting.php" class="icon">Setting</a></li> 
    </ul>
  
  
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
          

             $username = $_POST['name'];
             $email    = $_POST['email'];
             $gender   = $_POST['gender'];
             $semes    = $_POST['semester'];
             $depart   = $_POST['department'];
             $address  = $_POST['address'];
             $gpa      = $_POST['gpa'];

       
          $sql =" UPDATE  stu  SET student_name='$username', student_email='$email' , student_gender='$gender',
          student_semester='$semes',student_department='$depart',student_address='$address',gpa='$gpa' WHERE id = $idee ";

            $result = mysqli_query($con,$sql);

             if (!$result)
              { 

             echo "there are probelm". mysqli_error($con);
                exit();
              }
             else
              {

                header('Location: student2.php');

             }

            }
         ?>
    
  
</body>
</html>