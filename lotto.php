<?php include "bootstrap.php" ?>

<body>
    <div class="container">
        <h1>樂透號碼預測</h1>
        <?php include "header.php"; ?>
        <?php
        echo "本期樂透特別號預測：" . rand(1, 45);
        ?>
    </div>
    <?php include "footer.php" ?>