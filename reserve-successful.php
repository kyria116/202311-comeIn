<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/reserve.css">
</head>

<body class="lang_tw" data-menu="5">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv_banner">
            <img src="dist/images/kv/reserve.jpg" class="pc">
            <img src="dist/images/kv/reserve_mo.jpg" class="mo">
            <div class="txt">
                <div class="subtitle">ONLINE APPOINTMENT</div>
                <div class="title">線上預約</div>
            </div>
        </div>
        <div class="successful">
            <div class="container">
                <div class="breadCrumbs">
                    <a href="reserve-information.php">預約填寫資料</a>
                    <i></i>
                    <a href="reserve-online.php">線上預約</a>
                    <i></i>
                    <span>預約完成</span>
                </div>
                <div class="finishBox">
                    <div class="titleTop">
                        <img src="dist/images/icon.png">
                        <span>預約完成</span>
                    </div>
                    <div class="containBox">
                        <div class="topBox">
                            郭怡君您好，您已完成預約，您可於LINE下方選單查詢當診看診進度
                        </div>
                        <div class="bottomBox">
                            <div class="editor_Content">
                                <div class="editor_box pc_use">
                                    <p>貼心pcpcpcpcpcpcppcpcpc</p>
                                    <ul>
                                        <li>初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診</li>
                                        <li>初診</li>
                                        <li>初診</li>
                                        <li>初診</li>
                                    </ul>
                                </div>
                                <div class="editor_box mo_use">
                                    <p>貼心momomomomomomom</p>   
                                    <ul>
                                        <li>初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診初診</li>
                                        <li>初診</li>
                                        <li>初診</li>
                                        <li>初診</li>
                                    </ul>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="appInfor">
                    <div class="en_title">Appointment information</div>
                    <div class="tw_title">預約資訊</div>
                    <ul>
                        <li>
                            <div class="m_title">登記日期</div>
                            <div class="m_info">2023/05/15</div>
                        </li>
                        <li>
                            <div class="m_title">看診日期</div>
                            <div class="m_info">2023/05/15</div>
                        </li>
                        <li>
                            <div class="m_title">看診時段</div>
                            <div class="m_info">2023/05/15</div>
                        </li>
                        <li>
                            <div class="m_title">序號</div>
                            <div class="m_info">2023/05/15</div>
                        </li>
                        <li>
                            <div class="m_title">院所</div>
                            <div class="m_info">2023/05/15</div>
                        </li>
                        <li>
                            <div class="m_title">醫師</div>
                            <div class="m_info">郭怡君</div>
                        </li>
                    </ul>
                    <div class="btnBox">
                        <a href="reserve-search.php" class="btn_blue">
                            查詢預約
                            <div class="arrow"></div>
                        </a>
                        <a href="javascript:;" target="_blank" class="btn_blue">
                            加入康迎LINE @
                            <div class="arrow"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="contactBox">
                <a href="javascript:;">
                    <div class="container">
                        <div class="txtBox">
                            <div class="img">
                                <img src="dist/images/telIcon.png">
                            </div>
                            <div class="txt">
                                <div class="contactTitle">聯絡我們</div>
                                <div class="contactSubtitle">如有任何疑問也歡迎來電諮詢</div>
                            </div>
                        </div>
                    </div>
                </a>
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