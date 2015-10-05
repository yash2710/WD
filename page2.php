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
 
	  .container
	  {
		  width:100%;  
		  
	  }
	  a:hover
	  {
		  color:black;
	  }
	  
		button
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
	<br>
	
	<div class="container-fluid">
		<div class="jumbotron">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			 </ul>
			<p style="font-size: 25px;">Hello <?php echo $email; ?></p>
		</div>
	</div>
	
	<br>
	<div class="row" >
		<div class="col-sm-10 col-sm-offset-1">
			<ul class="nav nav-tabs nav-justified" style="background-color:#81818C;">
				<li><a href="#quant" style="color:navy" class="a"><h3>Quantitative Reasoning</h3></a></h1></li>
				<li><a href="#verbal" style="color:navy"><h3>Verbal Reasoning</h3></a></li>
			</ul>
		</div>
		<div class="col-sm-offset-1"></div>
	</div>	
	
	<br><br>
	<div id="quant">
	
	<div class="container-fluid">
	<div class="jumbotron" style="background-color:lavender"> 
		<div class="row">
		<div class="col-sm-3 col-sm-offset-1"style="background-color:lavender">
			
			<button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="focus"   data-html="true" data-content="
			<button type='button' class='btn btn-info' onClick='my_function1()' name='111' style='width:100%'>Practice Set</button>
			<br><br>
			<button type='button' class='btn btn-info' onClick='my_function1()' name='112' style='width:100%'>Mock Test</button>
			">Numbers</button>
		</div>
		
		<div class="col-sm-3 col-sm-offset-4">
			<button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="focus"  data-html="true" data-content="
			<button type='button' class='btn btn-info' onClick='my_function1()' name='121' style='width:100%'>Practice Set</button>
			<br><br>
			<button type='button' class='btn btn-info' onClick='my_function1()' name='122' style='width:100%'>Mock Test</button>
			">Average</button>
		</div>
		<div class="col-sm-offset-1"></div>
		</div>
		
		<br><br>
		
				<div class="row">
		<div class="col-sm-3 col-sm-offset-1"style="background-color:lavender">
			<button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="focus"  data-html="true" data-content="
			<button type='button' class='btn btn-info' onClick='my_function1()' name='131' style='width:100%'>Practice Set</button>
			<br><br>
			<button type='button' class='btn btn-info' onClick='my_function1()' name='132' style='width:100%'>Mock Test</button>
			">Probability</button>
		</div>
		
		<div class="col-sm-3 col-sm-offset-4">
			<button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="focus"  data-html="true" data-content="
			<button type='button' class='btn btn-info' onClick='my_function1()' name='141' style='width:100%'>Practice Set</button>
			<br><br>
			<button type='button' class='btn btn-info' onClick='my_function1()' name='142' style='width:100%'>Mock Test</button>
			">Statistics</button>
		</div>
		<div class="col-sm-offset-1"></div>
		</div>
		
		<br><br>
				<div class="row">
		<div class="col-sm-3 col-sm-offset-1"style="background-color:lavender">
			<button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="focus"  data-html="true" data-content="
			<button type='button' class='btn btn-info' onClick='my_function1()' name='151' style='width:100%'>Practice Set</button>
			<br><br>
			<button type='button' class='btn btn-info' onClick='my_function1()' name='152' style='width:100%'>Mock Test</button>
			">Ratio and Indices</button>
		</div>
		
		<div class="col-sm-3 col-sm-offset-4">
			<button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="focus"  data-html="true" data-content="
			<button type='button' class='btn btn-info' onClick='my_function1()' name='161' style='width:100%'>Practice Set</button>
			<br><br>
			<button type='button' class='btn btn-info' onClick='my_function1()' name='162' style='width:100%'>Mock Test</button>
			">Profit and Loss</button>
		</div>
		<div class="col-sm-offset-1"></div>
		</div>
	</div>
	</div>
	</div>
	
	<script>
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover(); 
		});
		
		function my_function1()
		{
			
			 window.location="page3.php?link=q1";
			 
			 
			
		}
		</script>
	
 </body>
 </html>