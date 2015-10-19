<?php session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<style>
		
	
	</style>
</head>
<body>
		<?php
		$t;
		$an=($_POST['optradio']);
		$ans=$_SESSION['ans'];
		//var ans = $('input[name="optradio"]:checked').val().toString();
		
		
		if($an==$ans){
			 $_SESSION['marks']=$_SESSION['marks']+1;
			
		}
		
		
			if($_SESSION['qno']<3)
			{
				
				$_SESSION['qno']=$_SESSION['qno']+1;
				
				echo '<script>window.location="content.php"</script>'; 
			}
			else
			{
				 
				echo 'hi';
				$servername = "localhost";
				$mysql = "wddbms";
				$username = "root";
				$password = "";

				
				$conn = new mysqli($servername, $username, $password, $mysql);
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				if(strcmp($_SESSION['link'],"q1")||strcmp($_SESSION['link'],"q2")||strcmp($_SESSION['link'],"q3")||strcmp($_SESSION['link'],"q4")||strcmp($_SESSION['link'],"q5")||strcmp($_SESSION['link'],"q6"))
				{
					echo 'jcfk';
					echo $_SESSION['marks'];
					$t='quant';
				}
				else
					$t='verbal';
				$sql="UPDATE `login` SET `quant`='".$_SESSION['marks']."' WHERE `email`='".$_SESSION['email']."'";
				echo $t;
				if ($conn->query($sql) == TRUE) 
				{
					
					//echo 'fghfdjkhvjfdgvhfdgvhfdv';
					//header("Location: result.php");
					if($_SESSION['confirm']==1){
					
						echo '<script>window.location="result.php"</script>'; }
					else 
					{
					echo '<script>window.location="content.php"</script>'; 
					}
					//echo '<script>"http://localhost/WD/page3.php?link=q1&test=p".close();</script>'; 

				}
			}
		?>
</body>
</html>