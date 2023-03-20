<?php 
if (empty($_POST)) {
header("location:index.html");
exit();
}
$error = array();
if (empty($_POST['u_name'])) {
$error[] = "Name is empty";
}
if (empty($_POST['email'])) {
$error[] = "Email is empty";
}
if (empty($_POST['mobile'])) {
$error[] = "Mobile number is empty";
}
if (empty($_POST['DOB'])) {
    $error[] = "Date of Birth is empty";
}
if (empty($_POST['gender'])) {
    $error[] = "Please select the gender ";
}
if(!empty($error)){
echo "Error messages"."<hr>";
foreach ($error as $e) {
echo $e."<br>";
}
exit();
}
//database connectivity
require_once('DB_Connection.php');
$sql = "UPDATE user SET U_Name='".$_POST['u_name']."', Email='".$_POST['email']."', Mobile='".$_POST['mobile']."', DOB='".$_POST['DOB']."', Gender='".$_POST['gender']."', Password='".$_POST['u_password']."' WHERE id =".$_POST['id'];

if(mysqli_query($conn,$sql)){
echo "updated table successfully";
}else{
echo "error in updating table".mysqli_connect_error($conn);
}
header("location:selectAll.php");
mysqli_close($conn); 
?>