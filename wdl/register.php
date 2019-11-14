<?php
session_start();
$con=mysqli_connect("localhost","root","","wdl");


if(isset($_POST['submit']))
{ 
  $Fname=$_POST['Fname'];
  $Lname=$_POST['Lname'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password2=$_POST['password2'];
  $branch=$_POST['branch'];

  if($password==$password2)
  {
    $password=md5($password);//hash password before storing
    $sql="INSERT INTO users(Fname,Lname,username,password,branch) VALUES('$Fname','$Lname','$username','$password','$branch')";
    mysqli_query($con,$sql);
    //$_SESSION['message']="logged in";
    //$_SESSION['message']=$username;
    header("location:login.php");//redirect to home page
  }
  else
  {
    $_SESSION['message']="Password does not match";
    header("error");
  }
}

?>



<!DOCTYPE html>
<html>
 <head>
  <title>LoginForm</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
 </head>

 <body>

<header>
  <div class="menu">
        <img src="images/newlogo.png">
      </div>
</header>

  <div class="bgimg">
   <div class="centerdiv">
    <img src="images/login-img2.png" id="profilepic">
    <!-- <h2>Register</h2> -->
    <p class="heading1">Create your Student Account</p><br>
    <p class="heading2">Build Skills for today, tomorrow and beyond.<br> Education to future-proof your career.</p>
    <form method="post" action="register.php">
      <div>
      <input type="text" name="Fname" class="inputbox" placeholder="First Name" required>
     </div>
     <br>
     <div>
      <input type="text" name="Lname" class="inputbox" placeholder="Last Name" required>
     </div>
     <br>
     <div>
      <input type="text" name="username" class="inputbox" placeholder="Username" required>
     </div>
     <br>
     <div>
      <input type="Password" name="password" class="inputbox" placeholder="Password" required>
     </div>
     <br>
     <div>
      <input type="Password" name="password2" class="inputbox" placeholder="Confirm Password" required>
     </div>
     <br>

     <div>
    <select class="select" name="branch" class="inputbox" required>
    <option value="">Branch </option>
    <option value="Computer">Computer</option>
    <option value="IT">IT</option>
    <option value="EXTC">EXTC</option>
    <option value="Mechanical">Mechanical</option>
    <option value="Civil">Civil</option>
  </select>

    </div>
     <br>

     <div>
     
    <input type="submit" class ="inputbox" name="submit" value="register">
     </div>
    </form> <br>
    <div class="REGISTER-SECTION">
     <a href="login.php">Already Have An Account?</a>
    </div>
    <br/>
   </div>
  </div>
  
 </body>
</html