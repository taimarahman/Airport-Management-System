<?php
$username = "root";
$password = "";
$database = "airportx";
 
$conn = new mysqli("localhost", $username, $password, $database);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 

	$myusername=addslashes($_POST['username']); 
	$myoldpassword=addslashes($_POST['oldpassword']);
	$mynewpassword=addslashes($_POST['newpassword']); 

    $sql="UPDATE users SET password = '$mynewpassword' WHERE users.username = '$myusername' and users.password = '$myoldpassword';";
    $conn->query($sql);

    $sql="SELECT*FROM users WHERE username='$myusername' and password ='$mynewpassword'";
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
