<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <title>Welcome!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	$type=$_SESSION['type'];
	if ($_GET['link']=='111') 
	{
		echo '<a href=# class="collapse">click</a>';
		echo 'hello';
		
	}
	
	if(isset($_POST['q1'])){echo 'clicked!';}
?>
	<br>
	
	<div class="container-fluid">
		<div class="jumbotron">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			 </ul>
			<p style="font-size: 25px;">Hello <?php echo $_SESSION['email'];?></p>
		</div>
	</div>
</body>
</html>