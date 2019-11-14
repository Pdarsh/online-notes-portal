<?php
//session_start();
$con=mysqli_connect("localhost","root","","wdl");

if(isset($_POST['Login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  //session_start();
}

$password=md5($password);
$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
$res=mysqli_query($con,$query);


if(mysqli_num_rows($res) == 1)
{
  //echo("success");
  //$data=mysqli_fetch_assoc($res);
  //$usernameid=$data['username'];

  session_start();
  $_SESSION['username']=$username;
  header('location:ud.php');
}
else
{ 
?>  
  <script>
  alert("invalid login");
  window.open('login.php','_self');
    </script>
    <?php
}



?>