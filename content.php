<?php session_start(); 


$servername = "localhost";
$mysql = "wddbms";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $mysql);
// Check connection
$question;
$o1;
$o2;
$o3;
$o4;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{

    //echo "hi";
    //echo "hi";
	


$sql="select * from `questions` where `type`='".$_SESSION['link']."' and `number`='".$_SESSION['qno']."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
			if($row = $result->fetch_assoc()) 
			{
			//echo "id: " . $row["password"];
					$question=$row['ques'];
					$o1=$row['option1'];
					$o2=$row['option2'];
					$o3=$row['option3'];
					$o4=$row['option4'];
					$_SESSION['ans']=$row['ans'];
			}
}
}
?>
<!DOCTYPE html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
	.well
	{
		background-color:lavender;
		margin:20px;
		text:bold;
		border-radius:5px;
		
	}
	#para
	{
		font-size:18px;
	}
	#ques
	{
		background-color:navy; 
		color:white; 
		border:none;
	}
  </style>
</head>

<body style="background-color:navy">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-default " id="timer"><?php echo $_SESSION['qno'];?></span></h3>
<div class="well well-lg" id="ques">

<p id="para"><?php echo $question; ?><br></p>
<form method="POST" action="check.php" id="form1">
	<div class="btn-group-vertical">
		<div class="radio">
		  <label><input type="radio" name="optradio" value="1"><?php echo $o1;?></label>
		</div>
		<div class="radio">
		  <label><input type="radio" name="optradio" value="2"><?php echo $o2;?></label>
		</div>
		<div class="radio">
		  <label><input type="radio" name="optradio" value="3"><?php echo $o3;?></label>
		</div>
		<div class="radio">
		  <label><input type="radio" name="optradio" value="4"><?php echo $o4;?></label>
		</div>
	</div><br>
		<!--<input type="submit" class="btn btn-primary" onclick="check()"><?php if($_SESSION['qno']==3) echo "Submit"; else echo "Next"; ?></button> 
-->
		<?php 
		$v;
		if($_SESSION['qno']==3)
			$v="Finish"; 
		else 
			$v="Next"; 
		?>
		<button id="btn" type="submit" class="btn btn-success"><?php echo $v;?></button>
		<?php
		if($_SESSION['qno']==3){?>
		<!--<a href="result.php" class="btn btn-primary" target="_blank">View Result</a>-->
		<script>
			document.getElementById("btn").onclick=function() {func()};
			function func()
			{
				if(confirm("Are you sure you want to submit?"))
				{
					document.getElementById("btn").setAttribute("formtarget", "_blank");
					<?php
					$_SESSION['confirm']=$_SESSION['confirm']+1;
					?>
					
					
					
				}
				
				
			}
		</script>
		<?php
		}?>
			
		</div>
	
	<br>
	


</body>
</html>