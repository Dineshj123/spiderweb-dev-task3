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
$score=$_POST['score'];
$count=$_POST['count'];
$usrname=$_SESSION['usrname'];
if($count!=5){
if($score==5)
echo "congrats!!You got 5 marks and top the leaderboard..";
else
echo "Congrats You got".$score."marks";
}
else{
	$sql="SELECT * FROM `answers` WHERE usersname='$usrname'";
	$res=mysqli_query($dbcon,$sql);
	while($user=mysqli_fetch_assoc($res)){
		$score=$user['score'];
	}
	if($score==5){
		echo "congrats!!You got 5 marks and top the leaderboard..";
	}
	else{echo "Congrats You got".$score."marks";}
}
session_destroy();
 ?>
<html>
<body>
Thank You.You Are Done.Your session has been destroyed.Inorder to view your unanswered questions You need to login again <a href="mylogin.php">here</a>.......
</body>
</html>
