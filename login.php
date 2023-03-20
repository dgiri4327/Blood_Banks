<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "life-care";

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT * FROM `user` WHERE email='".$_POST['email']."' AND u_password='" . $_POST['u_password'] . "'";
 $result = mysqli_query($conn, $sql) or die(mysql_error());
 $rows = mysqli_num_rows($result);

if ($rows >= 1) {
  echo "Login successfully";
} else {
  echo "Loagin Failed: " ;
}

          header("Location: HOME.html");
        
    
            ?>
