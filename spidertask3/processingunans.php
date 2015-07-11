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
$usname=$_SESSION["usrname"];
$sql="SELECT * FROM `answers` WHERE usersname='$usname'";
$query=mysqli_query($dbcon,$sql);
$i=0;$scr=0;
while($queryres=mysqli_fetch_array($query)){
	$scr=$queryres['score'];
}
$a=array(4);
static $score=0;
$json=json_decode(($_POST['data']),true);
foreach ($json as $key => $value)
 {
 if($i==0){$temp="$value";}
 else if($i==1){$temp1="$value";}
 else if($i==2) {$questid="$value";}
 $i++;
 } 
if($temp==$temp1){ $score++;$scr+=$score;echo $scr;}
else{$score--;$scr+=$score;echo $scr;}
$ins="INSERT INTO `answers` (`id`,`usersname`,`questid`,`answerstatus`,`answer`,`score`) VALUES ('NULL','$usname','$questid','1','$temp','$scr')";
$resins=mysqli_query($dbcon,$ins);
if(!$resins){die("ERROR");}
?>
<html>
</html>