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

	$sql="SELECT*FROM admin WHERE admin_name='$myusername' and admin_pass ='$mypassword'";
    $result = mysqli_query($conn, $sql);

	$count= mysqli_num_rows($result);

	echo $count;
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{
        session_start();
		$_SESSION['login_user']=$myusername;
        


		// $admin = $result->fetch_assoc();
		// $_SESSION['id'] = $admin['admin_name'];
		header("location: welcome_admin.php");
	}
	else 
	{
		header("location: ../index.html");
	}
}
?>
