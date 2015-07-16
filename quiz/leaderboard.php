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
$del="DELETE FROM `leaderboard`";
$resdel=mysqli_query($dbcon,$del);
$sqli="SELECT * FROM `users`";
$resi=mysqli_query($dbcon,$sqli);
while($rows=mysqli_fetch_array($resi)){
	$name=$rows['usersname'];
$sql="SELECT * FROM `answers` ORDER BY `id` DESC";
$res=mysqli_query($dbcon,$sql);
while($row=mysqli_fetch_array($res)){
    if($name==$row['usersname']){
		$score=$row['score'];
	$ins="INSERT INTO `leaderboard` (`id`,`usersname`,`score`) VALUES ('NULL','$name','$score') ";
	$resins=mysqli_query($dbcon,$ins);
	break;
	}
}
}
$rank=0;$temp=NULL;
$sql="SELECT * FROM `leaderboard` ORDER BY `score` DESC";
$res=mysqli_query($dbcon,$sql);
echo "<table>";
  echo "<tr><th>Rank</th> <th>usersname</th>  <th>score</th></tr>";

while($row=mysqli_fetch_array($res)){
	if($temp!=$row['score']||$temp=="NULL"){$rank++;}
    echo "<tr><td>";
	echo $rank;
	echo "</td><td>";
	echo $row['usersname']."                      ";
	echo "</td><td>";
	echo $row['score']."                      <br>";
    echo "</td></tr>";
	$temp=$row['score'];
	}
	echo "</table>";
?>