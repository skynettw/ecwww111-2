<?php
include "bootstrap.php";
include "database.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<div class="container">
  <h1 class="alert alert-warning">班級健康管理</h1>
  <?php include "header.php"; ?>
  <form action="add.php" method="POST">
    姓名：<input type=text name=name size=10 required><br>
    身高：<input type=text name=height size=5 required>公分<br>
    體重：<input type=text name=weight size=5 required>公斤<br>
    <input type=submit value="新增">
  </form>
  <hr>
  <?php
  $sql = "SELECT * FROM bodyinfo order by h desc";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table class='table table-striped'>";
    echo "<tr><td>編號</td><td>姓名</td><td>身高</td><td>體重</td><td>管理</td></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>" .
        "<td>" . $row["name"] . "</td>" .
        "<td>" . $row["h"] . "</td>" .
        "<td>" . $row["w"] . "</td>" .
        "<td><a href='del.php?id="
        . $row["id"] . "' class='btn btn-outline-danger btn-sm'>刪除</a></td>" .
        "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
</div>
<?php include "footer.php"; ?>