<?php
	session_start();
	$con=mysqli_connect('localhost','root','','php_project');
    $qry="update student_detail set mobile_no = '".$_POST['txtNewMobile']."' where id =".$_SESSION['userid']; 
    mysqli_query($con,$qry);
    header("location:../student_welcome.php");
?>