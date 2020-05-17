<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Search  Result</title>

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
                                <li ><a href="admin_searchnotice.php">SEARCH NOTICE</a></li>
                                <li class="bold active"><a href="#">SEARCH RESULT</a></li>
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
        <link rel="stylesheet" type="text/css" href="search.css">
       <div class="search">
        <h2>Search on the basis of: </h2>
        <form method="Post" action="#">
        <input type="checkbox" >
        Student ID 
        <input type="text" name="txtStudID">
        <input type="submit" value="Search" name="btnStudID"><br>
        <input type="checkbox">
        Exam Name 
        <select name="cmbExamName">
        <?php
          $con=mysqli_connect('localhost','root','','php_project');
          $qry="select distinct exam_name from result_table";
          $rs=mysqli_query($con,$qry);
          while($row=mysqli_fetch_array($rs))
          {
            echo "<option value='".$row['exam_name']."'>";
            echo $row['exam_name'];
            echo "</option>";
          }        
        ?>
        </select>
        <input type="submit" value="Search" name="btnExamName"><br>
        <input type="checkbox">
        Date
        <input type="date" name="txtDate">
        <input type="submit" value="Search" name="btnDate"><br><br>
        <table border="5" class="search">
            <tr>
                <th>Student ID
                <th>Student Name
                <th>Exam Name
                <th>Exam Date
                <th>Cpi
                <th>Icse
                <th>Maths
                <th>Physics
                <th>C
                <th>Web Devlopment                         
            </tr>
            <?php
                if(isset($_POST['btnStudID']))
                {
                    echo "successfull";
                    $id=$_POST['txtStudID'];
                    $con=mysqli_connect('localhost','root','','php_project');
                    $qry="select * from result_table,student_detail where student_detail.id=result_table.id and result_table.id =".$id;
                    $rs=mysqli_query($con,$qry);
                    while($row = mysqli_fetch_array($rs))
                    {
                        echo "<tr>";
                            echo "<form action='' method='post'>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['exam_name']."</td>";
                            echo "<td>".$row['exam_date']."</td>";
                            echo "<td>".$row['cpi']."</td>";
                            echo "<td>".$row['icse']."</td>";
                            echo "<td>".$row['maths']."</td>";
                            echo "<td>".$row['physics']."</td>";
                            echo "<td>".$row['c']."</td>";
                            echo "<td>".$row['html']."</td>";
                            echo "<td><input type='submit' name='btnUpdate' value='Update'></td>";
                            echo "</form>";
                        echo "</tr>";
                    }
                }
                if(isset($_POST['btnExamName']))
                {
                    $exam_name=$_POST['cmbExamName'];
                    $con=mysqli_connect('localhost','root','','php_project');
                    $qry="select * from result_table,student_detail where student_detail.id=result_table.id and exam_name='".$exam_name."'";
                    $rs=mysqli_query($con,$qry);
                    while($row=mysqli_fetch_array($rs))
                    {
                        echo "<tr>";
                            echo "<td>".$row['student_detail.id']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['exam_name']."</td>";
                            echo "<td>".$row['exam_date']."</td>";
                            echo "<td>".$row['cpi']."</td>";
                            echo "<td>".$row['icse']."</td>";
                            echo "<td>".$row['maths']."</td>";
                            echo "<td>".$row['physics']."</td>";
                            echo "<td>".$row['c']."</td>";
                            echo "<td>".$row['html']."</td>";
                        echo "</tr>";
                    }
                }
                if(isset($_POST['btnDate']))
                {
                    $date=$_POST['txtDate'];
                    $con=mysqli_connect('localhost','root','','php_project');
                    $qry="select * from result_table,student_detail where student_detail.id=result_table.id and date=".$date;
                    $rs=mysqli_query($con,$qry);
                    while($row=mysqli_fetch_array($rs))
                    {
                        echo "<tr>";
                            echo "<td>".$row['student_detail.id']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['exam_name']."</td>";
                            echo "<td>".$row['exam_date']."</td>";
                            echo "<td>".$row['cpi']."</td>";
                            echo "<td>".$row['icse']."</td>";
                            echo "<td>".$row['maths']."</td>";
                            echo "<td>".$row['physics']."</td>";
                            echo "<td>".$row['c']."</td>";
                            echo "<td>".$row['html']."</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table><p>
        <input type="submit" name="btnhome" value="HOME" class="btn">

    </form>
        </div>
           </section>
      <!-- END CONTENT -->


  </div>
  <!-- END WRAPPER -->
    </div>
  <!-- END MAIN -->
  <?php
  if(isset($_POST['btnback']))
    header("location:admin_welcome.php")
    ?>
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