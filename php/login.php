<?php
$username = "root";
$password = "";
$database = "airportx";
 
$conn = new mysqli("localhost", $username, $password, $database);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 

	$myusername=addslashes($_POST['username']); 
	$mypassword=addslashes($_POST['password']); 

	$sql="SELECT*FROM users WHERE username='$myusername' and password ='$mypassword'";
    $result = mysqli_query($conn, $sql);

	$count= mysqli_num_rows($result);

	echo $count;
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{
        session_start();
		$_SESSION['login_user']=$myusername;
		$single = $result->fetch_assoc();
        $_SESSION['ssn'] = $single['ssn'];
		header("location: welcome.php");
	}
	else 
	{	
		header("location: ../index.html");
	}
}
?>
