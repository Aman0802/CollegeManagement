<html>
<head>
	<title></title>
</head>
<body>
	<h1>Search Notices</h1>
	<form method="post">
	Enter criteria:
	<select name="cmbCriteria">
		<!--<option>Issued By</option>-->
		<option>Class</option>
		<option>Semester</option>
		<option>Student ID</option>
	</select><br><br>
	<input type="submit" name="btnSeeOptions" value="See options"><br><br>
	<select name="cmbOptions">
		<?php
			if(isset($_POST['btnSeeOptions']))
			{
				$criteria=$_POST['cmbCriteria'];
				/*if($criteria="Issued By")
				{
					$con=mysqli_connect('localhost','root','','php_project');
            		$qry1="select DISTINCT issued_by from notice_table";
            		$rs1=mysqli_query($con,$qry1);
					while($row1=mysqli_fetch_array($rs1))
					{
						echo "<option value= '".$row1['issued_by']."'>";
						echo $row1['issued_by'];
						echo "</option>";
					}
				}
				else*/ if($criteria="Class")
				{
					$con=mysqli_connect('localhost','root','','php_project');
            		$qry2="select DISTINCT class_of_receiver from notice_table";
            		$rs2=mysqli_query($con,$qry2);
					while($row2=mysqli_fetch_array($rs2))
					{
						echo "<option value= '".$row2['class_of_receiver']."'>";
						echo $row2['class_of_receiver'];
						echo "</option>";
					}
				}
				else if($criteria="Semester")
				{
					$con=mysqli_connect('localhost','root','','php_project');
            		$qry3="select DISTINCT semester_of_receiver from notice_table";
            		$rs3=mysqli_query($con,$qry3);
					while($row3=mysqli_fetch_array($rs3))
					{
						echo "<option value= '".$row3['semester_of_receiver']."'>";
						echo $row3['semester_of_receiver'];
						echo "</option>";
					}
				}
				else if($criteria="Student ID")
				{
					$con=mysqli_connect('localhost','root','','php_project');
            		$qry4="select DISTINCT id_of_receiver from notice_table";
            		$rs4=mysqli_query($con,$qry4);
					while($row4=mysqli_fetch_array($rs4))
					{
						echo "<option value= '".$row4['id_of_receiver']."'>";
						echo $row4['id_of_receiver'];
						echo "</option>";
					}
				}
			}
		?>
	</select>
	<input type="submit" value="Search" name="btnSearch">
	<?php
		if(isset($_POST['btnSearch']))
		{
			$option=$_POST['cmbOptions'];
			
				$con=mysqli_connect('localhost','root','','php_project');
            	$qry1="select * from notice_table where  issued_by= '".$option."'";
            	$rs1=mysqli_query($con,$qry1);
            	echo "<table  border='1' class='table'>";
            	echo "<tr>";
            	echo "<th>Issued By</th>";
            	echo "<th>id_of_receiver</th>";
            	echo "<th>Date Of Notice</th>";
            	echo "<th>Content</th>";
            	echo "</tr>";
           		while($row=mysqli_fetch_array($rs1))
            	{
            	    echo "<tr>";
            	    echo "<td><input type='text' name='txtIssuedby' value = '".$row['issued_by']."'></td>";
            	    echo "<td><input type='text' name='txtReceiver' value = '".$row['id_of_receiver']."'></td>";
            	    echo "<td><input type='text' name='txtReceiver' value = '".$row['date_of_notice']."'></td>";
            	    echo "<td><input type='text' name='txtContent' value = '".$row['content']."'></td>";
            	    echo "</tr>";
            	}
            	/*$con=mysqli_connect('localhost','root','','php_project');
            	$q2="select * from notice_table,student_detail where  issued_by= '".$_POST['cmbIssuedby']."' and student_detail.semester=notice_semester.semester";
            	$rs2=mysqli_query($con,$q2);
            	while($row=mysqli_fetch_array($rs2))
            	{
                	echo "<tr>";
                	echo "<td><input type='text' name='txtIssuedby' value = '".$row['issued_by']."'></td>";
                	echo "<td><input type='text' name='txtReceiver' value = '".$row['id']."'></td>";
                	echo "<td><input type='text' name='txtReceiver' value = '".$row['date_of_notice']."'></td>";
                	echo "<td><input type='text' name='txtContent' value = '".$row['content']."'></td>";
                	echo "</tr>";
            	}
            	$con=mysqli_connect('localhost','root','','php_project');
            	$q3="select * from notice_class,student_detail where  issued_by= '".$_POST['cmbIssuedby']."' and student_detail.class=notice_class.class";
            	$rs3=mysqli_query($con,$q1);
            	while($row=mysqli_fetch_array($rs3))
            	{
            	    echo "<tr>";
            	    echo "<td><input type='text' name='txtIssuedby' value = '".$row['issued_by']."'></td>";
            	    echo "<td><input type='text' name='txtReceiver' value = '".$row['id_of_receiver']."'></td>";
            	    echo "<td><input type='text' name='txtReceiver' value = '".$row['date_of_notice']."'></td>";
            	    echo "<td><input type='text' name='txtContent' value = '".$row['content']."'></td>";
            	    echo "</tr>";
            	}*/
            	echo "</table>";
		}

	?>
	</form>
</body>
</html>