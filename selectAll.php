
<?php

require_once('DB_Connection.php');

$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);

?>
<h2>Browse Users</h2>
<hr>
<table border="1">
<tr>
<td>id</td>
<td>User_Name</td>
<td>Email</td>
<td>Mobile No</td>
<td>Date of birth</td>
<td>Gender</td>
<td colspan="2">operations</td>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '
<tr>
<td>'.$row['id'].'</td>
<td>'.$row['u_name'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['mobile'].'</td>
<td>'.$row['DOB'].'</td>
<td>'.$row['gender'].'</td>

<td><a href="edit.php?id='.$row['id'].'">Edit</a></td>
<td><a href="delete.php?id='.$row['id'].'">Delete</a></td>
</tr>
';
}
?>
</table>

