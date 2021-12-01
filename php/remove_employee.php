<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cancel Ticket</title>
	<!--Font Awesome Icons-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
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
        <li><a href="#">Passenger</a>
            <ul>
                <li><a href="checkpassengers_admin.php">Check Passenger</a></li>
                <li><a href="cancelledpassengers_admin.php">Cancelled Passengers</a></li>
                <li><a href="find_passenger_admin.php">Find Passenger</a></li>
            </ul>
        </li>
    </ul>
    <!-- <header>    
        <ul class="nav-wrap">
			<li id="logo">AIRPORT MANAGEMENT</li>
			 <nav>
				<li><a href="welcome.html" class="active">Home</a></li>
				<li><a href="php/logout.php">SIGN OUT</a></li>
			 </nav>
        </ul>
    </header> -->

    <div class="main_content">
        <h2>Remove Employee</h2>
    </div>    
    <div class="testbox">
        <form action="removeemployee.php" method="post">
            <p>Employee SSN</p>
            <input type="number" name="ssn" id="em_ssn" required/>
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
            $('#em_ssn').blur(function() {
                var n = $(this).val();
                var em_ssn = n.toString();
                $.ajax({
                    url: "check.php",
                    method: "POST",
                    data: {remove_em:em_ssn},
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