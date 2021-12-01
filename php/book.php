<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ticket Booking Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
    <link rel="stylesheet" href="../css/book.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body class="bg">
    <div class="admin_log">
        <div id="logout" class="admin_block u_p">
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
                <li><a href="#">Book Ticket</a></li>
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
    <div>
    <div class="testbox">
      <form action="booking.php" method="post">
        <h1>Ticket Booking Form</h1>
        <div class="item">
          <p>Your name</p>
          <div>
            <input type="text" name="fname" placeholder="First" required/>
            <input type="text" name="m" placeholder="Middle"/>
            <input type="text" name="lname" placeholder="Last" required/>
          </div>
        </div>
        <div class="item">
          <p>Passport Number</p>
          <input type="text" name="passportno" required/>
        </div>
          <div class="item">
          <p>Age</p>
          <input type="number" name="age" min="1" max="200" required/>
          </div>
        <div class="item">
          <p>Sex</p>
          <select name="sex" required>
            <option value="M">Male</option>
            <option value="F">Female</option>
            </select>
          </div>
        <div class="item">
          <p>Date of Departure</p>
          <input type="date" name="date_of_departure" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <p>Select your flight</p>
          <select name="flight" required>
            <option value="">*Please select*</option>
            <option value="9W2334">Houston to Delhi</option>
            <option value="AA4367">San Fransisco to Frankfurt</option>
            <option value="AI2014">Bombay to Fort Worth</option>
            <option value="BA1689">Frankfurt to Delhi</option>
            <option value="BA3056">Bombay to Fortworth</option>
            <option value="EK3456">Bombay to San Fransisco</option>
            <option value="EY1234">New York to Tampa</option>
            <option value="LH9876">New York to Bombay</option>
            <option value="QR1902">Chandigarh to Houston</option>
            <option value="QR2305">Bombay to Fort Worth</option>
          </select>
          </div>
          <div class="item">
          <p>Select your Class</p>
          <select name="class" required>
            <option value="">*Please select*</option>
            <option value="FIRST-CLASS">FIRST-CLASS</option>
            <option value="BUSINESS">Business</option>
            <option value="ECONOMY">Economy</option>
            
          </select>
        </div>
        <div class="item" required>
          <p>Employee SSN</p>
          <input type="text" name="ssn" required>
        </div>
        <div class="item">
          <p>Address</p>
          <textarea rows="5" name="address" required></textarea>
        </div>
        <div class="item">
          <p>Phone Number</p>
          <textarea rows="2" name="phone" required></textarea>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">SUBMIT</button>
        </div>
      </form>
    </div>
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