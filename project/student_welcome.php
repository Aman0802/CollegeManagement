<!DOCTYPE html>
<html>
    <head><title>student home</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="stude.css">
        <script type="text/javascript">
            function togglemenu(){
                document.getElementById('sidebar').classList.toggle('active');
            }
        </script>
        <div class="wrapper">
            <nav class="sidebar" id="sidebar" onclick="togglemenu() ">
                <div class="toggle-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <li><a href="student_login/">Log Out</a></li>
                    <li><a href="">Update Profile</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href="">6</a></li>
                </ul>
            </nav>
        </div>
        <div class="back">
            <div class="content">
                <h1 class="heading">Welcome</h1>
                <form action="" method="post" class="form">
                    <h3 class="heading">Recent Notices</h3>
                    <table class="table" border=1>
                            <tr>
                                <th>Date</th>
                                <th>Content Of Notice</th>
                            </tr>
                            <?php
                                $con=mysqli_connect('localhost','root','','php_project');
                                $qry="select * from notice_table order by date_of_notice desc";
                                $rs=mysqli_query($con,$qry);
                                while($row=mysqli_fetch_array($rs))
                                {
                                    echo "<tr>";
                                    echo "<td>".$row['date_of_notice']."</td>";
                                    echo "<td>".$row['content']."</td>";
                                    echo "</tr>";
                                }
                            ?>
                    </table>
                    <div class="links">
                        <a href="" class="btn">button link</a>
                        <a href="" class="btn">button link</a>
                        <a href="" class="btn">button link</a>
                        <a href="" class="btn">button link</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>