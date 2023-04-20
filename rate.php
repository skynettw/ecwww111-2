<?php include "bootstrap.php" ?>
<title>匯率換算</title>
</head>

<body>
    <div class="container">
        <h1>匯率換算</h1>
        <?php include "header.php"; ?>
        <form action="rate.php" method=POST>
            新台幣：<input type=text size=10 name=ntd>元
            <input type=submit value="開始轉換成美金">
        </form>
        <?php

        $NTD = $_POST["ntd"];
        if ($NTD == 0 || $NTD == "") {
            $NTD = 10000;
        }
        $USD = $NTD * 0.033;
        echo "新台幣" . $NTD . "元換成美金是" . $USD . "元";
        ?>
    </div>
    <?php include "footer.php" ?>
</body>

</html>