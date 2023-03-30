<!DOCTYPE html>
<html>
<head>
<title>匯率換算</title>
</head>
<body>

<h1>匯率換算</h1>
<hr>
<a href="/ecwww111-2/">回首頁</a>
<a href="https://www.ccet.nkust.edu.tw">不分系</a>
<a href="rate.php">匯率換算</a>
<a href="bmi.php">BMI計算</a>
<hr>
<form action="rate.php" method=POST>
    新台幣：<input type=text size=10 name=ntd>元
    <input type=submit value="開始轉換成美金">
</form>
<?php
    
    $NTD = $_POST["ntd"];
    if ($NTD==0 || $NTD=="") {
        $NTD = 10000;
    }
    $USD = $NTD * 0.033;
    echo "新台幣" . $NTD . "元換成美金是" . $USD . "元";
?>

</body>
</html>
