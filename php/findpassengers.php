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
        <a href="passenger.php"><i class="fas fa-arrow-left"></i></a>
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
        <?php
        $username = "root";
        $password = "";
        $database = "airportx";
        
        $mysqli = new mysqli("localhost", $username, $password, $database);
        $ticket_number= $mysqli->real_escape_string($_POST['ticket_number']);
        $sql="SELECT*FROM ticket1 natural inner join passenger2 WHERE ticket_number={$ticket_number}";
        $result = $mysqli->query($sql);
        $count= mysqli_num_rows($result);
        if($count==1)
            {
                echo '<h2> Passenger Data </h2>';
                $row=$result->fetch_assoc();
                echo "Passport No: ".$row['passportno'];
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
                    echo "Age: ".$row['age'];
                    echo "<br>";
                    echo "Sex: ".$row['sex'];
                    echo "<br>";
                    echo "Ticket No: ".$row['TICKET_NUMBER'];
                    echo "<br>";
                    echo "Source: ".$row['SOURCE'];
                    echo "<br>";
                    echo "Destination: ".$row['DESTINATION'];
                    echo "<br>";
                    echo "Date of Booking: ".$row['DATE_OF_BOOKING'];
                    echo "<br>";
                    echo "Date of Travel: ".$row['DATE_OF_TRAVEL'];
                    echo "<br>";
                    echo "Class: ".$row['CLASS'];
                    echo "<br>";
                    if($row['DATE_OF_CANCELLATION']!="0000-00-00")
                    {
                        echo "Date of Cancellation: ".$row['DATE_OF_CANCELLATION'];
                    echo "<br>";
                    };
                    echo "Passport ID: ".$row['PID'];
                    echo "<br>";
            }
            else 
            {
                header("location: find_passenger.php");
            }
        ?>
        <script src="https://kit.fontawesome.com/6756dd734e.js" crossorigin="anonymous"></script>
        <script>
            document.getElementById("logout").addEventListener("click", function(){
                document.querySelector(".admin_block2").style.display = "block";
                document.querySelector(".admin_block3").style.display = "block";
            })
        </script>
    </div>
    </body>
</html>
