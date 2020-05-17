<html>
    <head>
        <title></title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="css/asknewq.css">
        <!--<script>
            function error_message()
            {
                alert("Could not update!");
            }
        </script>-->
        <div class="title">
        <center><h1>Answer</h1></center>
        </div>
        <div class="box">
        <form action="" method="post" class="form">
        <?php
            $sno=$_GET['sno'];
            //echo $sno;
            $con=mysqli_connect('localhost','root','','php_project');
            $q1="select * from question where sno='$sno'";
            $rs=mysqli_query($con,$q1);
            echo "<table  border='1' class='table'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>QUESTION</th>";
            echo "<th>ANSWER</th>";
            echo "</tr>";
            if($row=mysqli_fetch_array($rs))
            {
                echo "<tr>";
                echo "<td><input type='text' name='txtid' value = '".$row['id']."'></td>";
                echo "<td><input type='text' name='txtques' value = '".$row['question']."'></td>";
                echo "<td>";
                echo "<textarea name='txtAreaAns' placeholder='Enter your answer'></textarea><br>";
                echo "</td>";
                echo "</table>";
            }
        ?>
        <input type="submit" name="btnSubmit" value="SUBMIT" class="btn">
        <?php
            if(isset($_POST['btnSubmit']))
            {
                $con=mysqli_connect('localhost','root','','php_project');
                $qry="update question set answer = '".$_POST['txtAreaAns']."' where sno=".$sno;
                mysqli_query($con,$qry);
                header("location:admin_welcome.php");
            }
        ?>
        </form>
    </div>
    </body>
</html>