<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Find Passenger</title>
	<!--Font Awesome Icons-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cancel.css">
    <link rel="stylesheet" href="../css/menu.css">
    
</head>
<body class="bg">
    <div class="admin_log">
        <div  id="logout" class="admin_block">
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
                <li><a href="cancelledpassengers_admin.php">Cancelled Passengers</a></li>
                <li><a href="#">Find Passenger</a></li>
            </ul>
        </li>
    </ul>

    <div class="main_content">
        <h2>Find Passenger</h2>
    </div>    
    <div class="testbox">
        <form action="findpassenger_info_admin.php" method="post">
            <p>Passenger Ticket Number</p>
            <input type="number" name="ticket_number" id="f_pass"required>
            <span id="validity"></span>
            <button type="submit" href="/">SUBMIT</button>
        </form>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://kit.fontawesome.com/6756dd734e.js" crossorigin="anonymous"></script>
    <script>
        document.getElementById("logout").addEventListener("click", function(){
            document.querySelector(".admin_block2").style.display = "block";
            document.querySelector(".admin_block3").style.display = "block";
        })

        $(document).ready(function() {
            $('#f_pass').blur(function() {
                var n = $(this).val();
                var f_pass = n.toString();
                $.ajax({
                    url: "check.php",
                    method: "POST",
                    data: {find_pass:f_pass},
                    dataType: "text",
                    success: function(html)
                    {
                    $("#validity").html(html)
                    }
                });
            });
        });
    </script>
</body>
</html>