<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

<head>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">


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
            /* margin-bottom: 100px; */
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

        .active_step .e_col_5:nth-child(4) .process_step {
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












        /* ------------以下是購物車有商品-------------- */

        /* .e_cart_items_outerwrapper {
            display: none;
        } */

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

        .e_cart_item a {
            color: #5C7880;
            text-decoration: none;
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

        .e_cart_item .e_price {
            font-size: 1.1rem;
            display: inline-block;

        }

        .e_cart_item_weight {
            font-size: 1.1rem;
        }

        .e_cart_item .e_none_display_w {
            display: none;
        }

        .e_quantity {
            text-align: center;
            font-size: 1.2rem;
        }

        .e_subtotal {
            text-align: center;
            font-size: 1.2rem;

        }


        @media screen and (max-width: 992px) {
            .e_cart_items_innerwrapper ul {
                flex-direction: column;
            }

            .e_img_w {
                width: 250px;
            }

            .e_mt20 {
                margin-bottom: 20px;
            }

            .e_cart_item_name {
                font-size: 1.3rem;
            }

            .e_cart_item .e_none_display_w {
                display: block;
            }

            .e_none_display_m {
                display: none;
            }

        }



        /* --------以下是總金額--------- */

        .sum_wrapper {
            position: relative;
            margin-bottom: 100px;
        }

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
            letter-spacing: 1px;
        }

        .e_position {
            position: absolute;
            right: 0;
        }

        .e_position_en {
            position: absolute;
            right: 25px;
        }

        .e_b {
            font-weight: 400;
        }

        .e_b_en {
            font-weight: 500;
        }

        .sum_wrapper p {
            color: #D3554A;
            text-align: right;

        }

        .sum_wrapper hr {
            width: 36%;
            background-color: #5C7880;
            position: absolute;
            right: 0;
            top: 4.5rem;
        }


        @media screen and (max-width: 992px) {
            .e_col_3_full {
                width: 50%;
            }



        }

        /* 選擇付款方式 */

        .e_payment_method{
            margin-bottom: 70px;
        }

        .e_payment_method .form-check-inline{
            margin-right: 1.5rem;
        }
        
        .e_payment_method .form-check-inline .form-check-input{
            margin-right: .5rem;
        }
        
        .e_payment_method_alert{
            margin-top: .7rem;
            color: #D3554A;
            font-size: 1rem;
            padding-left: 1.3rem;
        }

        @media screen and (max-width: 768px) {
            .col-4{
                flex: 100%;
                max-width: 100%;
            }
        }
        @media screen and (max-width: 992px) {
            .sum_wrapper hr{
                width: 68%;
            }
        
        }

        @media screen and (max-width: 576px) {
            .sum_wrapper hr{
                width: 80%;
            }
        
        }

/* ----------確認配送資訊----------  */

        .e_delivery_info_confirm{
            background: #C8DBD8;
            padding: 2.5rem 3.25rem;
            padding-top: 3rem;
            margin-bottom: 6rem;


        }
        @media screen and (max-width: 768px) {
            .e_delivery_info_confirm{
                padding: 1.5rem 1rem;
                padding-top: 2rem;

            }
            .e_info_confirm{
                font-size: 1.1rem;
            }

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
        <p class="noto_light ">購買清單</p>
        <hr class="e_cart_hr">

        <div class="e_cart_title e_none_display_m">
            <ul class="noto_light">
                <div class="d_flex">
                    <li class="e_img_w"> </li>
                    <li class="e_item_w">項 目</li>
                </div>
                <li class="e_w">單 價</li>
                <li class="e_w">數 量</li>
                <li class="e_w">小 計</li>
            </ul>
        </div>



        <!-- 購物車有商品 start -->
        <div class="e_cart_items_outerwrapper">
            <!-- 每個商品都包在 innerwrapper ul 裡 -->
            <div class="e_cart_items_innerwrapper noto_light ">

                <ul class="e_cart_item">
                    <div class="d_flex">
                        <li class="e_img_w">
                            <a href=""><img src="img/product/l/P1_Farfalle_Tricolore.png" alt=""></a>
                        </li>

                        <li class="e_item_w">
                            <ul class="e_item_">
                                <li class="e_cart_item_name en_font "><a href="">Farfalle nº 87</a></li>
                                <li class="e_cart_item_name_zh noto_light"><a href="">蝴蝶麵</a></li>
                                <li class="e_cart_item_weight noto_light e_mt20">500g (7人份)</li>

                                <!-- 手機版顯示的 -->
                                <li class=" e_price e_none_display_w">
                                    <span class="noto_light e_price">單價： <span class="en_font e_price">NT＄ 109</span></span>
                                </li>

                                <li class=" e_none_display_w e_margin_b e_mt10">
                                    <span class="noto_light e_price">數量： <span class="en_font e_quantity">10</span></span>
                                </li>

                                <li class=" e_price e_none_display_w e_mt20">
                                    <span class="noto_light e_price">小計： <span class="en_font e_price">NT＄ 1090</span></span>

                                </li>
                                <!-- 手機版顯示end -->


                            </ul>
                        </li>
                    </div>

                    <li class="e_w e_cart_item_price en_font e_none_display_m">NT＄ 109</li>

                    <li class="e_w e_none_display_m ">
                        <p class="en_font e_subtotal">10</p>
                    </li>

                    <li class="e_w e_cart_item_price en_font e_none_display_m">NT＄ 1090</li>

                </ul>
            </div>

            <hr class="e_cart_hr">

            <!-- 總金額計算 -->
            <div class="sum_wrapper">
                <div class="sum">

                    <div class="e_col_3_full">
                        <span class="noto_light e_sum_fontsize e_position">總金額</span>
                    </div>

                    <div class="e_col_3_full">
                        <span class="en_font e_sum_fontsize_en e_position_en">NT＄ 1090</span>
                    </div>
                </div>
                <div class="sum">

                    <div class="e_col_3_full">
                        <span class="noto_light e_sum_fontsize e_position">運費</span>
                    </div>

                    <div class="e_col_3_full">
                        <span class="en_font e_sum_fontsize_en e_position_en">NT＄ 0</span>
                    </div>
                </div>
                <hr>
                <div class="sum">

                    <div class="e_col_3_full">
                        <span class="noto_light e_sum_fontsize e_position e_b">應付金額</span>
                    </div>

                    <div class="e_col_3_full">
                        <span class="en_font e_sum_fontsize_en e_position_en e_b_en">NT＄ 1090</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- 購物車有商品 end -->


        <!-- 選擇付款方式 -->
        <p class="noto_light ">選擇付款方式</p>
        <hr class="e_cart_hr">

        <div class="e_payment_method">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="paymentSelect" id="paymentOption1" value="ATM"
                    checked>
                <label class="form-check-label noto_light" for="paymentOption1">ATM匯款</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="paymentSelect" id="paymentOption2" value="Card">
                <label class="form-check-label noto_light" for="paymentOption2">信用卡線上刷卡</label>
            </div>

            <!-- alert -->
            <!-- <small id="" class="form-text e_payment_method_alert col-4 noto_light">請選擇付款方式</small> -->

        </div>
        <!-- 選擇付款方式 end-->


        <!-- 確認配送資訊 -->
        <p class="noto_light ">確認配送資訊</p>
        <hr class="e_cart_hr">

        <div class="alert e_delivery_info_confirm" role="alert">
            <p class="noto_light e_info_confirm">姓名： <span>王小小</span> </p>
            <p class="noto_light e_info_confirm">地址：<span>112 台北市北投區有錢路1號1樓錢路1號1樓錢路1號1樓</span></p>
            <p class="noto_light e_info_confirm">手機：<span>0910－000111</span></p>
            <p class="noto_light e_info_confirm">配送時間：<span>不指定</span></p>

        </div>






        <div class="e_cart_btn">
            <button class="e_btn_outline noto_light">上 一 步</button>
            <button class="e_btn noto_light">確 認 結 帳</button>
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

<?php include __DIR__ . '/__html_foot.php' ?>