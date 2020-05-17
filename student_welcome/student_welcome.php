<?php
session_start();
if(isset($_SESSION['userid']))
{

?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Student Welcome</title>

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
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="top-nav-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1"><img src="../logouniversity.png" alt="logo"></a> <span class="logo-text">Logo</span></h1></li>
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
                        <li><a href="../student_logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
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
            <li class="bold active"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i>HOME</a></li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> UPDATE PROFILE</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="update/update_password.php">UPDATE PASSWORD</a></li>
								<li><a href="update/update_email.php"> E-MAIL</a></li>
								<li><a href="update/update_Mobile.php"> MOBILE NUMBER</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-question-answer"></i> SEE NEW </a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="../student_seeNewNotices.php">NOTICES</a> </li>
                                    <li><a href="../student_seeResult.php">RESULT</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>		
                <li ><a href="../student_FAQs.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i>FAQS</a></li>							
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
                <h5 class="breadcrumbs-title">WELCOME   
                  <?php
                    $con=mysqli_connect('localhost','root','','php_project');
                    $qry="select name from student_detail where id = ".$_SESSION['userid']."";
                    $rs=mysqli_query($con,$qry);
                    $row=mysqli_fetch_array($rs);
                    echo $row['name'];
                  ?></h5>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="about">
            <h3 align="center" id="about">ABOUT US</h3>
            <h5 align="center">...You Dream We Create...</h5>
               <div class="text">
                <h4 class="mb-4">OUR TEAM</h4>
                <p>Teamwork and Hardwork are the key to success...</p>
               </div>
                <div class="leader">
                    <img src="images/aman.jpg" class="profile">
                    <h4>Aman Khubani</h4>
                </div>
                <div class="row">
                    <div class="staff">
      				<div class="info ">
                        <img src="../images/.jpg" class="profile">
      					<h5>Abhay Biwal</h5>
                        </div>   
                    </div> 
                    <div class="staff">
      				<div class="info ">
                        <img src="../images/.jpg" class="profile">
      					<h5>Aparna Dubey</h5>
                        </div>   
                    </div>
                    <div class="staff">
      				<div class="info ">
                        <img src="../images/.jpg" class="profile">
      					<h5>Ankit Punjabi</h5>
                        </div>   
                    </div>
                    <div class="staff">
      				<div class="info ">
                        <img src="../images/.jpg" class="profile">
      					<h5>Akshat Maheshwari</h5>
                        </div>   
                    </div> 
                    <div class="staff">
      				<div class="info ">
                        <img src="../images/anvi.png" class="profile">
      					<h5>Anvi Jain</h5>
                        </div>   
                    </div>
                    <div class="staff">
      				<div class="info ">
                        <img src="../images/.jpg" class="profile">
      					<h5>Gauri Sharma</h5>
                        </div>   
                    </div>
                </div>
                </div>
	    		<div class="contact container-wrap" id="contact">
	    			<h3 class="mb-3">Contact Us</h3>
	    			<form action="#home" method="post"  >
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
	    				</div>
	    				
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Opinion"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send" class="btns btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>     
        <!--end container-->

      </section>
      <!-- END CONTENT -->


  </div>
  <!-- END WRAPPER -->
    </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  
        <div class="declare-me">
           <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by AMAN and Group</p>
            </div>
      <!--<div class="container">
<footer class="page-footer">
    <div class="footer-copyright">
        <span>Copyright © 2017 <a class="grey-text text-lighten-4" href="#" target="_blank">Students</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">AMAN KHUBANI AND GROUP</a></span>
</div>
  </footer>
        </div>-->
    
    <!-- END FOOTER -->



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
<?php

}
else
{


header("location:http://localhost/php_project_ai/student_login/index.php");

}


?>