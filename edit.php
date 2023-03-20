<?php 
if(!isset($_GET['id']) || !ctype_digit($_GET['id'])){
header("location:index.html");
exit();
}
require_once('DB_Connection.php');
$sql = "SELECT * FROM user WHERE id =".$_GET['id'];
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Update</title>
</head>
<body>
<div>
<h2>Update Users</h2>
<hr>
<table>
<form action="process_edit_user.php" method="GET">
<tr>
<input type="hidden" name="id" value="<?php echo 
$_GET['id'];?>">
<td>
<label>U_Name : </label>
<input type="text" name="u_name" value="<?php echo 
$row["u_name"];?>">
</td>
</tr>
<tr>
<td>
<label>Email : </label>
<input type="email" name="email" value="<?php echo 
$row["email"];?>">
</td>
</tr>
<tr>
<td>
<label>Mobile : </label>
<input type="tel" name="mobile" value="<?php echo 
$row["mobile"];?>">
</td>
</tr>
<tr>
<td>
<label>DOB : </label>
<input type="date" name="DOB" value="<?php echo 
$row["DOB"];?>">
</td>
</tr>
<tr>
<td>
<label>Gender : </label>
<input type="radio" name="gender" value="<?php echo 
$row["gender"];?>">Male
<input type="radio" name="gender" value="<?php echo 
$row["gender"];?>">Female
</td>
</tr>
<tr>
<td>
<label>UPDATE : </label>
<input type="submit" name="submit" value=" save &rarr; ">
</td>
</tr>
</form>
</table>
</div>
</body>
</html>
