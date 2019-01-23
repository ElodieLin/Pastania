<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

<head>


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

        .cursor {
            cursor: pointer;
        }


        .e_cart_hr {
            background-color: #5C7880;
            margin-bottom: 50px;

        }

        .e_cart {
            margin-top: 100px;
        }

        .e_cart p {
            margin: 0 auto;
            margin-bottom: 80px;
            text-align: center;
            font-size: 1.8rem;
        }


        /* btn 模組 */
        .e_btn {
            width: 372px;
            height: 70px;
            border: 0;
            background-color: #E67348;
            color: #fff;
            font-size: 1.3rem;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        .e_btn:hover {
            background-color: #D3554A;

        }

        .e_btn:focus {
            outline: none;
        }


        .e_btn_outline {
            width: 372px;
            height: 70px;
            background-color: #fff;
            border: 2px solid #E67348;
            color: #E67348;
            font-size: 1.3rem;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;

        }

        .e_btn_outline:hover {
            background-color: #E67348;
            color: #fff;
        }

        .e_btn_outline:focus {
            outline: none;
        }

        .e_cart_btn {
            margin-top: 50px;
            margin-bottom: 100px;
            display: flex;
            justify-content: space-between;
        }


        @media screen and (max-width: 992px) {


            .e_cart_btn {
                flex-direction: column;
            }

            .e_btn {
                width: 100%;
            }

            .e_btn_outline {
                width: 100%;
                margin-bottom: 20px;
            }
        }


        /* -----------以上是模組------------- */


        /* --------------- Process Styles ------------ */
        .process_wrap {
            width: 50%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .process_main {
            width: 100%;
            display: flex;
            margin-bottom: 100px;
        }

        .e_col_5 {
            width: 20%;
            margin-left: 10px;
            margin-right: 10px;
            position: relative;
        }

        .process_main .e_col_5:not(:first-child):before {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 1px;
            top: 30px;
            left: calc(-50%);
            right: 0;
            background: #5C7880;
            transition: .4s;
        }

        .process_step_cont {
            text-decoration: none;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            align-content: space-between;
        }

        .process_step {
            font-size: 2rem;
            border-radius: 100%;
            background: #C8DBD8;
            text-align: center;
            line-height: 2;
            justify-content: center;
            align-self: center;
            display: flex;
            color: #fff;
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
            z-index: 4;
            cursor: pointer;
        }


        .process_label {
            width: 100%;
            text-align: center;
        }

        .process_dot_cont {
            display: flex;
            justify-content: space-around;
            align-items: stretch;
            width: 60%;
            padding-top: 5px;
        }

        /* --------控制 process bar 第幾顆變色--------- */

        .active_step .e_col_5:nth-child(1) .process_step {
            background-color: #E67348;

        }

        @media screen and (max-width: 992px) {
            .process_step {
                font-size: 1.6rem;
                width: 50px;
                height: 50px;

            }

            .process_main .e_col_5:not(:first-child):before {
                top: 25px;

            }

            .process_wrap {
                width: 90%;
            }

            .process_main {
                margin-bottom: 100px;
            }
        }

        @media screen and (max-width: 576px) {

            .process_label {
                display: none;
            }

            .process_main {
                margin-bottom: 50px;
            }

        }

        /* -------------- Process Styles end ---------------*/


        /*  -------------以下是購物車nav--------------- */

        .e_cart_title {
            border-bottom: 1px solid #5C7880;
            margin-bottom: 50px;
        }

        .e_cart_title ul {
            display: flex;
            justify-content: space-between;
            list-style: none;
            padding: 0;

        }

        .e_cart_title ul li {
            text-align: center;
            display: block;
        }

        .d_flex {
            display: flex;
        }

        .e_img_w {
            width: 100px;
            margin-right: 20px;
        }

        .e_w {
            width: 120px;
        }

        .e_item_w {
            width: 250px;

        }

        .e_icon_w {
            width: 70px;

        }


        /*  -------------以下是購物車是空的--------------- */
        /* 空的時候是display: none; */
        .e_no_items {
            display: none;
        }

        /* 空的時候是display: none; */
        .e_empty_cart {
            text-align: center;
            font-size: 1.6rem;
            padding: 80px 0;

        }

        .e_no_items hr {
            margin-top: 50px;
            background-color: #5C7880;

        }

        .continue_shopping {
            margin-top: 40px;
            text-align: center;
            margin-bottom: 100px;

        }

        /* -------------購物車是空的 end------------ */


        /* ------------以下是推薦商品------------- */


        .e_recommend_item_wrap {
            display: flex;
            justify-content: space-between;

        }

        .col_3 {
            width: 22%;
        }

        .recommend_img_size {
            width: 100%;
            margin-bottom: 10px;
        }

        .recommend_img_size img {
            width: 100%;
            height: 100%;
            background: #dcdcdc;
            object-fit: contain;

        }

        .e_recommend_item_text {
            display: flex;
            flex-direction: column;
        }

        .e_recommend_item a,
        .e_item_w a {
            color: #5C7880;
        }

        .e_recommend_item a,
        .e_item_w a:hover {
            text-decoration: none;
        }


        .e_recommend_item_name,
        .e_item_price {
            font-size: 1.3rem;
        }

        .e_recommend_item .e_recommend_item_name {
            margin-bottom: 0;
        }

        .e_item_price {
            margin-top: 30px;
            margin-bottom: 30px;
        }


        @media screen and (max-width: 992px) {
            .e_cart_title {
                display: none;
            }

            .e_cart_recommend p:first-child {
                text-align: center;
            }

            .col_3 {
                width: 47%;
            }

            .e_recommend_item_wrap {
                flex-wrap: wrap;
            }


        }

        /* ------------推薦商品 end------------- */


        /* ------------以下是購物車有商品-------------- */
        /* 空的時候打開 */
        /* .e_cart_items_outerwrapper {
            display: none;
        } */
        /* 空的時候打開 */
        .e_cart_items_innerwrapper {
            margin-bottom: 50px;
        }


        .e_cart_items_innerwrapper ul {
            list-style: none;
            padding: 0;
        }

        .e_cart_item {
            display: flex;
            justify-content: space-between;
        }


        .d_colum {
            display: flex;
            flex-flow: column;

        }

        .d_colum .d_flex {
            display: flex;
        }


        .e_img_w img {
            background: #dcdcdc;
            width: 100%;
            object-fit: cover;
        }

        .e_cart_item_name {
            font-size: 1.5rem;
            margin-bottom: 0;
        }

        .e_cart_item_name_zh,
        .e_cart_item_price {
            font-size: 1.2rem;

        }

        .e_cart_item_weight {
            font-size: 1.1rem;

        }

        .e_subtotal {
            text-align: center;
            font-size: 1.2rem;

        }


        .e_add {
            width: 100%;
            height: 40px;
            border: 1px solid #5C7880;
            display: flex;
            justify-content: space-between;
        }

        .e_add p {
            font-size: 1.2rem;
            line-height: 2.1;

        }

        .e_addjust {
            width: 35px;
            height: 39px;
            cursor: pointer;
        }

        .center {
            display: block;
            text-align: center;
            line-height: 2.3;
            color: #5C7880;
            font-size: 1rem;
            padding-left: 2px;
        }

        .minus {
            border-right: 1px solid #5C7880;

        }

        .plus {
            border-left: 1px solid #5C7880;

        }

        .e_operate_icon {
            width: 70px;
            display: flex;
            justify-content: space-between;
        }

        .e_cart_operate_icon {
            width: 25px;
            height: 25px;
            cursor: pointer;
        }

        .e_operate_icon svg {
            width: 100%;
            fill: #5C7880;
        }

        .e_none_display_w {
            display: none;
        }


        @media screen and (max-width: 992px) {
            .e_cart_items_innerwrapper ul {
                flex-direction: column;

            }

            .e_img_w {
                width: 250px;
            }

            .e_mt10 {
                margin-top: 10px;
            }

            .e_mt20 {
                margin-top: 20px;
            }

            .e_cart_item_name {
                font-size: 1.3rem;
            }

        }


        /* --------以下是數量按紐--------- */
        .minus {
            border: 1px solid #5C7880;
            width: 30px;
            color: #5C7880;

        }

        .add {
            width: 30px;
            border: 1px solid #5C7880;
            color: #5C7880;
        }

        .input-box {
            display: inline-block;
            min-width: 50px;
            border: 1px solid #5C7880;
            text-align: center;

        }

        .input-box:focus {
            outline: none;
        }

        .number-box {
            display: flex;
            justify-content: center;
        }

        .number-box button:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem #C8DBD8;

        }


        /* --------以下是總金額--------- */

        .sum {
            height: 50px;
            display: flex;
            justify-content: flex-end;

        }

        .e_col_3_full {
            width: 25%;
            position: relative;
        }

        .e_sum_fontsize {
            font-size: 1.3rem;
            text-align: right;
        }

        .e_sum_fontsize_en {
            font-size: 1.3rem;
            line-height: 1.7;
            text-align: left;
        }

        .e_position {
            position: absolute;
            right: 0;
        }

        .e_position_en {
            position: absolute;
            right: 0;
        }

        .sum_wrapper p {
            color: #D3554A;
            text-align: right;

        }


        @media screen and (max-width: 992px) {
            .e_col_3_full {
                width: 50%;
            }

            .e_none_display_w {
                display: inherit;
            }

            .e_none_display_m {
                display: none;
            }

        }


        /* --navbar margin top */
        nav {
            margin-top: 76px;
        }

        /* heart icon */
        .fas {
            color: #5C7880;
        }

    </style>

</head>

<body>
<div class="container e_cart">
    <p class="noto_light">購 物 車</p>
</div>

<div class="process_wrap active_step">
    <div class="process_main">
        <div class="e_col_5 ">
            <div class="process_step_cont">
                <div class="process_step step-1 en_font ">1</div>
                <span class="process_label noto_light">購物車清單</span>
            </div>
        </div>
        <div class="e_col_5 ">
            <div class="process_step_cont">
                <div class="process_step step-2 en_font">2</div>
                <span class="process_label noto_light">取貨方式</span>
            </div>
        </div>
        <div class="e_col_5">
            <div class="process_step_cont">
                <div class="process_step step-3 en_font">3</div>
                <span class="process_label noto_light">付款方式</span>
            </div>
        </div>
        <div class="e_col_5">
            <div class="process_step_cont">
                <div class="process_step step-4 en_font">4</div>
                <span class="process_label noto_light">確認購物</span>
            </div>
        </div>
        <div class="e_col_5">
            <div class="process_step_cont">
                <div class="process_step step-5 en_font">5</div>
                <span class="process_label noto_light">完成</span>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="e_cart_title">
        <ul class="noto_light">
            <div class="d_flex">
                <li class="e_img_w"></li>
                <li class="e_item_w">項 目</li>
            </div>
            <li class="e_w">單 價</li>
            <li class="e_w">數 量</li>
            <li class="e_w">小 計</li>
            <li class="e_icon_w"></li>
        </ul>
    </div>

    <!-- 插入購物車是空的 start -->
    <div class="e_no_items">
        <p class="e_empty_cart noto_light">購 物 車 是 空 的</p>

        <hr>

        <div class="continue_shopping">
            <button class="e_btn noto_light">繼 續 購 物</button>
        </div>

    </div>
    <!-- 插入購物車是空的 end -->


    <!-- 購物車有商品 start -->
    <div class="e_cart_items_outerwrapper">
        <!-- 每個商品都包在 innerwrapper裡 -->
        <div class="e_cart_items_innerwrapper noto_light ">

            <ul class="e_cart_item">
                <div class="d_flex">
                    <li class="e_img_w">
                        <a href=""><img src="img/product/l/P1_Farfalle_Tricolore.png" alt=""></a>
                    </li>

                    <li class="e_item_w">
                        <ul class="d_colum">
                            <li class="e_cart_item_name en_font "><a href="">Farfalle nº 87</a></li>
                            <li class="e_cart_item_name_zh noto_light"><a href="">蝴蝶麵</a></li>
                            <li class="e_cart_item_weight noto_light e_mt20">500g (7人份)</li>

                            <!-- 手機版顯示的 -->
                            <li class="e_w e_none_display_w e_margin_b e_mt10">
                                <input type="text" class="input-number">
                                <!-- <div class="e_add">
                                    <div class="e_addjust minus"><i class="fas fa-minus center"></i></div>
                                    <div>
                                        <p class="en_font">1</p>
                                    </div>
                                    <div class="e_addjust plus"><i class="fas fa-plus center"></i></div>
                                </div> -->
                            </li>

                            <li class="e_w e_cart_item_price en_font e_price e_none_display_w e_mt20">NT＄ 109</li>

                            <li class="e_icon_w e_operate_icon e_none_display_w e_mt10" display=flex>


                                <div class="e_cart_operate_icon ">


                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                                         width="25.15px" height="22.15px" viewBox="0 0 458.9 405"
                                         style="enable-background:new 0 0 458.9 405;"
                                         xml:space="preserve">

                                            <path class="st0" d="M421,38.3c-24.5-24.5-57.1-38-91.8-38s-67.3,13.5-91.9,38.1l-7.7,7.7l-8-7.9C197,13.6,164.3,0,129.6,0
                                                            C95,0,62.4,13.5,37.9,38C13.4,62.7-0.1,95.3,0,129.9c0,34.7,13.6,67.3,38.2,91.8l177.7,177.7c3.5,3.5,8.6,5.6,13.4,5.6
                                                            c5,0,9.9-2,13.4-5.5l178-177.4c24.6-24.6,38.1-57.2,38.1-91.9C458.9,95.4,445.4,62.8,421,38.3z M420.7,130.2L420.7,130.2
                                                            c0.1,24.4-9.4,47.4-26.8,64.8L229.3,359L65.1,194.7c-17.4-17.4-26.9-40.4-26.9-64.9c0-24.5,9.5-47.5,26.8-64.8s40.3-26.8,64.7-26.8
                                                            c24.6,0,47.6,9.6,65,26.9l21.4,21.4c3.6,3.6,8.5,5.7,13.6,5.6c5.1,0,9.8-2,13.4-5.6l21.2-21.2c17.4-17.4,40.4-26.9,64.9-26.9
                                                            c24.3,0,47.3,9.5,64.8,26.8C411.2,82.6,420.7,105.7,420.7,130.2z"/>
                                        </svg>

                                </div>

                                <div class="e_cart_operate_icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                                         width="22.35" height="25.55" viewBox="0 0 368.5 422.1"
                                         style="enable-background:new 0 0 368.5 422.1;"
                                         xml:space="preserve">

                                            <path class="st0" d="M221.1,147.6c-3.5,0-6.3,2.8-6.3,6.3v181.3c0,3.5,2.8,6.3,6.3,6.3h20.1c3.5,0,6.3-2.8,6.3-6.3V153.9
                                                            c0-3.5-2.8-6.3-6.3-6.3H221.1z M127.1,147.6c-3.5,0-6.3,2.8-6.3,6.3v181.3c0,3.5,2.8,6.3,6.3,6.3h20.1c3.5,0,6.3-2.8,6.3-6.3V153.9
                                                            c0-3.5-2.8-6.3-6.3-6.3H127.1z M352,67.1h-64.6l-29.6-49.4C251.2,6.8,239.2,0,226.5,0h-84.6c-12.7,0-24.7,6.8-31.3,17.7L81,67.1
                                                            H16.4C7.4,67.1,0,74.4,0,83.5v10.1c0,3.5,2.8,6.3,6.3,6.3h20.6v285.7c0,20.1,16.4,36.5,36.5,36.5h241.7c20.1,0,36.5-16.4,36.5-36.5
                                                            V99.8h20.6c3.5,0,6.3-2.8,6.3-6.3V83.4C368.4,74.4,361.1,67.1,352,67.1z M137.2,36.9c1.6-2.6,4.5-4.3,7.6-4.3h78.9
                                                            c3.1,0,6,1.6,7.6,4.3L249.4,67H119.1L137.2,36.9z M308.8,380.5c0,4.9-4,8.8-8.8,8.8H68.4c-4.9,0-8.8-4-8.8-8.8V99.8h249.2V380.5z"/>
                                        </svg>
                                </div>
                            </li>
                            <!-- 手機版顯示 end -->

                        </ul>
                    </li>
                </div>

                <li class="e_w e_cart_item_price en_font e_none_display_m">NT＄ 109</li>

                <li class="e_w e_none_display_m ">
                    <input type="text" class="input-number">
                    <!-- <div class="e_add">
                        <div class="e_addjust minus"><i class="fas fa-minus center"></i></div>
                        <div>
                            <p class="en_font e_subtotal">1</p>
                        </div>
                        <div class="e_addjust plus"><i class="fas fa-plus center"></i></div>
                    </div> -->
                </li>

                <li class="e_w e_cart_item_price en_font e_none_display_m">NT＄ 109</li>


                <li class="e_icon_w e_operate_icon e_none_display_m wish_icon">


                    <!-- heart icon  -->
                    <div class="e_cart_operate_icon ">
                        <a href="#"><i class="far fa-heart"></i></a>
                        <!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="25.15px"
                            height="22.15px" viewBox="0 0 458.9 405" style="enable-background:new 0 0 458.9 405;"
                            xml:space="preserve">

                            <path class="st0" d="M421,38.3c-24.5-24.5-57.1-38-91.8-38s-67.3,13.5-91.9,38.1l-7.7,7.7l-8-7.9C197,13.6,164.3,0,129.6,0
                                        C95,0,62.4,13.5,37.9,38C13.4,62.7-0.1,95.3,0,129.9c0,34.7,13.6,67.3,38.2,91.8l177.7,177.7c3.5,3.5,8.6,5.6,13.4,5.6
                                        c5,0,9.9-2,13.4-5.5l178-177.4c24.6-24.6,38.1-57.2,38.1-91.9C458.9,95.4,445.4,62.8,421,38.3z M420.7,130.2L420.7,130.2
                                        c0.1,24.4-9.4,47.4-26.8,64.8L229.3,359L65.1,194.7c-17.4-17.4-26.9-40.4-26.9-64.9c0-24.5,9.5-47.5,26.8-64.8s40.3-26.8,64.7-26.8
                                        c24.6,0,47.6,9.6,65,26.9l21.4,21.4c3.6,3.6,8.5,5.7,13.6,5.6c5.1,0,9.8-2,13.4-5.6l21.2-21.2c17.4-17.4,40.4-26.9,64.9-26.9
                                        c24.3,0,47.3,9.5,64.8,26.8C411.2,82.6,420.7,105.7,420.7,130.2z" />
                        </svg> -->
                    </div>


                    <!-- remove icon  -->
                    <div class="e_cart_operate_icon remove_icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="22.35"
                             height="25.55" viewBox="0 0 368.5 422.1" style="enable-background:new 0 0 368.5 422.1;"
                             xml:space="preserve">

                                <path class="st0" d="M221.1,147.6c-3.5,0-6.3,2.8-6.3,6.3v181.3c0,3.5,2.8,6.3,6.3,6.3h20.1c3.5,0,6.3-2.8,6.3-6.3V153.9
                                            c0-3.5-2.8-6.3-6.3-6.3H221.1z M127.1,147.6c-3.5,0-6.3,2.8-6.3,6.3v181.3c0,3.5,2.8,6.3,6.3,6.3h20.1c3.5,0,6.3-2.8,6.3-6.3V153.9
                                            c0-3.5-2.8-6.3-6.3-6.3H127.1z M352,67.1h-64.6l-29.6-49.4C251.2,6.8,239.2,0,226.5,0h-84.6c-12.7,0-24.7,6.8-31.3,17.7L81,67.1
                                            H16.4C7.4,67.1,0,74.4,0,83.5v10.1c0,3.5,2.8,6.3,6.3,6.3h20.6v285.7c0,20.1,16.4,36.5,36.5,36.5h241.7c20.1,0,36.5-16.4,36.5-36.5
                                            V99.8h20.6c3.5,0,6.3-2.8,6.3-6.3V83.4C368.4,74.4,361.1,67.1,352,67.1z M137.2,36.9c1.6-2.6,4.5-4.3,7.6-4.3h78.9
                                            c3.1,0,6,1.6,7.6,4.3L249.4,67H119.1L137.2,36.9z M308.8,380.5c0,4.9-4,8.8-8.8,8.8H68.4c-4.9,0-8.8-4-8.8-8.8V99.8h249.2V380.5z"/>
                            </svg>
                    </div>
                </li>
            </ul>
        </div>

        <hr class="e_cart_hr">


        <div class="sum_wrapper">
            <div class="sum">

                <div class="e_col_3_full">
                    <span class="noto_light e_sum_fontsize e_position">總金額</span>
                </div>

                <div class="e_col_3_full">
                    <span class="en_font e_sum_fontsize_en e_position_en">NT＄ 109</span>
                </div>
            </div>


            <br>
            <p class="noto_light">全站滿千免運喔！</p>
        </div>

        <div class="e_cart_btn">
            <button class="e_btn_outline noto_light">繼 續 購 物</button>
            <button class="e_btn noto_light">結 帳 去</button>
        </div>

    </div>

    <!-- 購物車有商品 end -->


    <!-- 以下是推薦商品 -->
    <div class="e_cart_recommend">
        <p class="noto_light ">你可能喜歡</p>
        <hr class="e_cart_hr">

        <div class="e_recommend_item_wrap">
            <div class="e_recommend_item col_3">
                <div class="recommend_img_size cursor">
                    <a href=""><img src="img/product/l/P1_Farfalle_Tricolore.png" alt=""></a>
                </div>
                <div class="e_recommend_item_text">
                    <span class="e_recommend_item_name en_font "><a href="">Farfalle nº 87</a></span>
                    <span class="e_recommend_item_name_zh noto_light "><a href="">蝴蝶麵</a></span>
                    <span class="e_item_price en_font ">NT＄ 109</span>
                </div>
            </div>

            <div class="e_recommend_item col_3">
                <div class="recommend_img_size cursor">
                    <a href=""><img src="img/product/l/P1_Farfalle_Tricolore.png" alt=""></a>
                </div>
                <div class="e_recommend_item_text">
                    <span class="e_recommend_item_name en_font "><a href="">Farfalle nº 87</a></span>
                    <span class="e_recommend_item_name_zh noto_light "><a href="">蝴蝶麵</a></span>
                    <span class="e_item_price en_font ">NT＄ 109</span>
                </div>
            </div>
            <div class="e_recommend_item col_3">
                <div class="recommend_img_size cursor">
                    <a href=""><img src="img/product/l/P1_Farfalle_Tricolore.png" alt=""></a>
                </div>
                <div class="e_recommend_item_text">
                    <span class="e_recommend_item_name en_font "><a href="">Farfalle nº 87</a></span>
                    <span class="e_recommend_item_name_zh noto_light "><a href="">蝴蝶麵</a></span>
                    <span class="e_item_price en_font ">NT＄ 109</span>
                </div>
            </div>
            <div class="e_recommend_item col_3">
                <div class="recommend_img_size cursor">
                    <a href=""><img src="img/product/l/P1_Farfalle_Tricolore.png" alt=""></a>
                </div>
                <div class="e_recommend_item_text">
                    <span class="e_recommend_item_name en_font "><a href="">Farfalle nº 87</a></span>
                    <span class="e_recommend_item_name_zh noto_light "><a href="">蝴蝶麵</a></span>
                    <span class="e_item_price en_font ">NT＄ 109</span>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<!-- ＪＱ套上面這支，不要套slim版的  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script>
    initInputBox($('.input-number'), 1, 20);

    function initInputBox(elem, min, max) {
        elem.each(function () {
            var $input = $(this);
            var $wrap, $inputBox, $add, $minus;

            $input.hide().wrap('<div class="number-box"></div>');

            $wrap = $(this).parent();

            $wrap.append('<button type="button" class="minus">-</button>' +
                '<div class="input-box" contenteditable="true"></div>' +
                '<button type="button" class="add">+</button>');

            $add = $wrap.find('.add');
            $minus = $wrap.find('.minus');
            $inputBox = $wrap.find('.input-box');

            $inputBox.text(min);

            function add() {
                if (parseInt($inputBox.text()) < max) {
                    $inputBox.text(parseInt($inputBox.text()) + 1);
                }
            }

            function minus() {
                if (parseInt($inputBox.text()) > min) {
                    $inputBox.text(parseInt($inputBox.text()) - 1);
                }
            }

            $add.click(add);
            $minus.click(minus);

            $inputBox
                .blur(function () {
                    var regex = /[^\d]*/g;
                    var numVal = $(this).text().replace(regex, "");
                    console.log(numVal)
                    numVal = isNaN(parseInt(numVal)) ? 1 : parseInt(numVal);
                    numVal = numVal < min ?
                        min : numVal > max ?
                            max : numVal;
                    $(this).text(numVal);
                })
                .keydown(function (e) {
                    var _key = e.keyCode;
                    console.log(_key)
                    // 左邊數字鍵 0-9 的 keycode 分別是 48-57
                    // 右邊數字鍵 0-9 的 keycode 分別是 96-105
                    // enter: 13 & 108, backspace: 8, delete: 46, esc:27
                    // 上: 38, 下: 40, 左: 37, 右: 39

                    if (_key == 13 || _key == 108 || _key == 27) {
                        // 按下 enter / esc 就 blur
                        $(this).blur();
                    } else if (_key == 37 || _key == 39 || _key == 8 || _key == 46 || (_key >= 48 && _key <= 57) || (_key >= 96 && _key <= 105)) {
                        // 數字鍵、刪除鍵、左右鍵可輸入
                        return true;
                    } else if (_key == 38) {
                        // 向上加一
                        add();
                        return false;
                    } else if (_key == 40) {
                        // 向下減一
                        minus();
                        return false;
                    } else {
                        // 其他按鍵全部無作用
                        return false;
                    }

                })
                .keyup(function () {
                    var regex = /[^\d]/;
                    var numVal = $(this).text();

                    // 裡面含有非法文字才做取代的動作
                    if ($(this).text().search(regex) == 0) {
                        console.log('要取代')
                        numVal = numVal.replace(regex, "");
                        numVal = isNaN(parseInt(numVal)) ? '' : parseInt(numVal);
                        if (numVal > max) {
                            numVal = max;
                        }
                        $(this).text(numVal);
                    }
                });

        })
    }


    // add to wish list

    $('.far').click(function () {
        $(this).toggleClass('fas');
        // $('.far').toggleClass('fas');

    });
</script>

</body>

<?php include __DIR__ . '/__html_foot.php' ?>
