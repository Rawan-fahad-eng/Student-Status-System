<?php
$host = "sql303.infinityfree.com";
$user = "if0_42416077";
$pass = "Rawan123123r";
$db = "if0_42416077_students";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
