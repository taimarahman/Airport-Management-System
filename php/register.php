<?php
$username = "root";
$password = "";
$database = "airportx";
 
$conn = new mysqli("localhost", $username, $password, $database);

function function_alert($message) { 
    echo "<script>alert('$message');</script>"; 
}  
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 

    $myssn=addslashes($_POST['ssn']);
	$myusername=addslashes($_POST['username']); 
    $mypassword=addslashes($_POST['password']); 

    $sql = "SELECT * FROM employee1 WHERE ssn = '$myssn'";
    $valid = $conn->query($sql);

    $sql = "SELECT * FROM users WHERE ssn = '$myssn'";
    $exist = $conn->query($sql);

    // $sql = "SELECT * FROM users WHERE username = '$myusername'";
    // $duplicate = $conn->query($sql);
    

    if ($myusername!='' && $mypassword!=''){
        if ($valid->num_rows == 1) {

            if ($exist->num_rows == 0){
                $sql = "INSERT INTO users(username,password,ssn) VALUES('$myusername','$mypassword','$myssn');";
                $conn->query($sql);

                $sql="SELECT*FROM users WHERE username='$myusername' and password ='$mypassword'";
                $result = mysqli_query($conn, $sql);

                $count= mysqli_num_rows($result);

                echo $count;
                if($count==1)
                {
                    session_start();
                    $_SESSION['login_user']=$myusername;
                    $_SESSION['ssn']=$myssn;

                    header("location: welcome.php");
                }
                else 
                {
                    header("location: ../index.html");
                }

            }
            else {
                header("location: ../index.html");
            //     echo "<script>
            // alert('Account already exist. Please try log in.');
            // window.location.href='../index.html';
            // </script>";
            } 
            
        }

        else {
            header("location: ../index.html");
            // echo "<script>
            // alert('Employee SSN Invalid\\nRegistration incomplete.');
            // window.location.href='../index.html';
            // </script>";
        }
        
	// If result matched $myusername and $mypassword, table row must be 1 row
	    
    }
    else {
        header("location: ../index.html");
        // echo "<script>
        
        // alert('Information missing\\nRegistration incomplete.');
        // window.location.href='../index.html';
        // </script>";
        // echo '<script language="javascript">';
        // echo 'alert("message successfully sent")';
        // echo '</script>';
        // header("location: ../index.html");
        // echo '<script>alert("Information missing")</script>';
        // redirect("../index.html")

    }
    

	
}
?>
