<?php 
  session_start();
  // 以下是密碼檢查的程式碼 
  $account = $_POST["account"];
  $password = $_POST["password"];
  if ($account!="" && $password!="") {
    if ($account=="minhuang" && $password=="1234")
    {
        $_SESSION["user"] = "administrator";
    }
  }
?>
<?php include "bootstrap.php" ?>
<title>何敏煌的入口網站</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to my website!</h1>
        <?php include "header.php"; ?>
<?php
  if ($_SESSION["user"] !="administrator") {
?>
<form action="index.php" method="POST">
帳號：<input type=text size=10 name="account"><br>
密碼：<input type=password size=10 name="password"><br>
<input type=submit value="登入">
<input type=reset value="清除">
</form>
<?php
  } else {
    echo '<a href="logout.php" class="btn btn-danger">登出</a>';
  }
?>      
    </div>
<?php include "footer.php" ?>