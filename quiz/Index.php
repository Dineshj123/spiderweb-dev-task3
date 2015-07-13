<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydatabase";
$dbcon = @mysqli_connect($servername, $username, $password, $dbname);

if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
} 
if(isset($_POST['submitted'])){
$name= mysqli_real_escape_string($dbcon,@$_POST['name']);
$uname=mysqli_real_escape_string($dbcon,@$_POST['usersname']);
$pwd=mysqli_real_escape_string($dbcon,@$_POST['pwd']);
$pwds=md5($pwd);
$pwdse=sha1($pwds);
$sql="SELECT * FROM `users` WHERE usersname='$uname' ";
$res=mysqli_query($dbcon, $sql);
$user=mysqli_fetch_array($res);
if($user!=0){
	die ("Username already taken.");
}
else{
	$sqli="INSERT INTO `users`(`ID`,`usersname`,`password`) VALUES ('NULL','$uname','$pwdse') ";
		if(!mysqli_query($dbcon, $sqli)){
		die ("ERROR");
		}
		else{ 
		echo "You have been successfully registered!!!!";}
	}
}
?>
<html>
<head>
<style>
#heading{
margin:100 350px;
}
#box{
margin:101 350px;
width:500px;
height:800px;
border-style:solid;
}
#quiz{
padding:80 100px;
}
#quizbox{
width:200px;
height:80px;
cursor:pointer;
border-bottom-left-radius:0.9em;
border-bottom-right-radius:0.9em;
border-top-left-radius:0.9em;
border-top-right-radius:0.9em;
}
#signup{
width:250px;
height:80px;
cursor:pointer;
float:left;
border-style:hidden;
background-color:white;
}
#signin{
width:250px;
height:80px;
cursor:pointer;
}
#quiz{
background-color:gray;
}
a:link{text-decoration:none;}
</style>
<script>
var count;
function validateForm(){
count=0;
var x=document.forms["form"]["name"].value;
if(x==null||x==''){
		count++;
		alert('please provide your name!');
	}
var y=document.forms["form"]["usersname"].value;
	if(y==null||y==''){
		count++;
		alert('please provide your desired username!');
	}
var z=document.forms["form"]["pwd"].value;
	if(z==null||z==''){
		count++;
		alert('please provide password!');
	}	
	if(count>0){return false;}
}
</script>
</head>
<body>
<div id="heading"> <h1>WELCOME TO THE QUIZ COMPETITION</h1> </div>
<div id="box">
<input type="button" name="signup" id="signup" value="SIGN UP"   />
<a href="mylogin.php">
<input type="button" name="signin" id="signin" value="SIGN IN"  onclick="mylogin.php" /></a><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;PLEASE REGISTER YOURSELF TO TAKE PART IN THE QUIZ COMPETITION.IF YOU ARE 
A REGISTERED USER THEN PLEASE LOGIN TO CONTINUE.
<div id="quiz">

<form name="form" id="form" method="post" onsubmit="return validateForm()" >
Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="name" /><br><br>
Username:&nbsp;&nbsp;<input type="text" id="usersname" name="usersname" /><br><br>
Password:&nbsp;&nbsp;&nbsp;<input type="password" id="pwd" name="pwd" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submitted" id="submitted"  value="Submit" /><br><br>
<br><br>
</form>
<a href="mylogin.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" name="quizbox" id="quizbox" value="TAKE QUIZ NOW" /></a>
 </div>

</div>
</body>
</html>
