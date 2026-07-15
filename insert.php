<?php

include 'config.php';

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO users(name, age, status)
VALUES('$name', '$age', 0)";

if($conn->query($sql) === TRUE)
{
    header("Location: index.php");
}
else
{
    echo "Error: " . $conn->error;
}

$conn->close();

?>
