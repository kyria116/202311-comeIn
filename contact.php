<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/contact.css">
</head>

<body class="lang_tw">
    <?php
    include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <main class="contact_results">
        <div class="kv_banner">
            <img src="dist/images/kv/contact.jpg" class="pc">
            <img src="dist/images/kv/contact_mo.jpg" class="mo">
            <div class="txt">
                <div class="subtitle">contact</div>
                <div class="title">   </div>
            </div>
        </div>
        <div class="contact">
            <div class="container">
                <div class="title">歡迎填寫諮詢表單，請點選您想了解或預約的諮詢項目，專人將於營業時間內盡快與您聯繫。(未顯示於下方的服務項目，請直接致電各院所詢，謝謝)</div>
                <section class="personal">
                    <div class="personal_data">
                        <label for="name">
                            姓名<span>必填</span>
                        </label>
                        <input type="text" id="name" name="username" placeholder="請輸入姓名" />
                    </div>
                    <div class="personal_data">
                        <label for="phone">
                            電話<span>必填</span>
                        </label>
                        <input type="text" id="phone" name="phone" placeholder="請輸入電話" />
                    </div>
                    <div class="personal_data">
                        <label for="date">
                            您方便連絡的時段<span>必填</span>
                        </label>
                        <select id="date" name="date" onchange="changeColor()">
                            <option value="" disabled selected hidden >請選擇時段</option>
                            <option value="date_1">時段一</option>
                            <option value="date_2">時段二</option>
                            <option value="date_3">時段三</option>
                        </select>
                    </div>
                    <div class="personal_data" id="selectWrapper">
                        <label for="name">
                            院所<span>必填</span>
                        </label>
                        <select id="insti" name="insti" onchange="changeColor()">
                            <option value="" disabled selected hidden >請選擇院所</option>
                            <option value="institution_1">院所一</option>
                            <option value="institution_2">院所二</option>
                            <option value="institution_3">院所三</option>
                        </select>
                    </div>
                </section>
                <div class="item-title">諮詢項目(可複選)<span>必填</span></div>
                <!-- 圖片 101 * 101 -->
                <div class="item">
                    <ul>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_1.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>健康諮詢</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_2.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>預約相關</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_3.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>初診問題</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_4.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>收費問題</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_5.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>rTM諮詢</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_1.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>健康諮詢</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_2.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>預約相關</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_3.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>初診問題</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_4.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>收費問題</span></div>

                        </li>
                        <li>
                            <div class="icon_pic">
                                <a href="javascript:;">
                                    <img src="dist/images/contact/contact_icon_5.png">
                                </a>
                            </div>

                            <div class="subtitle"><span>rTM諮詢</span></div>

                        </li>
                    </ul>
                </div>
                <div class="note-title">問題與備註</div>
                <div class="note">
                    <textarea name="" id="" cols="30" rows="10" placeholder="請輸入內容"></textarea>
                </div>
            </div>
            <div class="sumbit">
                <div class="btnBox">
                    <a href="javascript:;" class="btn_blue">
                        送出<div class="arrow"></div>
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
    <script src="dist/js/function.js"></script>
    <script src="dist/js/contact.js"></script>
    <script>
        $('#date').on('change', function () {
            $(this).css('color', '#221e1f')
        });
        $('#insti').on('change', function () {
            $(this).css('color', '#221e1f')
        });
    </script>

</body>

</html>