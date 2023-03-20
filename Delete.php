<?php
if(!isset($_GET['id']) || !ctype_digit($_GET['id'])){
header("location:selectAll.php");
exit();
}

require_once('DB_Connection.php');

$sql = "DELETE FROM user WHERE id ='".$_GET['id']."'";

if(mysqli_query($conn,$sql)){
echo "deleted table successfully";
}else{
echo "error in deleting record".mysqli_connect_error($conn);
}
header("location:selectAll.php");
mysqli_close($conn);
?>
