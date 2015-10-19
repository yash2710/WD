
<?php session_start();

$_SESSION['confirm']=0;
$_SESSION['link']=$_GET['link'];
$_SESSION['qno']=1;
$_SESSION['marks']=0;

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
  <style>
	.well
	{
		background-color:lavender;
		margin:20px;
		text:bold;
		border-radius:5px;
		
	}
  </style>
</head>

<body style="background-color:#CCE0F5">

	<br>
	
	<div class="container-fluid">
		<div class="jumbotron">
			<ul class="nav navbar-nav navbar-right">
				<li><button onClick="window.location.href='index.html'" class="btn btn-info btn-lg btn-nav" ><span class="glyphicon glyphicon-log-out"></span> Logout</button></li>
			 </ul>
			<p style="font-size: 30px;">Hello <?php echo $_SESSION['email'];?></p>
		</div>
	</div>
	<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-5" style="background-color:maroon"><h3>&nbsp;</h3></div>
		  <div class="col-sm-4" style="background-color:maroon">
			<b><h3 style="color:white;">Remaining Time: <span class="label label-default " id="timer"></span></h3>
			</div>
			<div class="col-sm-2"></div>
	</div>
	<!--<p id="timer" style="font-size:40px" class="text-success"></p></b>!-->
        <script>
            var a = 120;
            var redirect = setTimeout(function(){window.location="timeout.php";},120000);
            var interval = setInterval(change,1000);
            function change(){
                document.getElementById("timer").innerHTML = Math.floor(a/60)+":"+Math.floor(a%60);
                a--;
            }
        </script>
	<iframe src="content.php" width="90%" height="400px" style="margin:20px; border-radius:15px;"></iframe>
</body>
</html>