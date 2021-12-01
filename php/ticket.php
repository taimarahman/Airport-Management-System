<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <link rel="stylesheet" href="../css/welcome.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    
</head>
    <body class="bg">
        <div>
            <div>
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
            </div>

        <div class="back">
            <a href="welcome.php"><i class="fas fa-arrow-left"></i></a>
        </div>
        
        <div class="title">
            <h1>Airport Management System</h1>
            
        </div>

        <div class="main_content">
            <div>
                <h2 class="heading">Ticket</h2>
            </div>
            <div class="row">
                <div class="col" id="col3">
                    <div class="content">
                        <a href="book.php"><i class="fas fa-ticket-alt icon_t"></i></a>
                        <a href="book.php">Book Ticket</a>
                    </div>
                </div>
                <div class="col" id="col3">
                    <div class="content">
                        <a href="cancel_ticket.php"><i class="fas fa-times-circle icon_t"></i></a>
                        <a href="cancel_ticket.php">Cancel Ticket</a>
                    </div>
                </div>
                <div class="col" id="col3">
                    <div class="content">
                        <a href="flights.php"><i class="fas fa-plane-departure icon_t"></i></a>
                        <a href="flights.php">Check Flight</a>
                    </div>
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
        </div>        
    </body>

    
</html>

