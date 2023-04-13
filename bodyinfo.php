<h1>班級健康管理</h1>
<?php include "header.php"; ?>
<form action="add.php" method="POST">
    姓名：<input type=text name=name size=10><br>
    身高：<input type=text name=height size=5>公分<br>
    體重：<input type=text name=weight size=5>公斤<br>
    <input type=submit value="新增">
</form>
<?php include "footer.php"; ?>