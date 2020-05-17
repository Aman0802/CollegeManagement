<html>
    <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Search  Notice</title>

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
                      <li><h1 class="logo-wrapper"><a href="admin_welcome.php" class="brand-logo darken-1"><img src="logouniversity.png" alt="logo"></a> <span class="logo-text">Logo</span></h1></li>
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
                        <li class="bold" ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i>UPLOAD</a>
                            <div class="collapsible-body">
                                <ul>
                                <li ><a href="admin_uploadNotice.php">UPLOAD NOTICE</a></li>
                                <li ><a href="admin_uploadResult.php">UPLOAD RESULT</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold" class="bold active"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-question-answer"></i>SEARCH</a>
                            <div class="collapsible-body">
                                <ul>
                                <li class="bold active"><a href="#">SEARCH NOTICE</a></li>
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
                <h5 class="breadcrumbs-title">SEARCH</h5>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
       <!--<link rel="stylesheet" type="text/css" href="searchn.css">-->
        <div class="heading">
        <h1 align="center">SEARCH NOTICE FORM</h1>
        <marquee><h4>Select the radio button as per your requirement and fill the entry and click on the search button to get the output in the TABLE BELOW!!</h4></marquee><br>
        <h2>Search on the basis of:</h2><br>
        </div>
        <form action="#" method="post" class="form">
            <big><input type= "radio" name="rdb" value="Issuedby"><lable>Issued_by</big></lable>
            <select name="cmbIssuedby">
                <?php
                    $con=mysqli_connect('localhost','root','','php_project');
                    $qry="select DISTINCT notice_id.issued_by from notice_id,notice_class,notice_semester where notice_id.issued_by=notice_class.issued_by=notice_semester.issued_by";
                    $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            $Issued=$row['issued_by'];
                            echo "<option value = '".$Issued."'>";
                            echo $Issued;
                            echo "</option>";
                        }
                ?>
            </select>
            <input type="submit" value="Search" name="btnSearchIssuedby" class="srch"><br><br><br>

            <big><input type= "radio" name="rdb" value=""><lable>Receiver</big></lable>
            <select name="cmbReceiver">
                <?php
                    $con1=mysqli_connect('localhost','root','','php_project');
                    $qry1="select DISTINCT id_of_receiver from notice_id";
                    $qry1_insert="insert into temp_id ".$qry1;
                    $rs1_insert=mysqli_query($con1,$qry1_insert);
                    $con2=mysqli_connect('localhost','root','','php_project');
                    $qry2="select DISTINCT id from notice_class,student_detail where class_of_receiver = class";
                    $qry2_insert="insert into temp_id ".$qry2;
                    $rs2_insert=mysqli_query($con2,$qry2_insert);
                    $con3=mysqli_connect('localhost','root','','php_project');
                    $qry3="select DISTINCT id from notice_semester,student_detail where student_detail.semester = notice_semester.semester";
                    $qry3_insert="insert into temp_id ".$qry3;
                    $rs3_insert=mysqli_query($con1,$qry3_insert);

                    $con_final=mysqli_connect('localhost','root','','php_project');
                    $qry_final="select DISTINCT id from temp_id";
                    $rs_final=mysqli_query($con_final,$qry_final);
                    while($row_final=mysqli_fetch_array($rs_final))
                    {
                        echo "<option value='".$row_final['id']."'>";
                        echo $row_final['id'];
                        echo "</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Search" name="btnSearchReceiver" class="srch"><br><br><br>
            
            <big><input type= "radio" name="rdb" value="Class"><lable>Class</big></lable>
            <select name="cmbClass">
                <?php
                    $con=mysqli_connect('localhost','root','','php_project');
                    $qry="select DISTINCT class_of_receiver from notice_class";
                    $rs=mysqli_query($con,$qry);
                    while($row=mysqli_fetch_array($rs))
                    {
                        echo "<option value='".$row['class_of_receiver']."'>";
                        echo $row['class_of_receiver'];
                        echo "</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Search" name="btnSearchClass" class="srch"><br><br><br>

            <big><input type= "radio" name="rdb" value="Semester"><lable>Semester</big></lable>
            <select name="cmbSemester">
                <?php
                    $con=mysqli_connect('localhost','root','','php_project');
                    $qry="select DISTINCT semester from notice_semester";
                    $rs=mysqli_query($con,$qry);
                    while($row=mysqli_fetch_array($rs))
                    {
                        echo "<option value='".$row['semester']."'>";
                        echo $row['semester'];
                        echo "</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Search" name="btnSearchSem" class="srch"><br><br><br><br>


            <div class="table">
                <?php
                    if(isset($_POST['btnSearchIssuedby']))
                    {
                        $con1=mysqli_connect('localhost','root','','php_project');
                        $q1="select * from notice_id where  issued_by= '".$_POST['cmbIssuedby']."'";
                        $rs1=mysqli_query($con1,$q1);
                        echo "<table  border='1' class='table'>";
                        echo "<tr>";
                        echo "<th>Issued By</th>";
                        echo "<th>Receiver</th>";
                        echo "<th>Date Of Notice</th>";
                        echo "</tr>";
                        while($row1=mysqli_fetch_array($rs1))
                        {
                            echo "<tr>";
                            echo "<td><input type='text' name='txtIssuedby' value = '".$row1['issued_by']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row1['id_of_receiver']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row1['date_of_notice']."'></td>";
                            echo "<td><input type='text' name='txtContent' value = '".$row1['content']."'></td>";
                            echo "</tr>";
                        }
                        $con2=mysqli_connect('localhost','root','','php_project');
                        $q2="select * from notice_semester,student_detail where  issued_by= '".$_POST['cmbIssuedby']."' and student_detail.semester=notice_semester.semester";
                        $rs2=mysqli_query($con2,$q2);
                        while($row2=mysqli_fetch_array($rs2))
                        {
                            echo "<tr>";
                            echo "<td><input type='text' name='txtIssuedby' value = '".$row2['issued_by']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row2['id']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row2['date_of_notice']."'></td>";
                            echo "<td><input type='text' name='txtContent' value = '".$row2['content']."'></td>";
                            echo "</tr>";
                        }
                        $con3=mysqli_connect('localhost','root','','php_project');
                        $q3="select * from notice_class,student_detail where  issued_by= '".$_POST['cmbIssuedby']."' and student_detail.class=notice_class.class";
                        $rs3=mysqli_query($con3,$q1);
                        while($row3=mysqli_fetch_array($rs3))
                        {
                            echo "<tr>";
                            echo "<td><input type='text' name='txtIssuedby' value = '".$row3['issued_by']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row3['id_of_receiver']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row3['date_of_notice']."'></td>";
                            echo "<td><input type='text' name='txtContent' value = '".$row3['content']."'></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    if(isset($_POST['btnSearchReceiver']))
                    {
                        $con=mysqli_connect('localhost','root','','php_project');
                        $q1="select * from notice_id where  id_of_receiver= '".$_POST['cmbReceiver']."'";
                        $rs1=mysqli_query($con,$q1);
                        echo "<table  border='1' class='table'>";
                        echo "<tr>";
                        echo "<th>Issued By</th>";
                        echo "<th>Receiver</th>";
                        echo "<th>Date Of Notice</th>";
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
                        $con=mysqli_connect('localhost','root','','php_project');
                        $q2="select * from notice_semester,student_detail where  id = '".$_POST['cmbReceiver']."' and student_detail.semester=notice_semester.semester";
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
                        $q3="select * from notice_class,student_detail where  id = '".$_POST['cmbReceiver']."' and class = class_of_receiver";
                        $rs3=mysqli_query($con,$q3);
                        while($row=mysqli_fetch_array($rs3))
                        {
                            echo "<tr>";
                            echo "<td><input type='text' name='txtIssuedby' value = '".$row['issued_by']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row['id']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row['date_of_notice']."'></td>";
                            echo "<td><input type='text' name='txtContent' value = '".$row['content']."'></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        $con=mysqli_connect('localhost','root','','php_project');
                        $qry_delete="delete from temp_id";
                        mysqli_query($con,$qry_delete);
                    }   
                    if(isset($_POST['btnSearchClass']))
                    {
                        $con=mysqli_connect('localhost','root','','php_project');
                        $qry="select * from notice_class,student_detail where class_of_receiver=class and class_of_receiver='".$_POST['cmbClass']."'";
                        $rs=mysqli_query($con,$qry);
                        echo "<table  border='1' class='table-w'>";
                        echo "<tr>";
                        echo "<th>Issued By</th>";
                        echo "<th>Class</th>";
                        echo "<th>Date Of Notice</th>";
                        echo "<th>Content</th>";
                        echo "</tr>";
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td><input type='text' name='txtIssuedby' value = '".$row['issued_by']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row['class_of_receiver']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row['date_of_notice']."'></td>";
                            echo "<td><input type='text' name='txtContent' value = '".$row['content']."'></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    if(isset($_POST['btnSearchSem']))
                    {
                        $con=mysqli_connect('localhost','root','','php_project');
                        $qry="select * from notice_semester,student_detail where notice_semester.semester=student_detail.semester and notice_semester.semester='".$_POST['cmbSemester']."'";
                        $rs=mysqli_query($con,$qry);
                        echo "<table  border='1' class='table-w'>";
                        echo "<tr>";
                        echo "<th>Issued By</th>";
                        echo "<th>Semester</th>";
                        echo "<th>Date Of Notice</th>";
                        echo "<th>Content</th>";
                        echo "</tr>";
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td><input type='text' name='txtIssuedby' value = '".$row['issued_by']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row['semester']."'></td>";
                            echo "<td><input type='text' name='txtReceiver' value = '".$row['date_of_notice']."'></td>";
                            echo "<td><input type='text' name='txtContent' value = '".$row['content']."'></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    
                ?>

         </div>
                <a href="admin_welcome.php" class="btn">GO BACK</a>
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