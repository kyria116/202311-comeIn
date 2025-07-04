<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/reserve.css?02">
</head>

<body class="lang_tw" data-menu="5">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
        include "quote/template/popup.php";
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
        <div class="personInfo">
            <div class="container">
                <div class="title">請輸入您的個人資訊</div>
                <div class="subtitle">預約小叮嚀</div>
                <div class="info">因每人限一筆預約紀錄，如已經有預約資料，需先取消上筆預約，再重新預約</div>
                <form action="">
                    <div class="w50">
                        <label for="">
                            身分證號(或居留證號) <span>必填</span>
                        </label>
                        <input type="text" placeholder="請輸入身分證號">
                    </div>
                    <div class="w50">
                        <label for="">
                            出生年月日 <span>必填</span>
                        </label>
                        <div class="selectBox">
                            <select id="year" name="" onchange="change_year(this)"></select>
                            <select  id="month" name="" onchange="change_month(this)"></select>
                            <select id="day" name=""></select>
                        </div>
                    </div>
                    <div class="w50">
                        <label for="">
                            手機號碼 <span>必填</span>
                        </label>
                        <input type="tel" placeholder="請輸入手機號碼">
                    </div>
                    <div class="w50 CAPTCHA">
                        <label for="">
                            驗證碼 <span>必填</span>
                        </label>
                        <div class="inputBox">
                            <input name="" type="text"  id="m_captcha" placeholder="請輸入四碼" >
                            <div class="box">
                                <img src="captcha/captcha.php"  id="imgCaptcha"  alt="">
                                <a href="javascript:void(0)" onclick="RefreshImage('imgCaptcha')">
                                    <img src="captcha/captcha.png"> 重新整理
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="btnBox">
                    <a href="reserve-online.php" class="btn_blue">
                        送出
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
    <script src="dist/js/dayForm.js"></script>      
</body>

</html>