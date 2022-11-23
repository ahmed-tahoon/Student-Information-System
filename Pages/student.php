<?php
  $servername = 'localhost'; 
  $user = 'root';
  $pass= '';
  $dbname='project';
  $con =mysqli_connect($servername , $user ,$pass , $dbname);

  $name1= $_SESSION['username'] ;


$sql = ("SELECT Username FROM users where Email = '$name1' ");

$result = mysqli_query($con,$sql);

if (!$result)
{

echo "there are probelm". mysqli_error($con);

}

$ans=mysqli_fetch_array($result);



?>

<html lang="en">
<head>
   
    <title>Home Page</title>
    <link rel="stylesheet" href="student11.css">
    <script src="student.js" defer></script>
</head>
<body>
    <!--00000000000000000000000000000     this is a div contain all body with nav and cards etc      000000000000000000000000000000000000000000000000000000000000-->
    
           
        <!-- 000000000000000000000000000             this is nav bar      000000000000000000000000000000000000000000000000-->
          <div class="nav">
             
            <div class="admin">
                <img src="images/user (1).png" >
                <p><?php echo $ans['Username'];?></p>
                 
           </div>
           <ul class="links"> 
            <li class="lll"> <a href="student2/student2.php" class="profile link1">Student</a></li> 
            <li class="lll"> <a href="courses/courses.php" class="profile link2">Courses</a></li> 
            <li class="lll"><a href="department/department.php" class="profile link3">Department</a></li> 
            <li class="lll"> <a href="setting/setting.php" class="profile link4">Setting</a></li> 
      </ul>
      <img src="images/list.png" height="40px" class="menu" onclick="menu()">
             
           
             


          </div>

          <!-- <div class="respon">  </div> -->
<!-- 0000000000000000000000000000000000           header           000000000000000000000000000000000000000000000000000000000000-->
<div class="all-page">
  <div class="head">
  <h1>Welcome <?php echo $ans['Username']; ?> to</h1>
    <h1 class="head2">our college system.</h1>
    <p>This website enables admins to control all student information , courses and departments.</p>
</div>


  <!--00000000000000000000000000000000000000           cards     000000000000000000000000000000000000000000000000000000000000000000-->

       <div class="container">
            <div class="card card_one">
                 <div class="card1 together">
                    <img src="images/student-with-graduation-cap.png" class="circle">
                    <h2>Student</h2>
                    <p class="para">manage student</p>
                    <a href="student2/student2.php" class="info">student info</a>
                 </div>

            </div>




            <div class="card card_two">
                <div class="card2 together">
                    <img src="images/online-course.png" class="circle">
                    <h2>Course</h2>
                    <p class="para">manage courses</p>
                   <a href="courses/courses.php" class="info">courses info</a>
                </div>

           </div>


           <div class="card card_three">
            <div class="card3 together">
                <img src="images/department (1).png" class="circle">
            <h2>Department</h2>
            <p class="para">manage Department</p>
               <a href="department/department.php" class="info">faculty info</a>
            </div>
           </div>


           <div class="card card_four">
            <div class="card4 together">
                <img src="images/settings.png" class="circle">
                <h2>Setting</h2>
                <p class="para">manage Setting</p>
               <a href="" class="info">create admin</a>
            </div>


       </div>


     
    </div>
   </div>
   <div class="menu_list">
    <ul class="lists"> 
        <li class="list"> <a href="student2/student2.php" class="icon">Student</a></li> 
        <li class="list"> <a href="courses/courses.php" class="icon">Courses</a></li> 
        <li class="list"><a href="department/department.php" class="icon">Department</a></li> 
        <li class="list"> <a href="setting/setting.php" class="icon">Setting</a></li> 
  </ul>


   </div>
   



</body>
</html>
