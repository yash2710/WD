<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color:#FFBDFF;
			color:black;
		}
	
	</style>
</head>
<body>
<br>
<?php
/*$servername = "mysql5.000webhost.com";
$mysql = "a5857919_wddbms";
$username = "a5857919_wddbms";
$password = "yash2710";*/

$servername = "localhost";
$mysql = "wddbms";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $mysql);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{

    //echo "hi";
	session_start();
	$_SESSION[email]=$_POST["email"];
    //echo "hi";
	$email=$_POST["email"];
	$password=$_POST["password"];
}


/*$sql = "select * from `table`";
$rows = array();
$result = $conn->query($sql);
if($result->num_rows >0 ){
	while($row = $result->fetch_assoc())
		$rows[]=$row;
}
print json_encode($rows);*/

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	 if (isset($_POST['btn_signup'])) 
	{
		$sql="insert into `login`(`email`,`password`) values('$email','$password')";
		if ($conn->query($sql) === TRUE) 
		{
			//header('Location: /index.html');
			echo '<script> window.location="index.html"; </script>';
		}
		else 
		{
			echo "<center><h1>Username already exists...</h1></center>";
			echo "<br><br><center><h1><a href=\"index.html\">Try again!</a></h1></center>";
		}

		
		
    }

	if (isset($_POST['btn_login'])) 
	{
		$sql="SELECT `password` FROM `login` WHERE email='".$_SESSION['email']."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    
			if($row = $result->fetch_assoc()) 
			{
			//echo "id: " . $row["password"];
			if($row["password"]==$password)
			{
				echo '<script> window.location="page2.php"; </script>';
			}
			else 
				{
				echo "<center><h1>Invalid Login...</h1></center>";
				echo "<br><br><center><h1><a href=\"index.html\">Try again!</a></h1></center>";
				}

			}
		} 
		else 
		{
			echo "<center><h1>You have not registered yet...</h1></center>";
			echo "<br><br><center><h1><a href=\"index.html\">Try again!</a></h1></center>";
		}

		
		
		
    }
	
}
$conn->close();
?>
<br>
</body>
</html>

