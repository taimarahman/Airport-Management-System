<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="../css/welcome_admin.css">
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
        <div class="title">
            <h1>Airport Management System</h1>
        </div>

        <div class="main_content">
            <div class="row">
                <div class="col">
                    <div class="content">
                        <a href="employee.php"><i class="fas fa-user-tie"></i></a>
                        <a href="employee.php">Employee</a>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <a href="passenger_admin.php"><i class="fas fa-users"></i></a>
                        <a href="passenger_admin.php">Passenger</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/6756dd734e.js" crossorigin="anonymous"></script>
        <script>
            document.getElementById("logout").addEventListener("click", function(){
                document.querySelector(".admin_block2").style.display = "block";
            })
        </script>
        
    </body>

    
</html>



<!-- <!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8"/>
		<title>Making Menu</title>
		
		<link rel="stylesheet" href="style.css"/>
		
	</head>
	<body>
		
		
		
	</body>
</html> -->