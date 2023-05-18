<?php
session_start();
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
    <h1 class="alert alert-warning">直播新聞台資料編輯</h1>
    <?php include "header.php"; ?>
    <?php if ($_SESSION["user"] == "administrator") {
    ?>
        <form action="addtv.php" method="POST">
            新聞台名稱：<input type=text name=title size=50 required><br>
            新聞台的vid：<input type=text name=vid size=10 required><br>
            <input type=submit value="新增">
        </form>
    <?php } ?>
    <hr>
    <?php
    $sql = "SELECT * FROM tvinfo;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-striped'>";
        echo "<tr><td>編號</td><td>電視台名稱</td><td>VID</td><td>管理</td></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>" .
                "<td>" . $row["title"] . "</td>" .
                "<td>" . $row["vid"] . "</td>";

            if ($_SESSION["user"] == "administrator") {
                echo "<td><a href='deltv.php?id="
                    . $row["id"] . "' class='btn btn-outline-danger btn-sm'>刪除</a></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>
<?php include "footer.php"; ?>