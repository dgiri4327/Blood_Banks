
<?php

require_once('DB_Connection.php');

$sql = "SELECT * FROM users where firstname='".$_GET['txtsearch']."'";
$result = mysqli_query($conn,$sql);

?>
<h2>Browse Users</h2>
<hr>
<table border="1">
<tr>
<td>User ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td colspan="2">operations</td>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
echo '
<tr>
<td>'.$row['uid'].'</td>
<td>'.$row['firstname'].'</td>
<td>'.$row['lastname'].'</td>
<td>'.$row['email'].'</td>
<td><a href="edit.php?uid='.$row['uid'].'">Edit</a></td>
<td><a href="delete.php?uid='.$row['uid'].'">Delete</a></td>
</tr>
';
}
?>
</table>


