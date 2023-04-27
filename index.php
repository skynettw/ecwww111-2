<?php 
  // 以下是密碼檢查的程式碼 
  $account = $_POST["account"];
  $password = $_POST["password"];
  if ($account!="" && $password!="") {
    echo $account . "/" . $password . "<br>";
  }
?>
<?php include "bootstrap.php" ?>
<title>何敏煌的入口網站</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to my website!</h1>
        <?php include "header.php"; ?>
<form action="index.php" method="POST">
帳號：<input type=text size=10 name="account"><br>
密碼：<input type=password size=10 name="password"><br>
<input type=submit value="登入">
<input type=reset value="清除">
</form>
        
    </div>
<?php include "footer.php" ?>