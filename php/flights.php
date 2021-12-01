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
        <div  id="logout" class="admin_block user">
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
        <a href="ticket.php"><i class="fas fa-arrow-left"></i></a>
    </div>
        
    <div class="title">
        <h1>Airport Management System</h1>
    </div>

    <ul id="menu">
        <li><a href="welcome.php">Home</a></li>
        <li><a href="ticket.php">Tickets</a>
            <ul>
                <li><a href="book.php">Book Ticket</a></li>
                <li><a href="cancel_ticket.php">Cancel Ticket</a></li>
                <li><a href="#">Check Flight</a></li>
            </ul>
        </li>
        <li><a href="passenger.php">Passenger</a>
            <ul>
                <li><a href="checkpassengers.php">Check Passenger</a></li>
                <li><a href="cancelledpassengers.php">Cancelled Passengers</a></li>
                <li><a href="find_passenger.php">Find Passenger</a></li>
            </ul>
        </li>
	</ul>
<div class="main_content cp">
<h1>Data of Flights</h1>
<table>
<tr>
<th>Flight Code</th>
<th>Source</th>
<th>Destination</th>
<th>Arrival</th>
<th>Departure</th>
<th>Duration</th>
<th>Layover Time</th>
<th>No of Stops</th>
<th>Flight Type</th>
<th>Airline Name</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "airportx");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT flight_code,source,destination,arrival,departure, duration, layover_time, no_of_stops,flighttype,al_name FROM flight NATURAL INNER join airline";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>". $row["flight_code"]."</td><td>". $row["source"]."</td><td>" . $row["destination"]."</td><td>" . $row["arrival"] . "</td><td>". $row["departure"]."</td><td>". $row["duration"]."</td><td>". $row["layover_time"]."</td><td>". $row["no_of_stops"]."</td><td>". $row["flighttype"]."</td><td>". $row["al_name"]."</td></tr>";
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