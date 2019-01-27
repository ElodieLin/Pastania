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


        /* ------------以下是購物車商品-------------- */


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

/* ----------刷卡資訊----------  */

        .e_card_payment_info{
            margin: 20px 0 100px;
            border: 1px solid #5C7880;
        }
        .e_card_payment_info_body{
            padding: 2.5rem 1.5rem;
        }


        .e_card_payment_info .form-control{
            border: 1px solid #5C7880;
            height: calc(2.75rem);
            padding: .375rem .75rem;
            font-size: 1.2rem;
            line-height: 1.5;
            color: #5C7880;
            font-weight: 300;
        }
        .e_card_payment_info .form-control:focus{
            outline: 0;
            box-shadow: 0 0 0 0.2rem #C8DBD8;
        }
        
        .form-inline label{
            justify-content: flex-start;
        }

        .card_number{
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
            display: flex;
        }

        .e_col_1{
            flex: 0 0 22.5%;
            max-width: 23%;
            margin-right: 10px;
        }

        .e_select_outterwrap{
            max-width: 72%;
            flex: 100%;
        }
        .e_select_wrap{
            flex: 0 0 46.5%;
            max-width: 50%;
            display: flex;

        }
        .e_select_wrap select{
            flex: 0 0 38%;
            max-width: 100%;
        }
        .e_cvc_wrap{
            flex: 0 0 33.33%;
            max-width: 100%;

        }
        .e_col_2{
            max-width: 30%;

        }

        .e_card_payment_info .e_order_info_alert{
            color: #D3554A;
            font-size: 1rem;
            font-weight: 300;
        }

        .e_card_payment_notice{
            margin-top:3rem; 
            margin-bottom:3rem; 
            
        }
        .e_notice{
            margin-bottom: 1.5rem;
        }

        .e_card_payment_notice li{
            font-size: 1.2rem;
            padding: .2rem 0;
        }
       
        
        @media screen and (min-width: 768px){
            .e_select_wrap .col-md-3{
                flex: 0 0 37%;
                max-width: 40%;
            }
        }

        @media screen and (max-width:576px){

            .e_card_payment_notice li{
                font-size: 1rem;
   
                }
        }

        @media screen and (max-width:992px){
            .card_number, 
            .col-3, 
            .e_select_outterwrap, 
            .e_select_wrap, 
            .col-4,
            .e_cvc_wrap{
                flex: 100%;
                max-width: 100%;
            }
            .e_nm{
                margin: 0;
            }
            .form-group{
                margin-bottom: 0.75rem;
            }
            .e_col_2{
                max-width: 25%;
            }
            .e_col_1{
                flex: 0 0 25%;
                max-width: 23.1%;
            }
        }

