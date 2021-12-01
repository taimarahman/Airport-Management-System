<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Finding Passenger</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
    <link rel="stylesheet" href="../css/cancel.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body class="bg">
    <div class="admin_log">
        <div  id="logout" class="admin_block" >
            <img src="../img/admin.png" alt="" class="admin_icon">
            <a href="#" class="admin"><?php echo $_SESSION['login_user']; ?></a>
        </div>
        <div class="admin_block2">
        <a href="logout.php" class="admin" style="font-size: 16px">Logout</a>
        </div>
    </div>
    <div class="back">
        <a href="employee.php"><i class="fas fa-arrow-left"></i></a>
    </div>
        
    <div class="title">
        <h1>Airport Management System</h1>
    </div>

    <ul id="menu">
        <li><a href="welcome_admin.php">Home</a></li>
        <li><a href="employee.php">Employee</a>
          <ul>
            <li><a href="checkemployee.php">Check Employee Data</a></li>
            <li><a href="add_employee.php">Add Employee</a></li>
            <li><a href="remove_employee.php">Remove Employee</a></li>
            <li><a href="find_employee.php">Find Employee</a></li>
          </ul>			
        </li>
        <li><a href="passenger_admin.php">Passenger</a>
            <ul>
                <li><a href="checkpassengers_admin.php">Check Passenger</a></li>
                <li><a href="cancelledpassengers_admin.php">Cancelled Passengers</a></li>
                <li><a href="find_passenger_admin.php">Find Passenger</a></li>
            </ul>
        </li>
	</ul>
    <div class="main_content fp">
<?php
$username = "root";
$password = "";
$database = "airportx";
 
$mysqli = new mysqli("localhost", $username, $password, $database);

$ssnr= $mysqli->real_escape_string($_POST['ssn']);
$sql="SELECT*FROM employee1 WHERE ssn={$ssnr}";
$result = $mysqli->query($sql);
$count= mysqli_num_rows($result);
if($count==1)
{
    echo"<h1>Employee with same SSN already exists</h1>";
    echo"<h2>Please Recheck the Data</h2>";
}
else
{
echo "<h1>New Employee Added</h1>";
echo "<h2>INFORMATION</h2>";
echo "Employee SSN: ".$ssn = $mysqli->real_escape_string($_POST['ssn']);
    echo "<br>";
echo "First Name: ".$fname = $mysqli->real_escape_string($_POST['fname']);
    echo "<br>";
echo "Middle Name: ".$m = $mysqli->real_escape_string($_POST['m']);
    echo "<br>";
echo "Last Name: ".$lname = $mysqli->real_escape_string($_POST['lname']);
    echo "<br>";
echo "Address: ".$address = $mysqli->real_escape_string($_POST['address']);
    echo "<br>";
echo "Phone No: ".$phone = $mysqli->real_escape_string($_POST['phone']);
    echo "<br>";
echo "Email : ".$email = $mysqli->real_escape_string($_POST['email']);
    echo "<br>";
echo "Division: ".$jobtype = $mysqli->real_escape_string($_POST['jobtype']);
    echo "<br>";
echo "Age: ".$age = $mysqli->real_escape_string($_POST['age']);
    echo "<br>";
echo "Sex: ".$sex = $mysqli->real_escape_string($_POST['sex']);
    echo "<br>";
echo "Airport: ".$ap_name = $mysqli->real_escape_string($_POST['ap_name']);
    echo "<br>";
$query1="INSERT INTO employee1(ssn,fname,m,lname,address,phone,jobtype,age,sex,ap_name,email)
values({$ssn},'{$fname}','{$m}','{$lname}','{$address}','{$phone}','{$jobtype}',{$age},'{$sex}','{$ap_name}','{$email}')";
$mysqli->query($query1);
$mysqli->close();

}
?>
	</div>
	<script src="https://kit.fontawesome.com/6756dd734e.js" crossorigin="anonymous"></script>
        <script>
            document.getElementById("logout").addEventListener("click", function(){
                document.querySelector(".admin_block2").style.display = "block";
                document.querySelector(".admin_block3").style.display = "block";
            })
        </script>
</body>
</html>