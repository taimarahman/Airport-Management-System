<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Find Employee</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
    <link rel="stylesheet" href="../css/cancel.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body class="bg">
    <div class="admin_log">
        <div  id="logout" class="admin_block" >
            <a href="#"><i class="fas fa-user user_icon"></i></a>
            <a href="#" class="admin"><?php echo $_SESSION['login_user']; ?></a>
        </div>
        <div class="admin_block3">
            <a href="#" class="admin" style="font-size: 16px"><?php echo $_SESSION['ssn']; ?></a>
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
$ssn= $mysqli->real_escape_string($_POST['ssn']);
$sql="SELECT*FROM employee1 WHERE ssn={$ssn}";
$result = $mysqli->query($sql);
$count= mysqli_num_rows($result);
if($count==1)
	{
        echo '<h2> Employee Data </h2>';
        $row=$result->fetch_assoc();
        echo "Employee SSN: ".$row['ssn'];
            echo "<br>";
            echo "First Name: ".$row['fname'];
            echo "<br>";
            echo "Middle Name: ".$row['m'];
            echo "<br>";
            echo "Last Name: ".$row['lname'];
            echo "<br>";
            echo "Address: ".$row['address'];
            echo "<br>";
            echo "Phone No: ".$row['phone'];
            echo "<br>";
            echo "Division: ".$row['jobtype'];
            echo "<br>";
            echo "Age: ".$row['age'];
            echo "<br>";
            echo "Sex: ".$row['sex'];
            echo "<br>";
            echo "Airport: ".$row['ap_name'];
            echo "<br>";
	}
	else 
	{
        echo '<h2> Wrong SSN No!';
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
