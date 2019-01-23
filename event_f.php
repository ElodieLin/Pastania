<?php include __DIR__. '/__html_head.php' ?>
<?php include __DIR__. '/__navbar.php' ?>

<head>
    <title>與法比歐共饗白色情人節</title>
   

    <style>
        /* 以下是英文字型，是標題大小，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 (只有食譜細節頁的標題會改粗體可以直接在html裡加粗體的標籤)*/
        .en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 2rem;
            color: #5C7880;
        }

        /* 以下是中文字型＿light，內文用，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
        .noto_light {
            font-family: 'Noto Sans TC';
            font-weight: 300;
            /* 這是次細的(light) */
            letter-spacing: 2px;
            font-size: 1.3rem;
            color: #5C7880;

        }

        /* 以下是中文字型_thin，次要內文用，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
        .noto_thin {
            font-family: 'Noto Sans TC';
            font-weight: 100;
            /* 這是最細的(thin) */
            letter-spacing: 2px;
            font-size: 1.3rem;
            color: #5C7880;

        }


        /* 以下是中文字型標題大小 regular，頁面大標題用，如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
        .noto_regular {
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            font-size: 2rem;
            color: #5C7880;

        }


        /* 這是我設定的 container （套nav 跟footer 用）看你要不要同步用一樣的class name */
        .e_container {
            max-width: 90%;
            margin: 0 auto;
        }

        /* 以上是模組 */

        /* －－－－－－－－－－－－－以下是背景－－－－－－－－－－－－ */
        .e_fa_bg {
            width: 100vw;
            /* height: 150vw; */
            background: url(img/pages/event/fa/event_f_bg.png) no-repeat center;
            position: relative;
            margin-top:76px; /*  */
           margin-bottom: -76px;

        }

        .e_ill_1 {
            width: 52%;
            position: absolute;
            top: 0;
            left: 2.5%;
        }

        .e_ill_2 {
            width: 15%;
            position: absolute;
            top: 0;
            right: 0;
        }

        .e_ill_3 {
            width: 20%;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .e_ill_4 {
            width: 35%;
            position: absolute;
            right: 0;
            top: 43%;

        }

        .e_ill_5 {
            width: 30%;
            position: absolute;
            left: 0;
            bottom: 22%;

        }

        .e_ill_1 img,
        .e_ill_2 img,
        .e_ill_3 img,
        .e_ill_4 img,
        .e_ill_5 img {
            width: 100%;
        }

        .container {
            position: relative;
            z-index: 4;/*  */
        }


        /* ------------title style----------- */
        .e_title_wrap {
            padding-top: 30px;
            padding-left: 50px;
        }

        .fa_title {
            font-size: 1.6rem;
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            color: #fff;

        }

        .fa_title_yellow {
            color: #F6D169;

        }

        .fa_subtitle {
            font-size: 1.3rem;
            font-weight: 300;
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            color: #fff;

        }


        /* ------------ 以下是內文 ----------- */
        .section1 {
            display: flex;
            margin-top: 100px;
        }

        .event_text {
            width: 54%;
            padding-left: 50px;
            margin-right: 50px;

        }

        .event_text p {
            font-size: 1.2rem;
            margin-top: 100px;

        }

        .fa_picture {
            width: 30%;

        }

        .fa_picture img:first-child {
            width: 100%;

        }

        .fa_caption_wrap {
            width: 100%;
            position: relative;
        }

        .fa_caption_bg {
            padding: 10px;
            padding-right: 20px;
            position: absolute;
            bottom: -65px;
            left: 53%;
        }

        .fa_caption {
            font-size: 1.2rem;
            font-weight: 300;
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            color: #fff;
            position: absolute;
            bottom: -35px;
            right: -25%;


        }



        /* --------以下為活動照片------------ */
        .section2 {
            margin-bottom: 70px;
        }

        .event_img {
            width: 77%;
            height: 20%;
            padding-left: 50px;
            margin: 0 auto 0 0;
            margin-top: 130px;
            display: flex;
            justify-content: space-between;
        }

        .event_img img {
            height: 100%;
            object-fit: contain;
        }



        /* ------------以下是報名資訊-------------- */
        .section3 {
            padding-bottom: 70px;
        }

        .singup {
            margin: 0 0 0 auto;
            background: rgba(230, 114, 72, 0.612);
            border-radius: 20px;
            width: 60%;
            padding: 30px 40px;

        }

        .singup ul {
            padding: 0;
        }

        .singup ul li {
            list-style: none;
            padding-bottom: 3px;
        }

        .singup_info {
            font-size: 1.2rem;
            font-weight: 300;
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            color: #fff;

        }

        .info_title {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 10px;


        }

        @media screen and (max-width:1200px) {
            .e_ill_1 {
                width: 59%;
                left: -1.5%;
            }

            .e_title_wrap,
            .event_text,
            .event_img {
                padding-left: 0;
            }

            .fa_caption {
                bottom: -43px;
                right: -34%;
            }

            .e_margin {
                margin: 0 10px;
            }

            .singup {
                width: 70%;
            }
        }



        @media screen and (max-width: 992px) {
            .container {
                max-width: 795px;
            }

            .e_title_wrap {
                padding-top: 15px;

            }

            .fa_subtitle {
                font-size: 1.1rem;
            }

            .fa_caption_bg {
                padding: 0;
                padding-right: 20px;
                bottom: -46px;
            }

            .fa_caption {
                bottom: -37px;
                font-size: 1rem;
            }

            .singup_info {
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 900px) {
            .e_ill_1 {
                width: 65%;
                left: -4.5%;
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                max-width: 540px;
            }

            .e_ill_1 {
                width: 90%;

            }

            .e_ill_2 {
                display: none;
            }

            .e_ill_4 {
                top: 57%;
                width: 50%;
            }

            .e_ill_5 {
                width: 47%;
                bottom: 3%;
            }

            .section1 {
                flex-direction: column;
            }

            .event_text {
                width: 100%;
                margin: 0;
            }

            .event_text p {
                margin-top: 50px;
            }

            .fa_picture {
                width: 75%;
            }

            .fa_caption_wrap {
                width: 80%;
            }

            .fa_caption_bg {
                padding: 20px;
                left: 59%;
            }

            .fa_caption {
                bottom: 0px;
            }

            .event_img {
                width: 100%;
            }

            .event_img img {
                width: 38%;
            }

            .section2 .event_img .e_width {
                width: 20.5%;
            }

            .section3 {
                padding-bottom: 150px;
            }

            .singup {
                width: 100%;
                padding: 30px 35px;
            }

        }

        @media screen and (max-width: 576px) {
            /* adjust for navbar height */
            .e_fa_bg{
                margin-top:105px;
            }

            .e_ill_1 {
                width: 125%;
                left: -14.5%;
                overflow: hidden;
            }

            .e_ill_4 {
                top: 53%;
                width: 71%;
            }

            .e_ill_5 {
                width: 67%;
            }

            .section1 {
                margin: 0;
            }

            .fa_title {
                font-size: 1.3rem;

            }

            .fa_subtitle {
                font-size: 1rem;
            }

            .event_text p {
                margin-top: 100px;
                margin-bottom: 50px;
                font-size: 1rem;
            }

            .fa_caption_bg {
                padding: 0;
                bottom: -37px;
            }

            .fa_caption {
                right: -41%;
                top: -63px;
            }

            .event_img img {
                width: 36%;
            }

            .section2 .event_img .e_width {
                width: 19.5%;
            }
        }
    </style>

</head>

<body>
    <div class="e_fa_bg">
        <div class="e_ill_1">
            <img src="img/pages/event/fa/event_f_t1.png" alt="">
        </div>
        <div class="e_ill_2">
            <img src="img/pages/event/fa/event_f_t3-01.png" alt="">
        </div>
        <div class="e_ill_3">
            <img src="img/pages/event/fa/event_f_t4.png" alt="">
        </div>
        <div class="e_ill_4">
            <img src="img/pages/event/fa/event_f_noodle.png" alt="">
        </div>
        <div class="e_ill_5">
            <img src="img/pages/event/fa/event_f_noodle.png" alt="">
        </div>

        <div class="container ">
            <div class="e_title_wrap">
                <h2 class="fa_title">與法比歐共饗 <span class="fa_title_yellow">白色情人節</span></h2>
                <h3 class="fa_subtitle">今年情人節能不能來過點不一樣的？</h3>
            </div>

            <div class="section1">
                <div class="event_text">
                    <p class="noto_light">
                        今年白色情人節（2019/3/14），Pastnia特別邀請法國型男法比歐擔任Pastania義饗大使，為您烹煮健康營養的義大利麵，讓你的味蕾沈浸在法式浪漫中，並一起共度難忘的甜蜜約會。
                    </p>
                </div>
                <div class="fa_picture">
                    <img src="img/pages/event/fa/event_f.png" alt="">
                    <div class="fa_caption_wrap">
                        <img class="fa_caption_bg" src="img/pages/event/fa/event_f_t2.png" alt="">
                        <p class="fa_caption">
                            法國型男法比歐為<br>
                            您烹煮健康營養的<br>
                            義大利麵
                        </p>
                    </div>
                </div>

            </div>

            <div class="section2">
                <div class="event_img">
                    <img class="" src="img/pages/event/fa/event_f_1.png" alt="">
                    <img class="e_margin" src="img/pages/event/fa/event_f_2.png" alt="">
                    <img class="e_width" src="img/pages/event/fa/event_f_3.png" alt="">
                </div>
            </div>

            <div class="section3">
                <div class="singup">
                    <ul class="singup_info">
                        <li class="info_title">報名資訊</li>
                        <li>名額限定：20位女性</li>
                        <li>時間：2019/3/14 PM18:30-PM21:30</li>
                        <li>地址：106台北市大安區忠孝東路三段251巷4弄16號（YUCCA CAFÉ</li>
                        <li>報名請洽：02 894 1668</li>
                        <li>報名費用：1200元</li>
                    </ul>

                </div>

            </div>
        </div>


    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- ＪＱ套上面這支，不要套slim版的  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

<?php include __DIR__. '/__html_foot.php' ?>