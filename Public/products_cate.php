<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

    <head>
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/products_cate.css">
    </head>


    <body>
    <header>
        <div class="w_product_cover"></div>
    </header>


    <section>
        <div class="w_product_big_box">
            <!------------ 以下為title區域 ------------>
            <div class="w_product_title">
                <p class="noto_regular  w_product_title_line">產品種類</p>
                <p class="en_font">Products</p>
            </div>
        </div>
        <!------------ 以上為title區域 ------------>


        <!------------ 以下為長麵區域 ------------>

        <div class="container-fluid wow slideInLeft">
            <div class="row justify-content-star">
                <img class="w_product_long_img" src="img/pages/others/product_long.png" alt="">
                <div class="w_product_longbox">
                    <a href="product_list_long.php">
                        <!--長麵連結位置-->
                        <p class="noto_regular_red  w_product_red_line">長麵</p>
                        <p class="en_font_red">Long</p>
                    </a>
                </div>
            </div>
        </div>
        <!------------ 以上為長麵區域 ------------>


        <!------------ 以下為短麵區域 ------------>
        <div class="container-fluid wow slideInRight">
            <div class="row justify-content-end">
                <img class="w_product_short_img" src="img/pages/others/product_short.png" alt="">
                <div class="w_product_shortbox">
                    <a href="product_short_cut.php">
                        <!--短麵連結位置-->
                        <p class="noto_regular_red  w_product_red_line">短麵</p>
                        <p class="en_font_red">Short Cut</p>
                    </a>
                </div>
            </div>
        </div>
        <!------------ 以上為短麵區域 ------------>


        <!------------ 以下為粒狀麵區域 ------------>
        <div class="container-fluid wow slideInLeft">
            <div class="row justify-content-star">
                <img class="w_product_minute_img" src="img/pages/others/product_minute.png" alt="">
                <div class="w_product_minutebox">
                    <a href="product_list_minute.php">
                        <!--粒狀麵連結位置-->
                        <p class="noto_regular_red  w_product_red_line">粒狀麵</p>
                        <p class="en_font_red">Minute</p>
                    </a>
                </div>
            </div>
        </div>

        <!------------ 以上為粒狀麵區域 ------------>


        <!------------ 以下為夾餡款區域 ------------>
        <div class="container-fluid wow slideInRight">
            <div class="row justify-content-end">
                <img class="w_product_stuffed_img" src="img/pages/others/product_stuffed.png" alt="">
                <div class="w_product_stuffedbox">
                    <a href="product_list_stuffed.php">
                        <!--夾餡款連結位置-->
                        <p class="noto_regular_red  w_product_red_line">夾餡款</p>
                        <p class="en_font_red">Stuffed</p>
                    </a>
                </div>
            </div>
        </div>
        <!------------ 以上為夾餡款區域 ------------>


        <!------------ 以下為特別款區域 ------------>
        <div class="container-fluid wow slideInLeft">
            <div class="row justify-content-star">
                <img class="w_product_specialty_img" src="img/pages/others/product_special.png" alt="">
                <div class="w_product_specialtybox">
                    <a href="product_list_specialty.php">
                        <!--特別款連結位置-->
                        <p class="noto_regular_red  w_product_red_line">特別款</p>
                        <p class="en_font_red">Specialty</p>
                    </a>
                </div>
            </div>
        </div>
        <!------------ 以上為特別款區域 ------------>


        <!------------ 以下為義大利麵醬區域 ------------>
        <div class="container-fluid wow slideInRight">
            <div class="row justify-content-end">
                <img class="w_product_sauce_img" src="img/pages/others/product_sauce.png" alt="">
                <div class="w_product_saucebox">
                    <a href="product_list_sauce.php">
                        <!--義大利麵醬連結位置-->
                        <p class="noto_regular_red  w_product_red_line">義大利麵醬</p>
                        <p class="en_font_red">Sauce</p>
                    </a>
                </div>
            </div>
        </div>
        <!------------ 以上為醬料區域 ------------>


        <!------------ 以下為組合包區域 ------------>
        <div class="container-fluid wow slideInLeft">
            <div class="row justify-content-star">
                <img class="w_product_giftSet_img" src="img/pages/others/product_giftset.png" alt="">
                <div class="w_product_giftSetbox">
                    <a href="product_list_gift_set.php">
                        <!--組合包連結位置-->
                        <p class="noto_regular_red  w_product_red_line">組合包</p>
                        <p class="en_font_red">Gift Set</p>
                    </a>
                </div>
            </div>
        </div>
        <!------------ 以上為組合包區域 ------------>


    </section>
    </div>
    <script>
        new WOW().init();
    </script>
    </body>

<?php include __DIR__ . '/__html_foot.php' ?>