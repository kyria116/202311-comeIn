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
                        <!-- 預設是選擇"依院所"，所以會顯示第一間診所，並且不會有全部診所的選項
                        如果是選擇"依醫生"，所以會顯示第一位醫生，並且不會有全部醫生的選項 -->
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
                            <!-- <option value="0">全部醫生</option> -->
                            <option value="1">郭怡君</option>
                            <option value="2">郭怡君</option>
                        </select>
                    </div>
                </div>
                <div class="listBox">
                    <div class="week">
                        <a href="javascript:;" class="weekPrev"></a>
                        <div class="title">2023/05/22 - 2023/05/27</div>
                        <a href="javascript:;" class="weekNext"></a>
                    </div>
                </div>
            </div>
            <ul class="topMenuContain">
                <li>
                    <div class="container_table">
                        <div class="mo mo_txt">
                            <div class="tableTitle">
                                <!-- 依院所 -->
                                <span style="display: none">晴天診所 初診預約</span>
                                <!-- 依醫師 初診 -->
                                <span>葉明玫醫師 初診預約</span>
                                <!-- 依醫師 複診 -->
                                <span style="display: none">葉明玫醫師 複診預約</span>
                            </div>
                        </div>
                        <div class="bigBox">
                            <div>
                                <table>
                                    <thead>
                                        <tr class="pc">
                                            <th colspan="7">
                                                <!-- 依院所 -->
                                                <span style="display: none">晴天診所 初診預約</span>
                                                <!-- 依醫師 初診 -->
                                                <span>葉明玫醫師 初診預約</span>
                                                <!-- 依醫師 複診 -->
                                                <span style="display: none">葉明玫醫師 複診預約</span>
                                            </th>
                                        </tr>
                                        
                                        <tr class="mo">
                                            <th></th>
                                            <th>5/23<br>星期一</th>
                                            <th>5/24<br>星期二</th>
                                            <th>5/25<br>星期三</th>
                                            <th>5/26<br>星期四</th>
                                            <th>5/27<br>星期五</th>
                                            <th>5/28<br>星期六</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>5/23<br>星期一</td>
                                            <td>5/24<br>星期二</td>
                                            <td>5/25<br>星期三</td>
                                            <td>5/26<br>星期四</td>
                                            <td>5/27<br>星期五</td>
                                            <td>5/28<br>星期六</td>
                                        </tr>
                                        <tr class="sTitle">
                                            <td colspan="7">
                                                <!-- 依院所 -->
                                                <span style="display: none">早診 9:00 - 12:00</span>
                                                <!-- 依醫師 -->
                                                <span>早診</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- 依院所 -->
                                                <span style="display: none">早診 <i></i>9:00<i class="line pc"> - </i><i class="mo"> | </i>12:00</span>
                                                <!-- 依醫師 -->
                                                <span>早診</span>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <div class="name">張邦彥</div>
                                                    <!-- 如果額滿就顯示reserveFull，若還沒有額滿就顯示reserveBtn -->
                                                    <!-- <a class="reserveBtn" href="javascript:;">線上預約</a> -->
                                                    <a class="reserveFull" href="javascript:;"><img src="dist/images/common/phoneIcon.png"><div class="txt">請來電<i></i>洽詢預約</div></a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <!-- 依院所時，顯示name，隱藏locationBtn -->
                                                    <div class="name">張邦彥</div>
                                                    <!-- <a class="reserveBtn" href="javascript:;">線上預約</a> -->
                                                    <a class="reserveFull" href="javascript:;"><img src="dist/images/common/phoneIcon.png"><div class="txt">請來電<i></i>洽詢預約</div></a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <div class="name">張邦彥</div>
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <div class="name">張邦彥</div>
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <div class="name">張邦彥</div>
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="sTitle">
                                            <td colspan="7">
                                                <!-- 依院所 -->
                                                <span>午診 13:00 - 17:00</span>
                                                <!-- 依醫師 -->
                                                <span style="display: none">午診</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- 依院所 -->
                                                <span>午診 <i></i>13:00<i class="line pc"> - </i><i class="mo"> | </i>17:00</span>
                                                <!-- 依醫師 -->
                                                <span style="display: none">午診</span>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="sTitle">
                                            <td colspan="7">
                                                <!-- 依院所 -->
                                                <spa>晚診 18:00 - 20:00</spa>
                                                <!-- 依醫師 -->
                                                <spann style="display: none">晚診</spann>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- 依院所 -->
                                                <span>晚診 <i></i>18:00<i class="line pc"> - </i><i class="mo"> | </i>20:00</span>
                                                <!-- 依醫師 -->
                                                <span style="display: none">晚診</span>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="box">
                                                    <a class="reserveBtn" href="javascript:;">線上預約</a>
                                                    <br>
                                                    <a class="reserveLink" href="javascript:;" target="_blank">4/1起</a>
                                                    <br>
                                                    <div class="locationBtn">向陽</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="container">
                <!-- 依診所 -->
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
                <!-- 依醫生  初診 -->
                <div class="firstCome" style="display: none">
                    <div class="title">若初診預約仍有疑問者<i></i>請致電至預約院所，將由專人協助預約
                    </div>
                    <ul class="bottomBox">
                        <li>
                            <a href="tel:0222643905">
                                康迎晴天<span> | </span> 02 2264 3905
                            </a>
                        </li>
                        <li>
                            <a href="tel:0222643905">
                                康迎晴天<span> | </span> 02 2264 3905
                            </a>
                        </li>
                        <li>
                            <a href="tel:0222643905">
                                康迎晴天<span> | </span> 02 2264 3905
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- 依醫生  複診 -->
                <div class="secCome" style="display: none">
                    <div class="subtitle">複診預約溫馨提醒</div>
                    <div class="title">請於休診前20分鐘至現場掛號</div>
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
    <script>
        $('.reserveBtn').on('click', function () {
            var yes = confirm('是否確認預約?');
            if (yes) {
                location.href = 'reserve-successful.php'
            } else {
                return false;
            }
        });
    </script> 
</body>

</html>