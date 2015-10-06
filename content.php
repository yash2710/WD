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
$ans;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{

    //echo "hi";
    //echo "hi";
	

echo $_SESSION['qno'];
$sql="select * from `questions` where `type`='".$_SESSION['link']."' and `number`='".$_SESSION['qno']."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
			if($row = $result->fetch_assoc()) 
			{
			//echo "id: " . $row["password"];
					$question=$row['question'];
					$o1=$row['option1'];
					$o2=$row['option2'];
					$o3=$row['option3'];
					$o4=$row['option4'];
					$ans=$row['ans'];
			}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<div class="well well-lg" id="ques">
<?php echo $question; ?><br>
	<div class="btn-group-vertical">
<div class="radio">
  <label><input type="radio" name="optradio" value="1"><?php echo $o1;?></label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="2"><?php echo $o2;?></label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="optradio" value="3"><?php echo $o3;?></label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="optradio" value="4"><?php echo $o4;?></label>
</div>
		</div><br>
		<button class="btn btn-primary" onclick="check()"><?php if($_SESSION['qno']==3) echo "Submit"; else echo "Next"; ?></button> 
</div>
	
	<br>
	<script>
	function check()
	{
		//document.write("called");	
		
		var ans = $('input[name="optradio"]:checked').val();
		
		if(ans == <?php echo $ans; ?>){
			<?php $_SESSION['marks']=$_SESSION['marks']+1;?>
			
		}
		
		<?php $_SESSION['qno']=$_SESSION['qno']+1; location.href('content.php');?>
		
	}
	</script>
	<?php
	//$_SESSION['link']=$_GET['link'];
	if(isset($_POST['g'])){echo 'clicked!';}
	else 
		if ($_SESSION['link']=='q1') 
	{
		
		echo '<script>func1();</script>';
		
	}
?>


</body>
</html>