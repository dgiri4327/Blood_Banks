<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "life-care";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
//exit;
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// echo 
$sql = "INSERT INTO user(u_name, email, mobile, DOB, gender, u_password)
VALUES ('".$_POST['u_name']."', '".$_POST['email']."', '".$_POST['mobile']."','".$_POST['DOB']."','".$_POST['gender']."', '".$_POST['u_password']."')";
//exit;
//echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>