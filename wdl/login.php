
<!DOCTYPE html>
<html>
 <head>
  <title>LoginForm</title>
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
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
    <!-- <h2>Login to your account</h2> -->
     <p class="heading1">Login to your Student Account</p><br>
    <p class="heading2">Build Skills for today, tomorrow and beyond.<br> Education to future-proof your career.</p><br>

    <form method="post" action="ser.php">
     <div>
      <input type="text" name="username" class="inputbox" placeholder="Username" required>
     </div>
     <br>
     <div>
      <input type="password" name="password" class="inputbox" placeholder="Password" required>
     </div>
     <br>
     <div class="login-section">
     <input type="submit" name="Login" class ="inputbox" value="Login"><br/>
     </div>
    </form> <br>
    <div class="REGISTER-SECTION">
     <a href="register.php">Not Yet Registered?</a>
    </div>
   </div>
  </div>
  
 </body>
</html