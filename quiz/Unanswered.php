<?php session_start();  ?>
<html>
<head>
<style>
#test1{
border:1px solid black;
padding: 40px 70px 100px 70px;
position:position;
width:750px;
height:200px;
margin-top:50px;
margin-left:30px;
}
#start{
	width:60px;
}
a:link{text-decoration:none;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
var str=1,score=0,scrtmp=0,count=0;
var x,y,z,a,check,ans,answer,checked;
function start(){	
	//document.getElementById("start").visibility="hidden";
	if(str==1){document.getElementById("score").innerHTML="score:0";}
    $(document).ready(function(){document.getElementById("test1").innerHTML="";
		$.ajax({
		type:"GET",
		url:"getdata.php?q="+str,
		dataType:"html",
		success: function(response){
		$("#test1").html(response);
		}
    	});
		alert("This is the unanaswered question.If it is blank click ok to continue..."+document.getElementById("test1").innerHTML);
		if(document.getElementById("test1").innerHTML==""){str++;count++;start();}
		//alert("okay fine");
		$("#submit").click(function(e){
		e.preventDefault();
	    var mydata={checked:check,answer:ans,id:str};
	    var data=JSON.stringify(mydata);
		//alert(data);
		$.ajax({
		type:"POST",
		url:"processingunans.php",
		data: {data:data},
		dataType:"html",
		success: function(response){
			$("#score_status").html(response);
			score=document.getElementById("score_status").innerHTML;
			$("#score_status").hide();
			if(scrtmp < score){document.getElementById("score").innerHTML="    Your answer to the previous question is correct. The score is:"+score;scrtmp=score;}
			else{document.getElementById("score").innerHTML="    Your answer to the previous question is wrong.The correct answer is option "+ans+"|The score is:"+score;scrtmp=score;}
			
			str++;start();},
		error:function(jqxhr,thrownError){alert(jqxhr.status)}
	});
	});
	});
    if(str==6){
		$(document).ready(function(){
			
		$.ajax({
		type:"POST",
		url:"Thankyou.php",
		data:{score:score,count:count},
			success:function(response){
			$("#unans").hide();
			$("#score").hide();
			$("#test_status").hide();
			$("#test1").html(response);
			},
		error:function(xhr){alert(xhr.status);}
		});
		});
		}
	}
	function nextfunction(){str++;start();}
	function func(){x=document.getElementById("choiceA").value;check=x;ans=document.getElementById("ans").value;}
	function func1(){y=document.getElementById("choiceB").value;check=y;ans=document.getElementById("ans").value;}
	function func2(){z=document.getElementById("choiceC").value;check=z;ans=document.getElementById("ans").value;}
	function func3(){a=document.getElementById("choiceD").value;check=a;ans=document.getElementById("ans").value;}
</script>
</head>
<body>
<h2 id="test_status"></h2>
<div id="score_status"></div>
<div id="score">
</div>
<div id="unanswered">
<input type="button" id="unans" name="unans" onclick="start()" value="unanswered questions" />
</div>
<div id="test1">
</div>
</body>
</html>
