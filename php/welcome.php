<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/welcome.css">
    <!-- <link rel="stylesheet" href="../css/menu.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body class="bg">

    <div class="admin_log">
        <div id="logout" class="admin_block user">
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
    
    <div class="title">
        <h1>Airport Management System</h1>
    </div>
    <div class="main_content">
        <div class="col">
            <div class="content">
                <a href="ticket.php"><i class="fas fa-ticket-alt"></i></a>
                <a href="ticket.php">Ticket</a>
            </div>
        </div>
        <div class="col">
            <div class="content">
                <a href="passenger.php"><i class="fas fa-users"></i></a>
                <a href="passenger.php">Passenger</a>
            </div>
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
