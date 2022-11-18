<body style="background-color:aquamarine;">

<?php

$server = "localhost"; 
$db = "login"; 
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password, $db);
if($conn)
{
	
	echo "&#128525; Down the stairs, I was there I remember it all too well, yeahd &#128076";
}

else
{
	echo "Ohhh no! database is not connected".mysqli_error($conn);
}

if(isset($_POST ['user']))
{
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "select * from users where username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) == 1)
	{
		echo "<br>&#129327Login success:\t\t\t".$username. "</br>";
		exit ();
	}
	else
	{
		echo "Failed to Log-in";
		exit();
		
	}
	
}



?>
</body>