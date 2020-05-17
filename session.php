<form method="post">
Student ID <input type="text" name="txtId">
Password<input type="password" name="pwd">


<input type="submit" name="s" value="login">
</form>
<?php
session_start();

if (isset($_POST['s']))
{
 $_SESSION["username"]=$_POST['txtId'];
header("location:welcome.php");
}
?>
