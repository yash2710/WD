
<?php session_start();
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

<body>

	<br>
	
	<div class="container-fluid">
		<div class="jumbotron">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			 </ul>
			<p style="font-size: 25p;">Hello <?php echo $_SESSION['email'];?></p>
		</div>
	</div>
    <b><p id="timer" style="font-size:40px" class="text-success"></p></b>
        <script>
            var a = 12;
            var redirect = setTimeout(function(){window.location="page3.php";},12000);
            var interval = setInterval(change,1000);
            function change(){
                document.getElementById("timer").innerHTML = Math.floor(a/60)+":"+Math.floor(a%60);
                a--;
            }
        </script>
	<iframe src="content.php" width="90%" height="400px" style="margin:20px"></iframe>
</body>
</html>