<?php session_start(); 

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
 
	  .container
	  {
		  width:100%;  
		  
	  }
	 
	  
		button
		{
			width:100%;
		}
		#aa
		{
			border-radius:2px;
			color:black;
			background-color:#FFB2B2;
			margin:10px;
		}
		#aa:hover
		{
			background-color:green;
			color:white;
		}
		ul 
		{
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}	

		li 
		{
			float: left;
		}

		

  
  </style>
  </head>
  <body>
	<div class="container-fluid">
	<div class="jumbotron" style="background-color:lavender" id="quant"> 
		<div class="row">
		<div class="col-sm-3 col-sm-offset-1">			
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <b>Numbers&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=q1&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=q1&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		
		<div class="col-sm-3 col-sm-offset-4">
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <b>Average&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=q2&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=q2&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		<div class="col-sm-offset-1"></div>
		</div>
		
		<br><br><br>
		
				<div class="row">
		<div class="col-sm-3 col-sm-offset-1"style="background-color:lavender">
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <b>Probability&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=q3&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=q3&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		
		<div class="col-sm-3 col-sm-offset-4">
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <b>Statistics&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=q4&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=q4&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		<div class="col-sm-offset-1"></div>
		</div>
		
		<br><br><br>
				<div class="row">
		<div class="col-sm-3 col-sm-offset-1"style="background-color:lavender">
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <b>Ratio and Indices&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=q5&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=q5&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		
		<div class="col-sm-3 col-sm-offset-4">
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <b>Profit and Loss&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=q6&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=q6&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		<div class="col-sm-offset-1"></div>
		</div>
	</div>
	</div>
  </body>
  </html>