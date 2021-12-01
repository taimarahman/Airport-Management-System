<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Check Passenger Data</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
    <link rel="stylesheet" href="../css/cancel.css">
	<link rel="stylesheet" href="../css/menu.css">
	
	<style>
    table {
		border-collapse: collapse;
		width: 100%;
		color: #191919;
		font-family: 'Raleway', sans-serif;
		font-size: 16px;
		text-align: center;
		margin: 0 auto;
		box-sizing: border-box;
		}
		th {
		background-color: #191919;
		color: #f1f2f6;
		padding: 10px;
		}
		td{
			padding: 16px 8px;
		}
		tr:nth-child(even) {background-color: #f1f2f6}
		tr:nth-child(odd) {background-color: #f1f2f657}

</style>
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
        <a href="passenger_admin.php"><i class="fas fa-arrow-left"></i></a>
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
                <li><a href="#">Cancelled Passengers</a></li>
                <li><a href="find_passenger_admin.php">Find Passenger</a></li>
            </ul>
        </li>
	</ul>
<div class="main_content cp">
<h1>Data of Cancelled Tickets</h1>
<table>
<tr>
<th>Passport ID</th>
<th>Passport No</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Age</th>
<th>Sex</th>
<th>Ticket Number</th>
<th>Source</th>
<th>Destination</th>
<th>Date of Booking</th>
<th>Date of Cancellation</th>
<th>Class</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "airportx");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT pid,passportno,fname,m,lname,address,phone,age,sex,ticket_number,source,destination,date_of_booking as date,date_of_cancellation as cancel,class FROM passenger2 natural inner join ticket1 where DATE_OF_CANCELLATION!='0000-00-00'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>". $row["pid"]."</td><td>". $row["passportno"]."</td><td>" . $row["fname"]." ". $row["m"]." ".$row["lname"]."</td><td>" . $row["address"] . "</td><td>". $row["phone"]."</td><td>". $row["age"]."</td><td>". $row["sex"]."</td><td>". $row["ticket_number"]."</td><td>". $row["source"]."</td><td>". $row["destination"]."</td><td>". $row["date"]."</td><td>".$row["cancel"]."</td><td>".$row["class"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
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