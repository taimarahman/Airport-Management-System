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
        <div  id="logout" class="admin_block user" >
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
                <li><a href="#">Cancel Ticket</a></li>
                <li><a href="flights.php">Check Flight</a></li>
            </ul>
        </li>
        <li><a href="#">Passenger</a>
            <ul>
                <li><a href="checkpassengers.php">Check Passenger</a></li>
                <li><a href="cancelledpassengers.php">Cancelled Passengers</a></li>
                <li><a href="find_passenger.php">Find Passenger</a></li>
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
        <h2>Ticket Cancelation</h2>
    </div>    
    <div class="testbox">
        <form action="cancel.php" method="post">
            <p>Ticket Number</p>
            <input type="number" name="ticket_number" id="ticket"required>
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
            $('#ticket').blur(function() {
                var n = $(this).val();
                var t_num = n.toString();
                $.ajax({
                    url: "check.php",
                    method: "POST",
                    data: {ticket_num:t_num},
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