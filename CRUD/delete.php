<?php
if(!isset($_GET['uid']) || !ctype_digit($_GET['uid'])){
header("location:selectAll.php");
exit();
}

require_once('DB_Connection.php');

$sql = "DELETE FROM users WHERE uid ='".$_GET['uid']."'";

if(mysqli_query($conn,$sql)){
echo "deleted table successfully";
}else{
echo "error in deleting record".mysqli_connect_error($conn);
}
header("location:selectAll.php");
mysqli_close($conn);
?>
