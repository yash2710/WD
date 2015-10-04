<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <style>
 
  .container
  {
	  width:100%;  
	  
  }
  
  
  
  </style>
 </head>
 <body>
	<?php
		session_start();
		$email=$_SESSION['email'];
	?>
	<br><br>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid" style="background-color:#660033; font-size:160%; color:white">		
				<div>
				<ul class="nav navbar-nav">
					<li><a href="#" style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello <?php echo $email?></a>
				</ul>
				
				
				</div>
			<div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html" style="color:white;" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		
		</div>
	</nav>
	
	<br><br><br>
	<div class="container">
		<div class="well well-lg" style="background-color:#FFC6D0; color:black;">
			<ul class="nav nav-tabs nav-justified">
				<li class="active"><a href="#quant"><h3>Quantitative Reasoning</h3></a></h1></li>
				<li><a href="#verbal"><h3>Verbal Reasoning</h3></a></li>
			
			</ul>
		</div>
	</div>
	
	<div id="quant">
		<div class="container-fluid">
		<div class="jumbotron">
			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#general" name="q1">Chapter 1</button>
			
		</div>
		</div>
	</div>
	
	<script>
	$(document).ready(function(){
		$('[data-toggle="collapse"]').collapse({html:true});   
	});
	</script>
	
 </body>
 </html>