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

		a:link, a:visited 
		{
			display: block;
			width: 120px;
			font-weight: bold;
			color: #FFFFFF;
			background-color: #98bf21;
			text-align: center;
			padding: 4px;
			text-decoration: none;
			text-transform: uppercase;
		}

		a:hover, a:active
		{
			background-color: #7A991A;
		}

  
  </style>
  
  <script>
	function func(id1)
	{	
		if(id1.id=="quant1")
		{
			document.getElementById("quant").innerHTML="hh";
		}
		else if(id1.id=="verbal1")
		{
			document.getElementById("quant").innerHTML="<h1>shchhs</h1>";
		}
	}
  </script>
 </head>
 <body>
	<?php
		
		$email=$_SESSION['email'];
		
		
	?>
	<br>
	
	<div class="container-fluid">
		<div class="jumbotron">
			<ul class="nav navbar-nav navbar-right">
				<li><button onClick="window.location.href='index.html'" class="btn btn-info btn-lg btn-nav" ><span class="glyphicon glyphicon-log-out"></span> Logout</button></li>
			 </ul>
			<p style="font-size: 30px;">Hello <?php echo $email; ?></p>
		</div>
	</div>
	
	<br>
	<!--<div class="row" >
		<div class="col-sm-10 col-sm-offset-1">
			<ul class="nav nav-tabs nav-justified" style="background-color:#81818C;">
				<li><a href="#quant" style="color:navy" class="a"><h3>Quantitative Reasoning</h3></a></h1></li>
				<li><a href="#verbal" style="color:navy"><h3>Verbal Reasoning</h3></a></li>
			</ul>
		</div>
		<div class="col-sm-offset-1"></div>
	</div>-->
	<ul>
  <li><a href="#" id="quant1" onclick="func(this);return false;" >Home</a></li>
  <li><a href="#" id="verbal1" onclick="func(this);return false;">News</a></li>
</ul>
		
	
	<br><br>
	
		
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
	</div>	
	
	<div id="verbal">	
	<div class="container-fluid">
	<div class="jumbotron" style="background-color:lavender"> 
		<div class="row">
		<div class="col-sm-3 col-sm-offset-1">			
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <b>Playing with Words&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=v1&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=v1&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		
		<div class="col-sm-3 col-sm-offset-4">
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				  <b>Text Completion&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=v2&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=v2&test=m" id="aa"><b>Mock Test</b></a></li>
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
				  <b>Sentence Equivalence&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=v3&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=v3&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		
		<div class="col-sm-3 col-sm-offset-4">
			<div class="dropdown">
				  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				 <b>Synonyms&nbsp;&nbsp;</b>
				  <span class="caret"></span></button>				  
				  <ul class="dropdown-menu">
					<li><a href="page3.php?link=v4&test=p" id="aa"><b>Practice Set</b></a></li>
					<li><a href="page3.php?link=v4&test=m" id="aa"><b>Mock Test</b></a></li>
				  </ul>
			</div>
		</div>
		<div class="col-sm-offset-1"></div>
		</div>
		
	</div>
	</div>
	</div>
 </body>
 </html>