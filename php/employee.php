<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee</title>
    <link rel="stylesheet" href="../css/employee.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
    <body class="bg">
        <div>
            <div class="admin_log">
                <div  id="logout" class="admin_block" >
                    <img src="../img/admin.png" alt="" class="admin_icon">
                    <a href="#" class="admin"><?php echo $_SESSION['login_user']; ?></a>
                </div>
                <div class="admin_block2">
                <a href="logout.php" class="admin" style="font-size: 16px">Logout</a>
                </div>
            </div>
        </div>
        <div class="back">
            <a href="welcome_admin.php"><i class="fas fa-arrow-left"></i></a>
        </div>
        
        <div class="title">
            <h1>Airport Management System</h1>
            
        </div>

        <div class="main_content">
            <div>
                <h2 class="heading">Employee</h2>
            </div>
            <div>
                <div class="col">
                    <div class="content">
                        <a href="checkemployee.php"><i class="fas fa-address-book icon_t"></i></a>
                        <a href="checkemployee.php">Check Employee Data</a>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <a href="add_employee.php"><i class="fas fa-user-plus icon_t"></i></i></a>
                        <a href="add_employee.php">Add Employee</a>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <a href="remove_employee.php"><i class="fas fa-user-minus icon_t"></i></a>
                        <a href="remove_employee.php">Remove Employee</a>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <a href="find_employee.php"><i class="fas fa-search icon_t"></i></a>
                        <a href="find_employee.php">Find Employee</a>
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