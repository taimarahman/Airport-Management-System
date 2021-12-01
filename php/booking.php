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
                <li><a href="flights.php">Check Flight</a></li>
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
    <div class="main_content fp">
<h1>Thanks for Booking</h1>
<h2>INFORMATION</h2>
<?php
$username = "root";
$password = "";
$database = "airportx";
 
$mysqli = new mysqli("localhost", $username, $password, $database);
 
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
 
echo "First Name: ".$field1 = $mysqli->real_escape_string($_POST['fname']);
    echo "<br>";
echo "Middle Name: ".$field11 = $mysqli->real_escape_string($_POST['m']);
    echo "<br>";
echo "Last Name: ".$field2 = $mysqli->real_escape_string($_POST['lname']);
    echo "<br>";
echo "Passport No: ".$field3 = $mysqli->real_escape_string($_POST['passportno']);
    echo "<br>";
echo "Phone No: ".$field9 = $mysqli->real_escape_string($_POST['phone']);
    echo "<br>";
echo "Age: ".$field10 = $mysqli->real_escape_string($_POST['age']);
    echo "<br>";
echo "Sex: ".$field12 = $mysqli->real_escape_string($_POST['sex']);
    echo "<br>";
echo "Date of Booking: ".$date=date("Y-m-d");
    echo "<br>";
echo "Date of Departure: ".$field4 = $mysqli->real_escape_string($_POST['date_of_departure']);
    echo "<br>";
echo "Address: ".$field8 = $mysqli->real_escape_string($_POST['address']);
    echo "<br>";
echo "Flight Code: ".$field5 = $mysqli->real_escape_string($_POST['flight']);
    echo "<br>";
echo "Flight CLass: ".$field6 = $mysqli->real_escape_string($_POST['class']);
    echo "<br>";
echo "Employee SSN: ".$field7 = $mysqli->real_escape_string($_POST['ssn']);
    echo "<br>";
$price="select price from price where class ='{$field6}'";
$result13=$mysqli->query($price);
$row6 = $result13->fetch_assoc();
$tprice=$row6['price'];
echo "Ticket Price: ".$tprice;

$query1="select max(pid) from passenger1";
$result=$mysqli->query($query1);
$row = $result->fetch_assoc();
$pid=$row['max(pid)'];
$pid++;
$pid;
echo "<br>";
$passenger1="INSERT INTO passenger1 values({$pid},'{$field3}')";
$mysqli->query($passenger1);
echo "<br>";
$passenger2="INSERT INTO PASSENGER2(PASSPORTNO,FNAME,M,LNAME,ADDRESS,PHONE,AGE,SEX)
VALUES('{$field3}','{$field1}','{$field11}','{$field2}','{$field8}','{$field9}',{$field10},'{$field12}')";
$mysqli->query($passenger2);
$passenger3="INSERT INTO PASSENGER3(pid,flight_code) values({$pid},'{$field5}')";
echo "<br>";
$mysqli->query($passenger3);
$query2="select max(ticket_number) from ticket1";
$result2=$mysqli->query($query2);
$row2 = $result2->fetch_assoc();
$tn=$row2['max(ticket_number)'];
$tn++;
echo "<br>";
$query3="select source,destination from flight where flight_code='{$field5}'";
$result3=$mysqli->query($query3);
$row3=$result3->fetch_assoc();
$source=$row3['source'];
$destination=$row3['destination'];
$ticket1="INSERT INTO ticket1(ticket_number,source,destination,date_of_booking,date_of_travel,class,date_of_cancellation,pid,passportno) values({$tn},'{$source}','{$destination}','{$date}','{$field4}','{$field6}','',{$pid},'${field3}')";
$mysqli->query($ticket1);
$mysqli->close();
?>
        <a href="book.php.php" class="button">Book another ticket</a><br>
        <a href="welcome.php" class="button">Return to Main Page</a>
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