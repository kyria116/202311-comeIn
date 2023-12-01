<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/reserve.css">
</head>

<body class="lang_tw" data-menu="5">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main class="detail">
        <div class="kv_banner">
            <img src="dist/images/kv/reserve.jpg" class="pc">
            <img src="dist/images/kv/reserve_mo.jpg" class="mo">
            <div class="txt">
                <div class="subtitle">ONLINE APPOINTMENT</div>
                <div class="title">線上預約</div>
            </div>
        </div>
        <div class="personInfo_online">
            <div class="container">
                <div class="breadCrumbs">
                    <a href="reserve-information.php">預約填寫資料</a>
                    <i></i>
                    <span>線上預約</span>
                </div>
                <div class="online_choose">
                    <div>
                        <div class="title">請選擇您的預約方式 </div>
                        <ul>
                            <li>
                                <a href="javascript:;">
                                    <div class="img"><img src="dist/images/onlineIcon_1.png"></div>
                                    <div class="txt">依院所</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="img"><img src="dist/images/onlineIcon_2.png"></div>
                                    <div class="txt">依醫生</div>
                                </a>
                            </li>
                        </ul>
                        <select name="" id="select_1">
                            <option value="0">全部診所</option>
                            <option value="1">晴天診所</option>
                            <option value="2">天晴診所</option>
                        </select>
                        <select name="" id="select_2">
                            <option value="0">全部醫生</option>
                            <option value="1">郭怡君</option>
                            <option value="2">郭怡君</option>
                        </select>
                    </div>
                </div>
                <div class="listBox">
                    <div class="title">2023/5/22 - 2023/5/27</div>
                    <table></table>
                </div>
                <div class="linkTelBox">
                    <a href="tel:0287716545" class="linkTel">
                        <div class="leftBox">
                            <div class="title">若初診預約仍有疑問者</div>
                            <div class="subtitle">請致電至院所，將由專人協助預約</div>
                        </div>
                        <div class="rightBox">
                            <div class="img"></div>
                            <div class="tel">02 8771 6545</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
        include "quote/template/cookies.php";
    ?>
    <script src="dist/js/main.js"></script>     
</body>

</html>