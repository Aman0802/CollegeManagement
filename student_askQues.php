<html>
<head>
  <title>ask new question</title>
</head>
 <body>


    <link rel="stylesheet" type="text/css" href="css/asknewq.css">
    <div class="box">
<h1>Ask a Question</h1>
<form method="post" class="form">
<h3>Question:</h3>	
<input type="char" name="txtQues" class="inputre"><br>
<input type="submit" name="btnsubmit" class="btn">
<input type="submit" name="btnhomepage" value="Home Page" class="btn">
<?php
session_start();
	if(isset($_POST['btnsubmit']))
	{
		$ques=$_POST['txtQues'];
		$con=mysqli_connect('localhost','root','','php_project');
		$qry="insert into question(id,question) values(".$_SESSION['userid'].",'".$ques."')";
		if(mysqli_query($con,$qry))
		{
			header("location:student_welcome/student_welcome.php");
		}
	}
	if(isset($_POST['btnhomepage']))
	{
		header("location:student_welcome/student_welcome.php");
	}
?>
</form>
</div>

      </section>
      <!-- END CONTENT -->


  </div>
  <!-- END WRAPPER -->
    </div>
  <!-- END MAIN -->

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
  
    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
    $("#formValidate").validate({
        rules: {
      <?php
      $result = mysqli_query($con, "SELECT * FROM items where not deleted;");
      while($row = mysqli_fetch_array($result))
      {
        echo $row["id"].':{
        min: 0,
        max: 10
        },
        ';
      }
    echo '},';
    ?>
        messages: {
      <?php
      $result = mysqli_query($con, "SELECT * FROM items where not deleted;");
      while($row = mysqli_fetch_array($result))
      {  
        echo $row["id"].':{
        min: "Minimum 0",
        max: "Maximum 10"
        },
        ';
      }
    echo '},';
    ?>
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>
</body>
</html>