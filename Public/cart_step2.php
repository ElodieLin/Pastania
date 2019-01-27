<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>
<?php 
session_start();
//$_SESSION['cart']='';
$_SESSION['cart']=$_POST;
?>

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


        /* ----------- 以上是模組 ------------- */



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

        /* ---------- 控制 process bar 第幾顆變色 ----------- */
        .active_step .e_col_5:nth-child(2) .process_step {
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




        /* --------------------- 以下是選單 --------------------- */


        .e_col_4 {
            width: 45%;
        }

        @media screen and (max-width: 992px) {
            .e_col_4 {
                width: 100%;
            }

        }

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



        /* -------------------- 選單 end --------------------- */

/* -------------------- 訂購資料顯示 （會員） --------------------- */

        /* .e_member_delivery_info{
            display: none;
        } */
/* -------------------- 訂購資料及配送資訊（首次）顯示 --------------------- */

        /* .e_first_order_delivery_info{
            display: none;
        } */


/* -------------------- 訂購資料及配送資訊 --------------------- */
        .e_first_order_info{
            margin: 20px 0 100px;
            border: 1px solid #5C7880;
            
        }
        .e_save_add{
            background: #5C7880;
            color: #fff;
            font-family:  'Noto Sans TC';
            font-size: 1rem;
            font-weight: 200;
            margin-left: 10px;
            letter-spacing: 1px;
            padding: 10px 14px;
        }
        .e_save_add:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem #C8DBD8;

        }

        .e_first_order_info_body{
            padding: 2.5rem 1.5rem;

        }
        .e_first_order_info_body .form-group{
            margin: 0;
            margin-top: 1rem;

        }
        .e_first_order_info_body small{
            font-family:  'Noto Sans TC';
            font-size: 1rem;
            font-weight: 300;
            color: #5C7880;

        }
        .e_first_order_info_body .e_order_info_alert{
            color:#D3554A;
           }

        .e_first_order_info_body .form-control{            
            border: 1px solid #5C7880;
            height: calc(2.75rem);
            padding: .375rem .75rem;
            font-size: 1.2rem;
            line-height: 1.5;
            color: #5C7880;
            font-weight: 300;
        }
        .e_first_order_info_body .form-control::placeholder{
            font-family:  'Noto Sans TC';
            font-size: 1.2rem;
            letter-spacing: 1px;
            font-weight: 100;
            color: #5C7880;

        }
        .e_first_order_info_body .form-control:focus{
            outline: 0;
            box-shadow: 0 0 0 0.2rem #C8DBD8;
        }

        .e_first_order_info_body .col-3{
            max-width: 19%;
        }

        .e_first_order_info_body
        .form-inline label{
            justify-content: flex-start;
        }

        .e_margin_b{
            margin-bottom: 17px;
        }

        .e_col_4_add .e_col_zip{
            width: 20%;
        }

        .e_col_4_add{
            width: 57%;
        }
        .e_col_3{
            max-width: 18%;
            flex: 0 0 25%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;

        }

        @media screen and (min-width: 300px){
            .form-inline .form-control {
                display: inline-block;
                width: 31.5%;
                vertical-align: middle;
            }
        }

        @media screen and (max-width: 520px) {
            .col-sm-2{
                width: 25%;
            }
            .e_first_order_info_body {
                padding: 2.5rem 1rem;
            }
            .e_first_order_info_body .form-control{
                font-size: 1.1rem;
                letter-spacing: normal;
            }

        }

        @media screen and (max-width:768px){
            .col-9 {
            flex: 100%;
            max-width: 100%;
            }
            .col-sm-2{
                width: 20%;
            }
            .e_time_select .e_col_3{
            max-width: 100%;
            padding: 0;
            }
        }
        

        @media screen and (max-width: 992px) {
            .e_none_display_m, .e_first_order_info_body .col-3{
                display: none;

            }
            .e_first_order_info_body .col-4{
                max-width: 100%;
                flex: 100%;
            }
            .e_col_4_add{
                width: 100%;
                
            }
            .col-7 {
                flex: 100%;
                max-width: 100%;
            }

            .col-9 {
                flex: 100%;
                max-width: 100%;
            }

            .e_col_3{
            max-width: 25%;
            }

            .e_save_add{
            margin-left: 0px;
            margin-top: 10px;
         
            }


        }




