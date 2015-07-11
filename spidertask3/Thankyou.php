<?php 
session_start();
$score=intval($_GET['q']);
if($score==5)
echo "congrats!!You got 5 marks and top the leaderboard..";
else
echo "Congrats You got".$score."marks";
session_destroy();
 ?>
<html>
<body>
Thank You.You Are Done.Your session has been destroyed.Inorder to view your unanswered questions You need to login again <a href="mylogin.php">here</a>.......
</body>
</html>
