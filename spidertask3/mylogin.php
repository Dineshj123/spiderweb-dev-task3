<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="mydatabase";
$dbcon=@mysqli_connect($host,$user, $password, $db);
@mysqli_select_db($db);
if(isset($_POST['submitted'])){
$uname=mysqli_real_escape_string($dbcon,@$_POST['usersname']);
$_SESSION['usrname']=$uname;
$pwd=mysqli_real_escape_string($dbcon,@$_POST['pwd']);
$pwds=sha1(md5($pwd));
$unamecrt="SELECT * FROM `users` WHERE usersname='$uname'";
$usercrt=mysqli_fetch_array(mysqli_query($dbcon,$unamecrt));
$pwdscrt="SELECT * FROM `users` WHERE password='$pwds'";
$passcrt=mysqli_fetch_array(mysqli_query($dbcon,$pwdscrt));
$sqlid="SELECT ID FROM `users` WHERE usersname='$uname' && password='$pwds'  ";
$resid=mysqli_query($dbcon,$sqlid);
if(!$resid){$_SESSION["id"]=$resid;}
$sql=" SELECT * FROM `users` WHERE usersname='$uname' && password='$pwds'  ";
$res=mysqli_query($dbcon,$sql);
$user=mysqli_fetch_array($res);
if($user!=0){
	echo "You have been successfully logged in...";
	header('Location: quiz.php');
}
else{
	if($usercrt>0||$passcrt>0){ die("Invalid Credentials!");  }
	else{
	die("No such User exists..Please register yourself \"<a href='index.php'> here </a>\" ");
}
}
}
?>
<html>
<head>
<style>
#box{
margin:100 350px;	
width:350px;
height:200px;
background-color:gray;
}
a:link{text-decoration:none;}
</style>
<script>
</script>
</head>
<div id="box">LOG IN<br><br><br>
<form id="form" method="POST" action="" >
Username:&nbsp;&nbsp;<input type="text" id="usersname" name="usersname" /><br><br>
Password:&nbsp;&nbsp;&nbsp;<input type="password" id="pwd" name="pwd" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="quiz.php">
<input type="submit" id="submitted" name="submitted" value="submit" />
</a>
</form>
</div>
</html>