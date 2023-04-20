<?php include "bootstrap.php" ?>
<title>BMI換算</title>
</head>

<body>
  <div class="container">
    <h1>BMI換算</h1>
    <?php include "header.php"; ?>
    <form action="bmi.php" method="POST">
      身高：<input type=text size=5 name="height">(公尺)<br>
      體重：<input type=text size=5 name="weight">(公斤)<br>
      <input type=submit value="計算BMI">
    </form>
    <?php
    $w = $_POST["weight"];
    $h = $_POST["height"];
    if ($w == 0 || $w == "") {
      $w = 60;
    }
    if ($h == 0 || $h == "") {
      $h = 1.74;
    }

    $bmi = round($w / $h ** 2, 2);
    echo "身高：" . $h . "公分，體重：" . $w . "公斤，則BMI是：" . $bmi;

    ?>
  </div>
  <?php include "footer.php" ?>
</body>

</html>