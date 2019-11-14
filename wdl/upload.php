<?php

	session_start();
	$con=mysqli_connect("localhost","root","","wdl");

	if(isset($_POST['submit']))
	{


			$uname=$_POST['username'];
			$branch=$_POST['branch'];
			$semester=$_POST['semester'];
			$pdf=$_FILES['pdf']['name'];
			$pdfname=$_FILES['pdf']['tmp_name'];

			if($pdf)
			{
				$location = "pdf/$pdf";
				move_uploaded_file($pdfname,$location);
				$qu="INSERT INTO  upload(username,branch,semester,pdf,pdfname) VALUES('$uname','$branch','$semester','$pdf','$pdfname')";
				mysqli_query($con,$qu);
				header('location:ud.php');
			}
		}
	

/*


?>