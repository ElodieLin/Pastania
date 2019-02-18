<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php include __DIR__. '/__html_head.php' ?>
<?php include __DIR__. '/__navbar.php' ?>

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Arya|Reem+Kufi" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    



    <section>
        <div class="w_index_wrapper_one">


            <div class="w_index_dish_box">
                <img class="w_index_dish_img" src="img/pages/index/landing_dish.png" alt="">
            </div>
            <!-- 以下叉子標題、叉子、盤子、左右按鈕圖片設定 -->

            <!-- 以下叉子背景設定 -->
            <div class="w_index_landing_bg">
                <div class="w_index_landing_bg_in_gray"></div>
                <img src="img/pages/index/landing_bg.png" alt="">
            </div>
            <!-- 以上叉子背景設定 -->
        </div>


        <!-------- 以下為叉子slider區域 -------->

        <div class="w_fork_slider_box  owl-carousel owl-theme">

            <div class="w_fork_item item">
                <h2 class="w_index_en_font_title_red   text-center">Long</h2>
                <h3 class="w_index_noto_regular_title_red   text-center">長麵</h3>
                <!-------- 長麵連結位置 -------->
                <a href="product_list_long.php">
                    <img src="img/pages/index/long.svg" alt="">
                </a>
            </div>
            <div class="w_fork_item item">
                <h2 class="w_index_en_font_title_red   text-center">Short cut</h2>
                <h3 class="w_index_noto_regular_title_red   text-center">短麵</h3>
                <!-------- 短麵連結位置 -------->
                <a href="product_short_cut.php">
                    <img src="img/pages/index/short.svg" alt="">
                </a>
            </div>
            <div class="w_fork_item item">
                <h2 class="w_index_en_font_title_red   text-center">Minute</h2>
                <h3 class="w_index_noto_regular_title_red   text-center">粒狀麵</h3>
                <!-------- 粒狀麵連結位置 -------->
                <a href="product_list_minute.php">
                    <img src="img/pages/index/minute.svg" alt="">
                </a>
            </div>
            <div class="w_fork_item item">
                <h2 class="w_index_en_font_title_red   text-center">Stuffed</h2>
                <h3 class="w_index_noto_regular_title_red   text-center">夾餡款</h3>
                <!-------- 夾餡款連結位置 -------->
                <a href="product_list_stuffed.php">
                    <img src="img/pages/index/stuffed-01.png" alt="">
                </a>
            </div>
            <div class="w_fork_item item">
                <h2 class="w_index_en_font_title_red   text-center">Specialty</h2>
                <h3 class="w_index_noto_regular_title_red   text-center">特別款</h3>
                <!-------- 特別款連結位置 -------->
                <a href="product_list_specialty.php">
                    <img src="img/pages/index/special.svg" alt="">
                </a>
            </div>


        </div>
        <!-------- 以上為叉子slider區域 -------->




        <div class="w_index_wrapper_two">
            <!------------ 以下為活動title區域 ------------>
            <div class="w_index_events_title">
                <p class="w_index_noto_regular  w_index_events_title_line">特別活動</p>
                <p class="w_index_en_font">Events</p>
            </div>
            <!------------ 以上為活動title區域 ------------>
        </div>




        <!------------ 以下為活動slider區域 ------------>

        <div class="w_index_event_slider_box  owl-carousel owl-theme">
            <div class="w_index_event_item item">
                <img class="w_event_web_j   w-100" src="img/pages/index/banner_j.png" alt="">
                <img class="w_event_mobil_j   w-100" src="img/pages/index/banner_j_mobile.png" alt="">
                <div class="w_event_slider_btn  carousel-caption  d-md-block">
                    <!-------- 手作課 了解更多按鈕連結位置 -------->
                    <a href="event_j.php" class="w_event_slider_btn_bg  w_index_noto_light   btn">
                        了解更多
                    </a>
                </div>
            </div>
            <div class="w_index_event_item item">
                <img class="w_event_web_f    w-100" src="img/pages/index/banner_f.png" alt="">
                <img class="w_event_mobil_f   w-100" src="img/pages/index/banner_f_mobile.png" alt="">
                <div class="w_event_slider_btn   carousel-caption  d-md-block">
                    <!-------- 情人節 了解更多按鈕連結位置 -------->
                    <a href="event_f.php" class="w_event_slider_btn_bg  w_index_noto_light   btn">
                        了解更多
                    </a>
                </div>
            </div>
        </div>
        <!------------ 以上為活動slider區域------------>






        <div class="w_index_wrapper_three">
            <!------------ 以下為品牌宣言title區域 ------------>
            <div class="w_index_declaration_title">
                <p class="w_index_noto_regular  w_index_declaration_title_line">品牌宣言</p>
                <p class="w_index_en_font">Declaration</p>
            </div>
            <!------------ 以上為品牌宣言title區域 ------------>
            <div class="w_index_declaration_word_box">
                <div data-aos="zoom-in" class="w_index_declaration_word_box_in_one">
                    <img class="w_index_declaration_img" src="img/pages/index/declaration_durum.png" alt="">
                </div>

                <div class="w_index_declaration_word_box_in_two">
                    <div class="w_index_declaration_blue_bg"></div>
                </div>

                <div class="w_index_declaration_word_box_in_three">
                    <p class="w_index_en_font_declaration_red">100%</p>
                    <p class="w_index_noto_regular_declaration_red">杜蘭小麥粉</p>
                    <div class="w_index_declaration_word_line"></div>
                    <p class="w_index_noto_regular_small">堅持選用含有豐富礦物質、蛋白質與維他命的杜蘭小麥粉，給您最好的品質。</p>
                    <img class="w_index_wheat" src="img/pages/index/index_wheat.png" alt="">
                </div>
            </div>
        </div>


        <div class="w_index_wrapper_three">
            <div class="w_index_declaration_word_box">
                <div class="w_index_declaration_word_box_in_one">
                    <!-- 手機版圖片位置 -->
                    <img data-aos="zoom-in" class="w_index_declaration_img_moblie" src="img/pages/index/declaration_made.png" alt="">
                </div>

                <div class="w_index_declaration_word_box_in_two">
                    <div class="w_index_declaration_yellow_bg"></div>
                </div>

                <div class="w_index_declaration_word_box_in_three_left">
                    <p class="w_index_en_font_declaration_red">100%</p>
                    <p class="w_index_noto_regular_declaration_red">義大利製造</p>
                    <div class="w_index_declaration_word_line"></div>
                    <p class="w_index_noto_regular_small">百分之百義大利原裝進口，從小麥的種植採收到生產
                        製造，全程都由我們細心把關。</p>
                    <img class="w_index_made_in_italy" src="img/pages/index/index_made_in_italy.png" alt="">
                </div>

                <div class="w_index_declaration_word_box_in_one">
                    <img data-aos="zoom-in" class="w_index_declaration_img   w_index_declaration_img_web" src="img/pages/index/declaration_made.png"
                        alt="">
                </div>
            </div>
        </div>


        <div class="w_index_wrapper_three">
            <div class="w_index_declaration_word_box">
                <div class="w_index_declaration_word_box_in_one">
                    <img data-aos="zoom-in" class="w_index_declaration_img" src="img/pages/index/declaration_type.png" alt="">
                </div>

                <div class="w_index_declaration_word_box_in_two">
                    <div class="w_index_declaration_blue_bg1"></div>
                </div>

                <div class="w_index_declaration_word_box_in_three">
                    <p class="w_index_noto_regular_title_red">豐富麵條選擇</p>
                    <div class="w_index_declaration_word_line"></div>
                    <p class="w_index_noto_regular_small">擁有百種義大利麵，提供您更多的選擇。</p>
                </div>
            </div>
        </div>



        <div class="w_index_wrapper_three">
            <div class="w_index_declaration_word_box">
                <div class="w_index_declaration_word_box_in_one">
                    <!-- 手機版圖片位置 -->
                    <img data-aos="zoom-in" class="w_index_declaration_img_moblie" src="img/pages/index/declaration_health.png" alt="">
                </div>

                <div class="w_index_declaration_word_box_in_two">
                    <div class="w_index_declaration_red_bg"></div>
                </div>

                <div class="w_index_declaration_word_box_in_three_left">
                    <p class="w_index_noto_regular_title_red">健康飲食</p>
                    <div class="w_index_declaration_word_line"></div>
                    <p class="w_index_noto_regular_small">義大利麵屬於低GI食物，能減緩升醣數度，
                        對人體健康無負擔。</p>
                    <img class="w_index_health_food" src="img/pages/index/declaration_health_food.svg" alt="">
                </div>

                <div class="w_index_declaration_word_box_in_one">
                    <img data-aos="zoom-in" class="w_index_declaration_img   w_index_declaration_img_web" src="img/pages/index/declaration_health.png"
                        alt="">
                </div>
            </div>
        </div>








    </section>

    <!-- aos動畫特效設定 -->
    <script src="js/aos.js"></script>
   

    <script>
        $('.w_fork_slider_box').owlCarousel({
            animateOut: 'bounceOutLeft',
            animateIn: 'bounceInRight',
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<img src='img/icon/left.svg'>", "<img src='img/icon/right.svg'>"],
            navclass: ["owl-prev", "owl-next"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });


        $('.w_index_event_slider_box').owlCarousel({
            animateOut: 'fadeOutLeft',
            animateIn: 'fadeInRight',
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<img src='img/icon/left.svg'>", "<img src='img/icon/right.svg'>"],
            navclass: ["owl-prev", "owl-next"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });



                //aos動畫特效設定
                $(function () {
            AOS.init({
                delay: 100,
                easing: 'ease-in-out'
            });
        })
    </script>


<?php include __DIR__. '/__html_foot.php' ?>