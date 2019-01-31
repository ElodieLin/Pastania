<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/cart_step4_ATM.css">

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
            <form action="cart_step5.php" method="post">
                <button class="e_btn_outline noto_light">上 一 步</button>
                <button class="e_btn noto_light" type="submit">確 認 結 帳</button>
            </form>
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