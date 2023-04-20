<?php
include("database.php");

$name = $_POST["name"];
$h = $_POST["height"];
$w = $_POST["weight"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bodyinfo (name, h, w) VALUES ('" .
  $name . "'," . $h . "," . $w . ")";

$conn->query($sql);
$conn->close();
header("Location: bodyinfo.php");