/* -------------------- 發票資訊 --------------------- */

        .e_receipt_info_text{
            margin-top: 50px;
            font-size: 1.2rem;
        }

        .e_agree_terms{
            margin-top: 50px;
            font-size: 1.2rem;

        }


        .e_agree_terms a{
            text-decoration: underline;
            color: #5C7880;
        }

        input[type=checkbox]{
            margin-top: 10px;
        }
        .e_agree_terms_text{
            font-size: 1.2rem;
        }

        .e_agree_terms_alert{
            color: #D3554A;
            font-size: 1rem;
            margin: 10px 0 0 22px;  
            display: block; 
        }

        @media screen and (max-width: 576px) {
            .e_receipt_info .e_receipt_info_text{
                font-size: 1.1rem;

            }
            .e_receipt_info .e_agree_terms .e_agree_terms_text{
                font-size: 1.1rem;

            }

        }

     

     /* form display none */
     .e_search_postcode_form, .e_branches_select {
         display: none;
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

        <div class="e_delivery_method">
            <p class="noto_light ">選擇取貨方式</p>
            <hr class="e_cart_hr">

            <div class="e_custom_select e_col_4 noto_light">
                <select>
                    <option value="0">選擇取貨方式</option>
                    <option value="1">7-11取貨付款 &nbsp; &nbsp; &nbsp;NT$ 60</option>
                    <option value="2">7-11純取貨&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NT$ 60</option>
                    <option value="3" selected>宅配到府&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NT$ 100</option>

                </select>
            </div>

            <p class="noto_light e_terms"><a href="">閱讀物流條款</a></p>
        </div>

 <!-- 選擇門市表單 (選擇7-11取貨才顯示)-->
        <form class="form-inline e_search_postcode_form">
                <div class="form-group e_select_branches">

                    <label for="selectBranches" class="noto_light">選擇門市</label>

                    <input type="search" id="" class="e_form_control mx-sm-3 noto_light" maxlength="5" placeholder="請輸入郵遞區號">


                    <!--      未選門市的alert         -->
                    <small class="noto_light e_select_branches_alert">
                        請選擇門市
                    </small>
                </div>
            </form>

            <div class="e_custom_select e_col_4 noto_light e_branches_select">
                <select>
                    <option value="0">對照郵遞區號顯示城市地區鄰里</option>
                    <option value="1">崇尚門市 （店號：991942）<br>40646 台中市北屯區崇德路二段450號1樓
                    </option>
                    <option value="2">鑫巴黎門市 （店號：136886）<br>40646 台中市北屯區崇德路二段119號1樓</option>

                </select>
            </div>


        <!--    會員配送資訊    -->
        <div class="e_member_delivery_info">
            <p class="noto_light ">配送資訊</p>
            <div class="form-check e_same_as_member_info noto_light mt-5">
                <input class="form-check-input" type="checkbox" value="" id="sameAsMemberInfo">
                <label class="form-check-label" for="sameAsMemberInfo">
                    同會員資料
                </label>
            </div>
            <div class="card e_first_order_info">
                <div class="card-body e_first_order_info_body">

                    <form class="noto_light">

                        <div class="form-group form-inline ">
                            <label for="recipient" class="col-3 e_none_display_m">收件人姓名*</label>
                            <input type="text" class="form-control col-4" id="" placeholder="收件人姓名*">

                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入收件人姓名</small>
                        </div>

                        <div class="form-inline">
                            <small class="col-3 e_none_display_m"></small>
                            <small id="" class="form-text col-9 ">
                                務必填寫完整收件人姓名，避免包裹無法順利簽收
                            </small>

                        </div>

                        <div class="form-group form-inline ">
                            <label for="phoneNumber" class="col-3 e_none_display_m">手機*</label>
                            <input type="text" class="form-control col-4" id="" placeholder="手機*">

                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入手機號碼</small>
                        </div>


                        <div class="form-group form-inline">
                            <label for="deliverAddress" class="form-group col-3 e_none_display_m">地址*</label>
                            <div class=" form-inline e_col_4_add e_area_select">

                                <input type="text" class="form-control e_col_zip col-sm-3 e_margin_b" placeholder="郵遞區號">


                                <div class="e_custom_select form-control col-md-3 mx-2 e_margin_b noto_light">
                                    <select id="" class=" ">
                                        <option selected>選擇縣市</option>
                                        <option>...</option>
                                    </select>
                                </div>

                                <div class="e_custom_select form-control col-md-3 e_margin_b noto_light">
                                    <select id="" class="">
                                        <option selected>選擇地區</option>
                                        <option>...</option>
                                    </select>
                                </div>


                                <input type="text" class="form-control col-7" id="" placeholder="地址*">

                                <button type="submit" class="btn e_save_add">加入常用地址</button>

                                <!-- alert -->
                                <small id="" class="form-text e_order_info_alert col-4">請輸入完整地址</small>

                            </div>
                        </div>

                        <div class="mb-3 form-group e_time_select">
                            <label for="deliverTime" class="form-group e_col_3 mb-3">配送時段</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="timeSelect" id="deliverInMorning"
                                    value="option1">
                                <label class="form-check-label" for="deliverInMorning">8:00-13:00 </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="timeSelect" id="deliverInAfternoon"
                                    value="option2">
                                <label class="form-check-label" for="deliverInAfternoon">14:00-18:00</label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="timeSelect" id="deliverNotSpecify"
                                    value="option3" checked>
                                <label class="form-check-label" for="deliverNotSpecify">不指定</label>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!--    訂購資料（首次購物才顯示）    -->
        <div class="e_first_order_delivery_info">
            <p class="noto_light ">訂購資料及配送資訊</p>
            <div class="card e_first_order_info">
                <div class="card-body e_first_order_info_body">

                    <form class="noto_light">

                        <div class="form-group form-inline ">
                            <label for="memberEmail" class="col-3 e_none_display_m ">會員信箱*</label>
                            <input type="email" class="form-control col-4" placeholder="會員信箱*">

                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入完整信箱</small>
                        </div>
                        <div class="form-inline">
                            <small class="col-3 e_none_display_m"></small>
                            <small id="" class="form-text col-9 ">
                                待訂單成立後E-mail將會成為您的會員帳號，請務必確認是否填寫正確
                            </small>
                        </div>

                        <div class="form-group form-inline ">
                            <label for="setPassword" class="col-3 e_none_display_m">設定密碼*</label>
                            <input type="password" class="form-control col-4" placeholder="設定密碼*">

                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入密碼</small>
                        </div>

                        <div class="form-group form-inline ">
                            <label for="setPassword" class="col-3 e_none_display_m">密碼確認*</label>
                            <input type="password" class="form-control col-4" placeholder="密碼確認*">

                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入正確密碼</small>
                        </div>

                        <div class="form-group form-inline ">
                            <label for="recipient" class="col-3 e_none_display_m">收件人姓名*</label>
                            <input type="text" class="form-control col-4" placeholder="收件人姓名*">

                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入收件人姓名</small>
                        </div>

                        <div class="form-inline">
                            <small class="col-3 e_none_display_m"></small>
                            <small id="" class="form-text col-9 ">
                                務必填寫完整收件人姓名，避免包裹無法順利簽收
                            </small>

                        </div>

                        <div class="form-group form-inline ">
                            <label for="phoneNumber" class="col-3 e_none_display_m">手機*</label>
                            <input type="text" class="form-control col-4" placeholder="手機*">

                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入手機號碼</small>
                        </div>


                        <div class=" form-group form-inline">
                            <label for="deliverAddress" class="form-group col-3 e_none_display_m">地址*</label>
                            <div class="form-inline e_col_4_add e_area_select">

                                <input type="text" class="form-control e_col_zip col-sm-3 e_margin_b" placeholder="郵遞區號">


                                <div class="e_custom_select form-control col-md-3 mx-2 e_margin_b noto_light">
                                    <select id="" class=" ">
                                        <option selected>選擇縣市</option>
                                        <option>...</option>
                                    </select>
                                </div>

                                <div class="e_custom_select form-control col-md-3 e_margin_b noto_light">
                                    <select id="" class="">
                                        <option selected>選擇地區</option>
                                        <option>...</option>
                                    </select>
                                </div>


                                <input type="text" class="form-control col-7" id="" placeholder="地址*">

                                <!-- alert -->
                                <small id="" class="form-text e_order_info_alert col-4">請輸入地址</small>
                            </div>
                        </div>

                        <div class="mb-3 form-group e_time_select">
                            <label for="deliverTime" class="form-group e_col_3 mb-3">配送時段</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="timeSelect" id="deliverInMorning1"
                                    value="option1">
                                <label class="form-check-label" for="deliverInMorning1">8:00-13:00 </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="timeSelect" id="deliverInAfternoon1"
                                    value="option2">
                                <label class="form-check-label" for="deliverInAfternoon1">14:00-18:00</label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="timeSelect" id="deliverNotSpecify1"
                                    value="option3" checked>
                                <label class="form-check-label" for="deliverNotSpecify1">不指定</label>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>



        <!--    發票資訊    -->
        <div class="e_receipt_info container">
            <p class="noto_light ">發票資訊</p>
            <hr class="e_cart_hr">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="receiptSelect" id="receiptOption1" value="option1"
                    checked>
                <label class="form-check-label noto_light" for="receiptOption1">電子發票</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="receiptSelect" id="receiptOption2" value="option2">
                <label class="form-check-label noto_light" for="receiptOption2">紙本發票</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="receiptSelect" id="receiptOption3" value="option3">
                <label class="form-check-label noto_light" for="receiptOption3">捐贈發票</label>
            </div>

            <div class="e_receipt_info_text noto_light">
                <p>※發票統一捐贈單位為伊甸社會福利基金會</p>
                <p>※依統一發票使用辦法規定：發票一經開立不得任意更改或改開發票</p>
                <p>核准文號：北區國稅北縣三字第1000002660號，電子發票說明</p>
            </div>
            <div class="form-check e_agree_terms">
                <input class="form-check-input e_agree_terms_checkbox" type="checkbox" value="" id="agreeTerms">
                <label class="form-check-label noto_light e_agree_terms_text" for="agreeTerms">
                    我同意接<a href="">Pastania服務條款</a>和<a href="">隱私權政策</a>
                </label>

            </div>

            <!--      未勾選同意的alert         -->
            <small class="noto_light e_agree_terms_alert">
                請閱讀並勾選同意服務條款及隱私權政策
            </small>
        </div>

        <!--  btn  -->
        <div class="e_cart_btn container">
            <button class="e_btn_outline noto_light">上 一 步</button>
            <button class="e_btn noto_light">下 一 步</button>
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