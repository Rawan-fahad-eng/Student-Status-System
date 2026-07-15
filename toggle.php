<?php

include 'config.php';

$id = $_POST['id'];

$sql = "UPDATE users
SET status = IF(status=0,1,0)
WHERE id=$id";

$conn->query($sql);

$sql="SELECT status FROM users WHERE id=$id";
$result=$conn->query($sql);

$row=$result->fetch_assoc();

echo $row['status'];

$conn->close();

?>
