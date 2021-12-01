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
    <div>
    <div class="testbox">
      <form action="addemployee.php" method="post">
        <h1>New Employee Form</h1>
        <div class="item" required>
          <p>Employee SSN</p>
          <input type="text" name="ssn">
        </div>
        <div class="item">
          <p>Employee name</p>
          <div>
            <input type="text" name="fname" placeholder="First" required/>
            <input type="text" name="m" placeholder="Middle"/>
            <input type="text" name="lname" placeholder="Last" required/>
          </div>
        </div>
          <div class="item">
          <p>Employee Address</p>
              <textarea rows="5" name="address" placeholder="Address" required></textarea>
          </div>
          <div class="item">
          <p>Phone Number</p>
          <input type="text" name="phone" placeholder="Phone"required/>
        </div>
          <div class="item">
          <p>Email</p>
          <input type="email" name="email" placeholder="Email"required/>
        </div>
        <div class="item">
          <p>Select Division</p>
          <select name="jobtype" required>
            <option value="">*Please select*</option>
            <option value="ADMINISTRATIVE SUPPORT">ADMINISTRATIVE SUPPORT</option>
            <option value="TRAFFIC MONITOR">TRAFFIC MONITOR</option>
            <option value="AIRPORT AUTHORITY">AIRPORT AUTHORITY</option>
            <option value="ENGINEER">ENGINEER</option>
          </select>
          </div>
          <div class="item">
          <p>Age</p>
          <input type="number" name="age" min="18" max="100" required/>
          </div>
          <div class="item">
          <p>Sex</p>
          <select name="sex" required>
            <option value="M">Male</option>
            <option value="F">Female</option>
            </select>
          </div>
          <div class="item">
          <p>Select Employee Airport</p>
          <select name="ap_name" required>
            <option value="">*Please select*</option>
            <option value="Chandigarh International Airport">Chandigarh International Airport</option>
            <option value="Chhatrapati Shivaji International Airport">Chhatrapati Shivaji International Airport</option>
            <option value="Dallas/Fort Worth International Airport">Dallas/Fort Worth International Airport</option>
            <option value="Frankfurt Airport">Frankfurt Airport</option>
              <option value="George Bush Intercontinental Airport">George Bush Intercontinental Airport</option>
              <option value="Indira GandhiInternational Airport">Indira GandhiInternational Airport</option>
              <option value="John F. Kennedy International Airport">John F. Kennedy International Airport</option>
              <option value="Louisville International Airport">Louisville International Airport</option>
              <option value="San Francisco International Airport">San Francisco International Airport</option>
              <option value="Tampa International Airport">Tampa International Airport</option>
            
          </select>
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