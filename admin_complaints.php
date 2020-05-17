<html>
    <title>
        Complaint
    </title>
    <head><center><h1>Complaints</h1></center>
        </head>
<body>
    <link rel="stylesheet" type="text/css" href="div.css">
    <div class="Comp">
    <form method="post" action="#">
        <b>Teacher's ID</b><input type="text" name="txtId"><br>
        <b>Date</b><input type="date" name="txtDate"><br>
        <b>Complaint</b><textarea name="txtAreaComplaint"></textarea><br>
        <input type = "submit" value = "Back" name="btnBack">
        <input type="submit" value="Submit" name="btnSubmit">
        <input type="submit" value="Clear" name="btnClear">
        <?php
            if(isset($_POST['btnSubmit']))
            {
                $id=$_POST['txtId'];
                $date=$_POST['txtDate'];
                $comp=$_POST['txtAreaComplaint'];
                $con=mysqli_connect('localhost','root','','php_project');
                $qry="insert into complaint_table values(".$id.",'".$date."','".$comp."')";
                if(mysqli_query($con,$qry))
                {
                    echo "fksdnfgk";
                }
            }
            if(isset($_POST['btnBack']))
            {
                header("location:admin_welcome.php");
            }
        ?>
    </form>
    </div>
              
</body>
</html>