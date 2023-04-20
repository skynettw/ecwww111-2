<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "mydb";

    $id = $_GET["id"];
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM bodyinfo WHERE id=$id";

$conn->query($sql);
$conn->close();
header("Location: bodyinfo.php");
