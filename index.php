<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Status</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<div class="container">

<h2>Student Status System</h2>

<form action="insert.php" method="POST">

<input type="text" name="name" placeholder="Enter Name" required>

<input type="number" name="age" placeholder="Enter Age" required>

<button type="submit">Submit</button>

</form>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php

$sql="SELECT * FROM users";
$result=$conn->query($sql);

while($row=$result->fetch_assoc())
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['age']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<form action="toggle.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<button class="toggle">Toggle</button>

</form>

</td>

</tr>

<?php
}
?>

</table>

</div>

