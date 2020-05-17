<?php
session_start();
if(isset($_SESSION['userid']))
{
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Upload Notices</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="css/materializ.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/stylesssss.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/customsssss.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  
   <style type="text/css">
  .input-field div.error{
    position: relative;
    top: -1rem;
    left: 0rem;
    font-size: 0.8rem;
    color:#FF4081;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .input-field label.active{
      width:100%;
  }
  .left-alert input[type=text] + label:after, 
  .left-alert input[type=password] + label:after, 
  .left-alert input[type=email] + label:after, 
  .left-alert input[type=url] + label:after, 
  .left-alert input[type=time] + label:after,
  .left-alert input[type=date] + label:after, 
  .left-alert input[type=datetime-local] + label:after, 
  .left-alert input[type=tel] + label:after, 
  .left-alert input[type=number] + label:after, 
  .left-alert input[type=search] + label:after, 
  .left-alert textarea.materialize-textarea + label:after{
      left:0px;
  }
  .right-alert input[type=text] + label:after, 
  .right-alert input[type=password] + label:after, 
  .right-alert input[type=email] + label:after, 
  .right-alert input[type=url] + label:after, 
  .right-alert input[type=time] + label:after,
  .right-alert input[type=date] + label:after, 
  .right-alert input[type=datetime-local] + label:after, 
  .right-alert input[type=tel] + label:after, 
  .right-alert input[type=number] + label:after, 
  .right-alert input[type=search] + label:after, 
  .right-alert textarea.materialize-textarea + label:after{
      right:70px;
  }
  </style> 
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!--End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="top-nav-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="logouniversity.png" alt="logo"></a> <span class="logo-text">Logo</span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="#" class="waves-effect waves-block waves-light"><i class="mdi-editor-attach-money">AI-IBM</i></a>
                        </li>
                    </ul>					
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/adminlogo.png" alt="" class="circle responsive-img valign profile-image">
                </div>
				 <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="admin_login/index.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><!---<?php echo $name;?> using session or normal?-->
                        <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"><!--<?php echo $role;?>  using session or normal--></p>
                </div>
            </div>
            </li>
            <li ><a href="admin_welcome.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i>HOME</a>
            </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold" class="bold active"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i>UPLOAD</a>
                            <div class="collapsible-body">
                                <ul>
								<li class="bold active"><a href="#">UPLOAD NOTICE</a></li>
								<li><a href="admin_uploadResult.php">UPLOAD RESULT</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-question-answer"></i>SEARCH</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="admin_searchnotice.php">SEARCH NOTICE</a></li>
								<li><a href="admin_searchResult.php">SEARCH RESULT</a></li>
								<li><a href="admin_searchStudents.php">SEARCH STUDENTS</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            <li><a href="admin_answer.php">ANSWER QUESTIONS</a></li>
            <li><a href="admin_showStudentPasswords.php">SHOW STUDENT PASSWORDS</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container-2">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">WELCOME</h5>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
<div >
  

	<h1>Upload Notice</h1>
	<form action="" method="post">
		Date of notice: <input type="text" name="txtDate"><br><br> 
		<big>Receiver:(please select one out of class semester or id)</big><br><br>
		<input type="radio" name="rdbCategory" value="Class">Send Class Wise
		<select name="cmbClass">
			<?php
				$con=mysqli_connect('localhost','root','','php_project');
				$qry="select distinct class from student_detail";
				$rs=mysqli_query($con,$qry);
				while($row=mysqli_fetch_array($rs))
				{					
					echo "<option value='".$row['class']."'>";
					echo $row['class'];
					echo "</option>";
				}
			?>
		</select><br><br>

		<input type="radio" name="rdbCategory" value="semester">Send Semester Wise
		<select name="cmbSem">
			<?php
				$con=mysqli_connect('localhost','root','','php_project');
				$qry="select distinct semester from student_detail";
				$rs=mysqli_query($con,$qry);
				while($row=mysqli_fetch_array($rs))
				{
					echo "<option value='".$row['semester']."'>";
					echo $row['semester'];
					echo "</option>";
				}
			?>
		</select><br><br>

		<input type="radio" name="rdbCategory" value="id">Send by StudentID
		<input type="text" name="txtStudID"><br><br>

		Content:
		<textarea name="txtAreaContent">	
		</textarea><br><br>

		<input type="submit" name="btnSend" value="Send">
		<?php
			if(isset($_POST['btnSend']))
			{
				if(isset($_POST['rdbCategory']))
				{
					$category=$_POST['rdbCategory'];
					if($category=="Class")
					{
            $con_issued=mysqli_connect('localhost','root','','php_project');
            $qry_issued="select name from admin_detail where id = ".$_SESSION['userid'];
            $rs_issued=mysqli_query($con_issued,$rs_issued);
            $row_issued=mysqli_fetch_array($rs_issued);
            $issued_by=$row_issued['name'];
						$date=$_POST['txtDate'];
						$content=$_POST['txtAreaContent'];
						$class_of_receiver=$_POST['cmbClass'];
            $con_issued=mysqli_connect('localhost','root','','php_project');
            $qry_issued="select name from admin_detail where id=".$_SESSION['userid'];
            $rs_issued=mysqli_query($con_issued,$qry_issued);
            $row_issued=mysqli_fetch_array($rs_issued);
						$con=mysqli_connect('localhost','root','','php_project');
						$qry="insert into notice_class values('".$date."','".$row_issued['name']."','".$content."','".$class_of_receiver."')";
						if($rs=mysqli_query($con,$qry))
						{
							echo "Successful";//proper message for success to be added
						}
						else
						{
							echo "Try Again";//proper message for failure to be added
						}
					}
					else if($category=="semester")
					{
						$date=$_POST['txtDate'];
						$content=$_POST['txtAreaContent'];
						$sem_of_receiver=$_POST['cmbSem'];
						$con=mysqli_connect('localhost','root','','php_project');
						$con_issued=mysqli_connect('localhost','root','','php_project');
            $qry_issued="select name from admin_detail where id=".$_SESSION['userid'];
            $rs_issued=mysqli_query($con_issued,$qry_issued);
            $row_issued=mysqli_fetch_array($rs_issued);
						$qry="insert into notice_semester values('".$date."','".$row_issued['name']."','".$content."','".$sem_of_receiver."')";
						if($rs=mysqli_query($con,$qry))
						{
							echo "Successful";//proper message for success to be added
						}
						else
						{
							echo "Try Again";//proper message for failure to be added
						}
					}
					else if($category=="id")
					{
						$date=$_POST['txtDate'];
						$issued_by=$_POST['txtIssued_by'];
						$content=$_POST['txtAreaContent'];
						$id_of_receiver=$_POST['txtStudID'];
						$con_issued=mysqli_connect('localhost','root','','php_project');
            $qry_issued="select name from admin_detail where id=".$_SESSION['userid'];
            $rs_issued=mysqli_query($con_issued,$qry_issued);
            $row_issued=mysqli_fetch_array($rs_issued);
						$con=mysqli_connect('localhost','root','','php_project');
						$qry="insert into notice_id values('".$date."','".$row_issued['name']."','".$content."','".$id_of_receiver."')";
						if($rs=mysqli_query($con,$qry))
						{
							echo "Successful";//proper message for success to be added
						}
						else
						{
							echo "Try Again";//proper message for failure to be added
						}
					}
				}
				else
				{
					echo "select a radio button first!";//error message to select a radio button!
				}

			}
		?>
	</form>


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
	
    <script type="text/javascript" src="../../js/plugins/jquery-validation/jquery.validate.min.js"></script>
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
<?php
}
else
{
  header("location:../../student_login/index.php");
}
?>