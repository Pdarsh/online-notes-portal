<?php


session_start();
$con=mysqli_connect("localhost","root","","wdl");



//if(isset($_SESSION['username']))
//{


if(isset($_GET['dow']))
{
	$path=$_GET['dow'];
	$sql="SELECT * FROM upload";
	$res=mysqli_query($con,$sql);



	header('Content-Type: application/octat-stream');
	header('Content-Disposition: attachment; filename="'.basename($path).'"');
	header('Content-Length:'.filesize($path));
	readfile($path);


	
}
//}
//else
//{
	//header('location:login.php');
//}


	
?>
