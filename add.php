<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "mydb";

$name = $_POST["name"];
$h = $_POST["height"];
$w = $_POST["weight"];

if ($name=="" || $h=="" || $w=="") {
    die("你要輸入資料才行！");
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bodyinfo (name, h, w) VALUES ('" . 
      $name . "'," . $h . "," . $w . ")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>