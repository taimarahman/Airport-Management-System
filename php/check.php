<?php
session_start();
$username = "root";
$password = "";
$database = "airportx";
 
$conn = new mysqli("localhost", $username, $password, $database);

if (isset($_POST["username_log"])) {
    
    $sql="SELECT * FROM users WHERE username='".$_POST["username_log"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid Username</span>';
    }
}
if (isset($_POST["username_reg"])) {
    
    $sql="SELECT * FROM users WHERE username='".$_POST["username_reg"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Username already exists</span>';
    }
    
}

if (isset($_POST["ssn_reg"])) {
    
    $sql="SELECT * FROM users WHERE ssn='".$_POST["ssn_reg"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Account already exists</span>';
    }
    $sql = "SELECT * FROM employee1 WHERE ssn = '".$_POST["ssn_reg"]."'";
    $valid = $conn->query($sql);

    if (mysqli_num_rows($valid) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid SSN</span>';
    }
}

if (isset($_POST["user_ad"])) {
    
    $sql="SELECT * FROM admin WHERE admin_name='".$_POST["user_ad"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid Username</span>';
    }
    
}

if (isset($_POST["change_pass"])) {
    
    $sql="SELECT * FROM users WHERE username='".$_POST["change_pass"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid Username</span>';
    }
}

if (isset($_POST["ticket_num"])) {
    
    $sql="SELECT * FROM ticket1 WHERE TICKET_NUMBER='".$_POST["ticket_num"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid Ticket Number</span>';
    }
}
if (isset($_POST["remove_em"])) {
    
    $sql="SELECT*FROM employee1 WHERE ssn='".$_POST["remove_em"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid SSN</span>';
    }
}

if (isset($_POST["find_em"])) {
    
    $sql="SELECT*FROM employee1 WHERE ssn='".$_POST["find_em"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid SSN</span>';
    }
}

if (isset($_POST["find_pass"])) {
    
    $sql="SELECT * FROM ticket1 WHERE TICKET_NUMBER='".$_POST["find_pass"]."'";
    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 0) {
        echo '<span style="color: red; font-size: 14px">&#10007 Invalid Ticket Number</span>';
    }
}

?>
