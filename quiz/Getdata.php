<?php
session_start();
$q =intval($_GET['q']);
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydatabase";
$dbcon = @mysqli_connect($servername, $username, $password, $dbname);

if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
} 
$usrname=$_SESSION['usrname'];
$i=$q-1;
$isert="SELECT * FROM `answers` WHERE questid='$q' && usersname='$usrname'";
$resisert=mysqli_query($dbcon,$isert);
$rowisert=mysqli_fetch_array($resisert);
if(!$resisert){die("ERROR");}
$a=$rowisert['answerstatus'];
if($usrname) { 
if(!$a){
	$sqli="SELECT * FROM `questions` WHERE ID='$q' ";
	$res=mysqli_query($dbcon,$sqli);
	$rows=mysqli_fetch_array($res);
	echo $rows['question']."<br>";
	$id=$rows['ID'];
	echo "<form id='form' name='form' method='POST' action=''  accept-charset='UTF-8'>";
	echo "<input type='hidden' id='id' name='id' value='$id'>";
	echo "<input type='radio' name='choice' id='choiceA' value='A' onclick='func()' > ";
	echo $rows['optionA']."<br>";
	echo "<input type='radio' name='choice' id='choiceB' value='B' onclick='func1()'> ";
	echo $rows['optionB']."<br>";
	echo "<input type='radio' name='choice' id='choiceC' value='C' onclick='func2()'> ";
	echo $rows['optionC']."<br>";
    echo "<input type='radio' name='choice' id='choiceD' value='D' onclick='func3()'> ";
	echo $rows['optionD']."<br>";
	$ans=$rows['answer'];
	echo "<input type='hidden' id='ans' name='ans' value='$ans' >";
	echo "<input type='submit' id='submit' name='submit' value='submit answer' >";
	echo "<button id='next' name='next' onclick='nextfunction()' >Next</button>";
	echo "</form>";
	}
}
else{
	die("please login \"<a href='mylogin.php'> here</a>\" to continue");
	}

?>
