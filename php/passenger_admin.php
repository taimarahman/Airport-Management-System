<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <link rel="stylesheet" href="../css/welcome_admin.css">
    <!-- <link rel="stylesheet" href="../css/employee.css"> -->
    <!-- <link rel="stylesheet" href="../css/menu.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    
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
            <a href="welcome_admin.php"><i class="fas fa-arrow-left"></i></a>
        </div>
        
        <div class="title">
            <h1>Airport Management System</h1>
        </div>

        <div class="main_content" style="text-align:center;">
            <div>
                <h2 class="heading">Passenger</h2>
            </div>
            <div class="row">
                <div class="col" id="col3">
                    <div class="content">
                        <a href="checkpassengers_admin.php"><i class="fas fa-user-friends icon_t"></i></a>
                        <a href="checkpassengers_admin.php">Check<br>Passengers</a>
                    </div>
                </div>
                <div class="col" id="col3">
                    <div class="content">
                        <a href="cancelledpassengers_admin.php"><i class="fas fa-users-slash icon_t"></i></a>
                        <a href="cancelledpassengers_admin.php">Cancelled Passengers</a>
                    </div>
                </div>
                <div class="col" id="col3">
                    <div class="content">
                        <a href="find_passenger_admin.php"><i class="fas fa-search icon_t"></i></a>
                        <a href="find_passenger_admin.php">Find<br>Passenger</a>
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
        
    </body>

    
</html>

