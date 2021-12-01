<?php
$username = "root";
$password = "";
$database = "airportx";
 
$conn = new mysqli("localhost", $username, $password, $database);


if (isset($_POST["username"])) {
    
    $sql="SELECT * FROM users WHERE username='".$_POST["username"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Username already exists</span>';
    }
    
}

if (isset($_POST["ssn"])) {
    
    $sql="SELECT * FROM users WHERE ssn='".$_POST["ssn"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Account already exists</span>';
    }
    $sql = "SELECT * FROM employee1 WHERE ssn = '".$_POST["ssn"]."'";
    $valid = $conn->query($sql);

    if (mysqli_num_rows($valid) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid SSN</span>';
    }
}


?>