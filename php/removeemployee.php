<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ticket Booking Form</title>
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
				<li><a href="#">Remove Employee</a></li>
				<li><a href="find_employee.php">Find Employee</a></li>
			</ul>			
		</li>
        <li><a href="passenger_admin.php">Passenger</a>
            <ul>
                <li><a href="checkpassengers_admin.php">Check Passenger</a></li>
                <li><a href="cancelledpassengers_admin.php">Cancelled Passengers</a></li>
                <li><a href="find_passengers_admin.html">Find Passenger</a></li>
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
        $cancel="delete from employee1 where ssn={$ssn}";
        $mysqli->query($cancel);
        echo '<h2> Employee Removed Successfully!';
	}
	else 
	{
        header("location: remove_employee.php");
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
