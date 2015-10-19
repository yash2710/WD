<?php session_start();
$m=$_SESSION['marks'];
$m=$m/3*100;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
		var s="Congratulations!"
		var a=s.split("");
		var i=0;
		function f()
		{
			if(i<s.length)
			{
			document.getElementById("d").innerHTML=document.getElementById("d").innerHTML+a[i];
			i++;
			}
		}
		
	</script>
	<style>
	#div1
	{
		width:750px;
		font-family:Verdana,Sans-Serif;
		background-color:lavenderblush;
		border-radius:20px;
		padding:20px;
		font-size:80px;
		margin-top:50px;
		margin-left:2px;
		border-image-source:url("star.jpg");
		border-image-slice:30%;
		border-image-width:30px;
		border-image-repeat:round;
	}
	.progress
	{
		border-radius:10px;
		height:55px;
		background-color:#CCCCCC;	
		
	}
	
	
	</style>
</head>
<body style="background-color:lavenderblush;">
<br>
<div class="container-fluid">
		<div class="jumbotron">
			<ul class="nav navbar-nav navbar-right">
				<li><button onClick="window.location.href='page2.php'" class="btn btn-info btn-lg btn-nav" ><span class="glyphicon glyphicon-log-out"></span> Continue</button></li>
				<li><button onClick="window.location.href='index.html'" class="btn btn-info btn-lg btn-nav" ><span class="glyphicon glyphicon-log-out"></span> Logout</button></li>
				
			 </ul>
			<p style="font-size: 30px;">Hello <?php echo $_SESSION['email'];?></p>
		</div>
</div>
<br>
<div class="container">
 
  
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" 
	style="width:<?php echo $m.'%';?>;">
      <h3><?php echo $m.'%'; ?></h3>
    </div>		
  </div>
  <div id="div1">
  <p id="d" style="color:navy;"></p>
  </div>
</div>
<script>

var t=setInterval(f,100);
</script>
</body>
</html>