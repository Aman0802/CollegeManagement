<html>
<head>
<title>Register</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="studentregist.css">
    <div class="box">
<center><h1>STUDENT REGISTRATION</h1></center>
<form action="" method="POST" class="form">
	<input type="text" name="txtSID" data-validate="enter id" placeholder="Enter Id" class="inputre"><br><br>
	<input type="text" name="txtSName" class="inputre" placeholder="Enter Name"><br><br>
	<input type="number" name="txtMobNo" class="inputre" placeholder="Enter Mobile No."><br><br>
	<lable>Date of Birth</lable><input type="date" name="txtDOB"  class="inputre" ><br><br>
	<input type="number" name="txtAge" class="inputre" placeholder="Enter Age"><br><br>
	<lable>Gender</lable>
	Male<input type="radio" name="rdbGen" value="Male" >
	Female<input type="radio" name="rdbGen" value="Female" ><br><br>
	<select name="cmbYear" data-validate="enter" class="inputre">
		<option value disabled selected>Please select a Year</option>
		<option>First</option>
		<option>Second</option>
		<option>Third</option>
 		<option>Fourth</option>
	</select><br><br>
	<select name="cmbSem" data-validate="enter" class="inputre">
		<option value disabled selected>Please select a Semester</option>
		<option>I</option>
		<option>II</option>
		<option>III</option>
		<option>IV</option>
		<option>V</option>
		<option>VI</option>
		<option>VII</option>
		<option>VIII</option>
	</select><br><br>
	<input type="email" name="txtEmail" class="inputre" placeholder="Enter E-mail"><br><br>
	<input type="password" name="pwd" class="inputre" placeholder="Enter Password"><br><br>
	<input type="password" name="conPwd" class="inputre" placeholder="Confirm password"><br><br>
	<input type="text" name="txtClass" class="inputre" placeholder="Enter Class"><br><br>
	<input type="submit" name="btnRegister" value="Register" class="btn">
	<input type="submit" name="btnClear" value="Clear" class="btn">
	<input type="submit" name="btnBack" value="Go Back" class="btn">
    
<?php
	if(isset($_POST['btnRegister']))
	{
		$id=$_POST['txtSID'];
		$name=$_POST['txtSName'];
		$mob=$_POST['txtMobNo'];
        $odob=$_POST['txtDOB'];
		$dob=date("Y-m-d",strtotime($odob));
		$age=$_POST['txtAge'];
		$gen=$_POST['rdbGen'];
		$year=$_POST['cmbYear'];
		$sem=$_POST['cmbSem'];
		$email=$_POST['txtEmail'];
		$pass=$_POST['pwd'];	
		$class_stud=$_POST['txtClass'];
		$con=mysqli_connect('localhost','root','','php_project');
		$qry="insert into student_detail values('".$id."','".$name."','".$year."','".$sem."',".$dob.",'".$mob."','".$gen."','".$pass."','".$age."','".$email."','".$class_stud."')";	
		if(mysqli_query($con,$qry))
		{
			//echo "Worked Successfully!";
			header("location:student_welcome.php");
		}			
		else
		{
			echo "Failed to Save! Please try  again!";        
		}
	}
	if(isset($_POST['btnBack']))
	{
		header("location:student_login/")	;	
	}
    if(isset($_POST['btnClear']))
	{
				
	}
?>
</form>	
</div>
</body>
</html>