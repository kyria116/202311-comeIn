<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/reserve.css">
</head>

<body class="lang_tw" data-menu="5">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main class="reserveList">
        <div class="kv_banner">
            <img src="dist/images/kv/list.jpg" class="pc">
            <img src="dist/images/kv/list_mo.jpg" class="mo">
            <div class="txt">
                <div class="subtitle">LIST</div>
                <div class="title">預約清單
                </div>
            </div>
        </div>
        <div class="personInfo">
            <div class="container">
                <div class="title">您的預約掛號清單</div>
                <div class="table_wrap">
                    <ul class="table_title pc">
                        <li>看診日期</li>
                        <li>看診時段</li>
                        <li>院所</li>
                        <li>醫師</li>
                        <li>序號</li>
                        <li></li>
                    </ul>
                    <ul class="table_list">
                        <li>
                            <div class="m_title mo">看診日期</div>
                            <div class="m_info">2023/5/15(三)</div>
                        </li>
                        <li>
                            <div class="m_title mo">看診時段</div>
                            <div class="m_info">早診</div>
                        </li>
                        <li>
                            <div class="m_title mo">院所</div>
                            <div class="m_info">晴天身心診所</div>
                        </li>
                        <li>
                            <div class="m_title mo">醫師</div>
                            <div class="m_info">郭怡君</div>
                        </li>
                        <li>
                            <div class="m_title mo">序號</div>
                            <div class="m_info">16</div>
                        </li>
                        <li>
                            <div class="m_title mo"></div>
                            <div class="m_info">
                                <a href="javascript:;" class="btnDele">取消<i></i>預約</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="table_list">
                        <li>
                            <div class="m_title mo">看診日期</div>
                            <div class="m_info">2023/5/15(三)</div>
                        </li>
                        <li>
                            <div class="m_title mo">看診時段</div>
                            <div class="m_info">早診</div>
                        </li>
                        <li>
                            <div class="m_title mo">院所</div>
                            <div class="m_info">晴天身心診所</div>
                        </li>
                        <li>
                            <div class="m_title mo">醫師</div>
                            <div class="m_info">郭怡君</div>
                        </li>
                        <li>
                            <div class="m_title mo">序號</div>
                            <div class="m_info">16</div>
                        </li>
                        <li>
                            <div class="m_title mo"></div>
                            <div class="m_info">
                                <a href="javascript:;" class="btnDele">取消<i></i>預約</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="table_list">
                        <li>
                            <div class="m_title mo">看診日期</div>
                            <div class="m_info">2023/5/15(三)</div>
                        </li>
                        <li>
                            <div class="m_title mo">看診時段</div>
                            <div class="m_info">早診</div>
                        </li>
                        <li>
                            <div class="m_title mo">院所</div>
                            <div class="m_info">晴天身心診所</div>
                        </li>
                        <li>
                            <div class="m_title mo">醫師</div>
                            <div class="m_info">郭怡君</div>
                        </li>
                        <li>
                            <div class="m_title mo">序號</div>
                            <div class="m_info">16</div>
                        </li>
                        <li>
                            <div class="m_title mo"></div>
                            <div class="m_info">
                                <a href="javascript:;" class="btnDele">取消<i></i>預約</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="btnBox">
                    <a href="reserve-online.php" class="btn_blue">
                        更多門診資訊
                        <div class="arrow"></div>
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