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
$a=array(4);
$i=0;
static $score=0;
$json=json_decode(($_POST['data']),true);
foreach ($json as $key => $value)
 {
 if($i==0){$temp="$value";}
 else if($i==1){$temp1="$value";}
 else if($i==2) {$questid="$value";}
 else{$scr="$value";} 
 $i++;
 } 
if($temp==$temp1&&$temp!=""){ $score++;$scr+=$score;echo $scr;}
else if($temp==""){}
else{$score--;$scr+=$score;echo $scr;}
$ins="INSERT INTO `answers` (`id`,`usersname`,`questid`,`answerstatus`,`answer`,`score`) VALUES ('NULL','$usname','$questid','1','$temp','$scr')";
$resins=mysqli_query($dbcon,$ins);
if(!$resins){die("ERROR");}
?>
