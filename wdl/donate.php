<?php

    $con=mysqli_connect("localhost","root","","wdl");

    $sql="SELECT * FROM upload";
    $res=mysqli_query($con,$sql);

    
?>




<html>
<head>
<title>wdl website</title>
<link href="css/donate.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

</head>

<body>
	<header>

		<div class="menu">
				<img src="images/newlogo.png">
			<ul>
				<li><a href="index.php"> HOME </a></li>
				<li><a href=""> EXPLORE </a>
					
					<div class="sub-menu">
						<ul>
							<li><a href="">Computer</a></li>
							<li><a href="">IT</a></li>
							<li><a href="">Mechanical</a></li>
							<li><a href="">Civil</a></li>
							<li><a href="">EXTC</a></li>
		
						</ul>
						
					</div>
				
				</li>
				<!--<li><a href="LT.html"> LEARNING TREE </a></li>-->
				<li><a href="about.php"> ABOUT </a></li>
				<li><a href="contact.php"> CONTACT </a></li>
				<li class="active"><a href="donate.php">DONATE </a></li>
				<li><a href="login.php"> LOG IN </a></li>
				<li class="active1"><a href="register.php"> Register For Free </a></li>
			
			</ul>
			</div>
		



	</header>
	
	<div class="bgimg">

	<div class="info-head">
		<p class="p1">Give the gift of life-changing education!</p>
    </div>

    <div class="info">
		<p class="p3">Help Us to do More!</p>
	<p class="p4">Our mission is to provide a free, world-class education to anyone, anywhere.Learnersglobe is a nonprofit organization.<br><br>what we do for ourseleves dies with us. What we do for others remains & is immortal.<br><br>If you are instrested in helping us then share your notes with us and help millions of students to learn more. </p>
	</div>


	<div class="centerdiv">
    <img src="images/eduicon4.png" id="profilepic">
     
     
    <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
     <div>
      <input type="text" name="username" class="inputbox" placeholder="Your Name">
     </div>
     <br>
<!--
     <div>
      <input type="email" name="" class="inputbox" placeholder="email-id">
     </div>
     <br>

     <div>
      <input type="tel" name="" class="inputbox" placeholder="phone-number">
     </div>
     <br>-->

    <div>
    <select name="branch" class="select" required>
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
    <select name="semester"class="select" required>
    <option value="">Semster</option>
    <option value="sem1">Semster1</option>
    <option value="sem2">Semster2</option>
    <option value="sem3">Semster3</option>
    <option value="sem4">Semster4</option>
    <option value="sem5">Semster5</option>
    <option value="sem6">Semster6</option>
    <option value="sem7">Semster7</option>
    <option value="sem8">Semster8</option>

 	</select>
    </div>
    <br>

    <div>
     <input type="file" class="form" name="pdf" id="pdf">
     </div>
    <br>

    <div>
    <input type="submit" class="form" name="submit" value="submit" id="submit">
    </div>
    
    </form> <br>

   </div>  
</div>

</body>

</html>