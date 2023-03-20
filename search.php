
<?php

require_once('DB_Connection.php');

$sql = "SELECT * FROM user where u_name='".$_GET['txtsearch']."'";
$result = mysqli_query($conn,$sql);

?>
<h2>Browse Users</h2>
<hr>
<table border="1">
<tr>
<td>User ID</td>
<td>Name</td>
<td>Email</td>
<td>Mobile</td>
<td>DOB</td>
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
<td><a href="edit.php?uid='.$row['id'].'">Edit</a></td>
<td><a href="delete.php?uid='.$row['id'].'">Delete</a></td>
</tr>
';
}
?>
</table>


