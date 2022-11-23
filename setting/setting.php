<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="setting.css">
    <script src="setting.js" defer></script>
    <title>setting</title>
</head>
<body>
    
        <!--   000000000000000000000000000000000000000000       nav    0000000000000000000000000000000000000000000000-->
        <div class="nav">
             
            <div class="admin">
                <a href="../direct1.php"><img src="../images/home-icon-silhouette (1).png"  ></a>
                
                <a href = "./signout.php " ><button  class="logout"> signout </button></a>
                 
           </div>
           <ul class="links"> 
            <li class="lll"> <a href="../student2/student2.php" class="profile link1">Student</a></li> 
            <li class="lll"> <a href="../courses/courses.php" class="profile link2">Courses</a></li> 
            <li class="lll"><a href="../department/department.php" class="profile link3">Department</a></li> 
            <li class="lll"> <a href="setting.php" class="profile link4">Setting</a></li> 
      </ul>
      <img src="../images/list.png" height="40px" class="menu" onclick="menu2()">
         
    
      </div>
      <!--   00000000000000000000000000000000000000000000000000000000000    setting form      00000000000000000000000000000000000000000000000000-->
          

  <h2 class="h2">Creat New Admin</h2>



    <div class="student-form">
    
  
    <a href="admin1.php" class="line"> <button class="button right"  onclick="header " >View admins</button> </a>

        <form action = "setting.php"  method="POSt">
          
       
        <h2 class="mac">Creat Admin</h2>
        
        <h3>Name</h3>
       <input type="text" name ='name' placeholder="User Name" class="inputs"required>
       <h3>Email</h3>
       <input type="text" name = 'email'placeholder="Email" class="inputs"required>
       <h3>Password</h3>
        <input  type='password'name="password" placeholder=" Enter Password" class="inputs"minlength="8" maxlength="15" required  title="Password length must be at least 8 characters and not exceed 15 characters" id="pass">

        <input type="submit" name='submit'value="Create" class="submting"> 
       </form>
     </div>
     <div class="menu_list">
        <ul class="lists"> 
            <li class="list"> <a href="../student2/student2.php" class="icon">Student</a></li> 
            <li class="list"> <a href="../courses/courses.php" class="icon">Courses</a></li> 
            <li class="list"><a href="../department/department.php" class="icon">Department</a></li> 
            <li class="list"> <a href="setting.php" class="icon">Setting</a></li> 
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
          
        mysqli_select_db($con,'project');

         if (isset($_POST['submit']))
          {
          

             $name1 = $_POST['name'];
             $email1    = $_POST['email'];
             $password   = $_POST['password'];
             $password1 = sha1($password);

            

       
          $sql =" INSERT into users (Username,Email,Passwords)
            VALUES ('$name1','$email1','$password1')";

            $result = mysqli_query($con,$sql);

             if (!$result)
              { 

             echo "there are probelm". mysqli_error($con);
                exit();
              }
             else
              {

                header('Location: setting.php');

             }

            }
         ?>

</body>
</html>