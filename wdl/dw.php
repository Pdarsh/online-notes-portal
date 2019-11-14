<?php
//echo"hello";



session_start();
$con=mysqli_connect("localhost","root","","wdl");

$sql="SELECT * FROM upload";
$res=mysqli_query($con,$sql);


//if(isset($_SESSION['username']))
//{


while($row = mysqli_fetch_array($res))
{
	$username=$row['username'];
	$pdf=$row['pdf'];
	$pdfname=$row['pdfname'];
	$path = "pdf/$pdf";

	echo  "uploaded by $username--" .$pdf."<br>"."<button><a href='download.php?dow=$path'>Download</a><br></button><br><hr>";
}
//}
//else
//{
	//header('location:login.php');
//}

	
?>


<html>

<body bgcolor="#caa0f2">



	<button class="w3-button w3-white w3-border"><a href="logout.php">Logout</a></button>
	</body>
	</html>
