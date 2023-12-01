<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/physical.css">
</head>

<body class="lang_tw">
    <?php
    include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv_banner">
            <img src="dist/images/kv/physical.jpg" class="pc">
            <img src="dist/images/kv/physical_mo.jpg" class="mo">
            <div class="txt">
                <div class="subtitle">physical</div>
                <div class="title">自我檢測中心</div>
            </div>
        </div>
        <div class="physical">
            <div class="container">
                <ul>
                    <li>
                        <a href="physical-detail.php">
                            <img src="dist/images/physical/icon_1.png">
                            <div class="subtitle">檢測一</div>
                            <div class="title">我的憂鬱、低落、提不起勁，需要專業協助嗎?</div>
                        </a>
                    </li>
                    <li>
                    <a href="physical-detail.php">
                            <img src="dist/images/physical/icon_2.png">
                            <div class="subtitle">檢測二</div>
                            <div class="title">我常常感到焦慮、煩躁，需要尋求專業協助嗎?</div>
                        </a>
                    </li>
                    <li>
                    <a href="physical-detail.php">
                            <img src="dist/images/physical/icon_3.png">
                            <div class="subtitle">檢測三</div>
                            <div class="title">你最近，幸福嗎?</div>
                        </a>
                    </li>
                    <li>
                    <a href="physical-detail.php">
                            <img src="dist/images/physical/icon_4.png">
                            <div class="subtitle">檢測四</div>
                            <div class="title">瞭解你的心理復原力</div>
                        </a>
                    </li>
                    <li>
                    <a href="physical-detail.php">
                            <img src="dist/images/physical/icon_5.png">
                            <div class="subtitle">檢測五</div>
                            <div class="title">工作好累、沒有動力起床上班、覺得好沒成就感，我需要專業諮詢嗎?</div>
                        </a>
                    </li>
                    <li>
                    <a href="physical-detail.php">
                            <img src="dist/images/physical/icon_6.png">
                            <div class="subtitle">檢測六</div>
                            <div class="title">我有飲食失調嗎?</div>
                        </a>
                    </li>
                </ul>
            </div>

    </main>
    <?php
    include "quote/template/footer.php";
    include "quote/template/top_btn.php";
    include "quote/template/cookies.php";
    ?>
    <script src="dist/js/function.js"></script>
    <script src="dist/js/physical.js"></script>

</body>

</html>