/* select style */

        /*the container must be positioned relative:*/
        .e_custom_select {
            position: relative;
            border-radius: .3rem;
            border: 1px solid #5C7880;
            margin-bottom: 15px;
            font-size: 1.2rem;

        }

        .e_custom_select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {
            color: #5C7880;
            border: 1px solid #5C7880;
        }

        /*style the arrow inside the select element:*/
        .select-selected:after {
            position: absolute;
            content: "";
            top: 26px;
            right: 15px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #5C7880 transparent transparent transparent;
        }

        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #5C7880 transparent;
            top: 20px;
        }

        /*style the items (options), including the selected item:*/
        .select-items div,
        .select-selected {
            color: #5C7880;
            padding: 12px 16px;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;


        }

        /*style items (options):*/
        .select-items {
            box-sizing: border-box;
            position: absolute;
            top: 110%;
            width: 100%;
            left: 0;
            right: 0;
            z-index: 99;
            border-radius: .3rem;
            border: 1px solid #5C7880;
            background: #fff;

        }

        /*hide the items when the select box is closed:*/
        .select-hide {
            display: none;
        }


        .select-items div:hover,
        .same-as-selected {
            background-color: #C8DBD8;
            border-radius: .2rem;
        }

        .e_delivery_method {
            margin-bottom: 150px;
        }

        .e_terms {
            letter-spacing: 1px;
            font-size: 1rem;
            margin-bottom: 50px;
        }

        .e_terms a {
            text-decoration: underline;
            color: #5C7880;
        }

        .e_area_select .select-selected{
            padding: 0;
            border: none;
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



        <!-- 購物車商品 start -->
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
                <input class="form-check-input" type="radio" name="paymentOption" id="paymentOption1" value="ATM"
                    checked>
                <label class="form-check-label noto_light" for="paymentOption1">ATM匯款</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="paymentOption" id="paymentOption2" value="Card">
                <label class="form-check-label noto_light" for="paymentOption2">信用卡線上刷卡</label>
            </div>

            <!-- alert -->
            <!-- <small id="" class="form-text e_payment_method_alert col-4 noto_light">請選擇付款方式</small> -->

        </div>
        <!-- 選擇付款方式 end-->


        <!-- 刷卡資訊 -->
        <div class="card noto_light e_card_payment_info">
            <div class="card-body e_card_payment_info_body">

                <form class="">
                    <div class="form-group form-inline">
                        <label for="cardNumber" class="col-3  ">信用卡號*</label>
                        <div class="card_number">
                            <input type="text" class="form-control e_col_1" maxlength="4">
                            <input type="text" class="form-control e_col_1 " maxlength="4">
                            <input type="text" class="form-control e_col_1 " maxlength="4">
                            <input type="text" class="form-control e_col_1 e_nm" maxlength="4">
                        </div>
                        <!-- alert -->
                        <small id="" class="form-text e_order_info_alert col-4">請輸入有效卡號</small>
                    </div>


                    <div class="form-group form-inline ">
                        <label for="cardHolder" class="col-3 ">持卡人*</label>
                        <input type="text" class="form-control col-4">

                        <!-- alert -->
                        <small id="" class="form-text e_order_info_alert col-4">請輸入持卡人姓名</small>
                    </div>


                    <div class=" form-group form-inline">
                        <label for="expiryDate" class="form-group col-3 ">有效年月*</label>
                        <div class="form-inline e_select_outterwrap">

                            <div class="e_select_wrap e_area_select">
                                <div class="e_custom_select form-control col-md-3 e_margin_b noto_light">
                                    <select id="" class="">
                                        <option selected>請選擇</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                    </select>
                                </div>
                                <span class="mx-2">年</span>
                                <div class="e_custom_select form-control col-md-3 e_margin_b noto_light ">
                                    <select id="" class="" size="5">
                                        <option selected>請選擇</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <span class="mx-2">月</span>
                            </div>
                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入正確有效年月</small>
                        </div>
                    </div>


                    <div class="form-group form-inline ">
                        <label for="CVC" class="col-3 ">卡片背面末三碼*</label>
                        <div class="e_cvc_wrap">
                            <input type="text" class="form-control e_col_2" maxlength="3">
                        </div>

                        <!-- alert -->
                        <small id="" class="form-text e_order_info_alert col-4">請輸入正確末三碼</small>
                    </div>
                </form>

                <div class="e_card_payment_notice">
                    <label for="notice" class="col-3 e_notice">注意事項</label>
                    <ul>
                        <li>請確認您的訂單資料正確，再輸入您的信用卡資訊。</li>
                        <li>本頁面已使用 256-bit SSL 安全加密機制。</li>
                        <li>為確保網路交易安全，您同意本公司得就此筆交易向發卡銀行、收單銀行及持卡人核對是否屬實。</li>
                        <li>若您同意以上約定付款程序，請按「送出」以完成本次交易。</li>
                        <li>非經持卡人同意，如有冒用他人卡片盜刷之行為，刑法最高判五年有期徒刑。</li>
                        <li>信用卡成功交易之否認，如經判定為本人或授權刷卡的行為，相關損失、費用須自行負擔 。</li>
                    </ul>
                </div>

            </div>
        </div>


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


    <script>
        var x, i, j, selElmnt, a, b, c;
        /*look for any elements with the class "e_custom_select":*/
        x = document.getElementsByClassName("e_custom_select");
        for (i = 0; i < x.length; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < selElmnt.length; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function (e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < s.length; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            for (k = 0; k < y.length; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function (e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }
        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            for (i = 0; i < y.length; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < x.length; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>


</body>

<?php include __DIR__ . '/__html_foot.php' ?>