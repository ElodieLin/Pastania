<?php

require __DIR__ . '/__connect_db.php';

$productID = $_GET['product'];

$p_sql = sprintf("SELECT * FROM giftbox WHERE sid = $productID LIMIT 1");
$p_stmt = $pdo->query($p_sql);

while ($row = $p_stmt->fetch(PDO::FETCH_ASSOC)) {
    $product = $row;
}

// sauce_info query (description & ingredient)
$sauceID = $_GET['sauce'];

$s_sql = sprintf("SELECT giftbox.*, sauce_info.Description as soase_des, sauce_info.Ingredient as ingredient FROM giftbox join sauce_info on giftbox.sauce_sid = sauce_info.sid WHERE giftbox.sid = $sauceID");


$s_stmt = $pdo->query($s_sql);



while ($row_s = $s_stmt->fetch(PDO::FETCH_ASSOC)) {
    $sauce = $row_s;
}




// product_info query (pasta)
$pastaID = $_GET['pasta'];
$n_sql = sprintf("SELECT giftbox.*, product_info.Description as pasase_des FROM giftbox join product_info on giftbox.productinfo_sid = product_info.sid WHERE giftbox.sid = $pastaID");
$n_stmt = $pdo->query($n_sql);

while ($row_n = $n_stmt->fetch(PDO::FETCH_ASSOC)) {
    $pasta = $row_n;
}

?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

    <head>
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/product_giftset_detail.css">
    </head>


    </head>

    <body>
    <div class="w_container">
        <div class="w_product_giftset_detail_wrapper_one">
            <div class="w_product_giftset_detail_bg">
                <div class="w_product_giftset_detail_img_box">
                    <!-- 以下醬料圖片位置 -->
                    <img class="w_product_giftset_detail_img" src="img/giftbox/<?= $product['Image']; ?>.png">
                </div>
            </div>


            <div class="w_product_giftset_detail_word">
                <!-- 以下為麵包屑區域 -->
                <div class="w_product_giftset_detail_breadcrumbs_box   product_detail_small_noto_thin_b">
                    <a href="">
                        <span class="w_product_giftset_detail_breadcrumbs_ch">產品種類</span>
                        <span class="w_product_giftset_detail_breadcrumbs_en">Products</span>
                    </a>
                    <span>></span>

                    <a href="product_list_gift_set.php">
                        <span class="w_product_giftset_detail_breadcrumbs_ch">組合包</span>
                        <span class="w_product_giftset_detail_breadcrumbs_en">Gift Set</span>
                    </a>
                    <span>></span>

                    <a href="">
                        <span class="w_product_giftset_detail_breadcrumbs_ch"><?= $product['Name_Ch']; ?></span>
                        <span class="w_product_giftset_detail_breadcrumbs_en"><?= $product['Name_En']; ?></span>
                    </a>
                </div>
                <!-- 以上為麵包屑區域 -->


                <!-- 以下為品名區域 -->
                <div class="w_product_giftset_detail_bigtitle">
                    <div class="en_font">
                        <p><?= $product['Name_En']; ?></p>
                        <p class="noto_thin"><?= $product['Name_Ch']; ?></p>
                    </div>
                    <span class="heart_p"><i class="far fa-heart"></i></span>
                    <!-- <img src="img/icon/like.svg" alt=""> -->

                </div>
                <!-- 以上為品名區域 -->


                <div class="w_product_giftset_detail_star_box">
                    <div class="w_product_giftset_detail_star_box_in">
                        <img class="w_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_review1" src="img/icon/review1_red.svg" alt=""><!-- 空的星星 -->
                        <p class="product_detail_small_en_font_b   star_padi_one">4</p>
                        <p class="product_detail_small_en_font   star_padi_two">|</p>
                        <p class="product_detail_small_en_font_b   star_padi_two"> 2 Reviews</p>
                    </div>
                    <br>
                    <div class="w_product_giftset_detail_star_box_in_money">
                        <p class="product_detail_big_en_font_b2">NT＄ <?= $product['Price']; ?></p>
                        <p class="product_detail_small_noto_thin">全站購物滿千免運</p>
                    </div>
                </div>


                <div class="w_product_giftset_detail_word_box_in">
                    <br>
                    <p class="product_detail_small_noto_thin_b">淨重：1000g</p>
                    <div class="w_product_giftset_detail_number">
                        <!-- 在這裡插入加減數字欄位 -->
                        <input type="text" class="input-number">
                    </div>
                </div>
                <br>
                <div class="w_product_giftset_detail_cart_btn    product_detail_noto_light_big">
                    <a class="w_product_giftset_detail_transition" href="">加入購物車</a>
                    <!-------- 橘色大按鈕連結------->
                </div>
            </div>
        </div>
    </div>


    <!------- 以下為三個icon設定 ------->
    <div class="w_product_giftset_detail_wrapper_three">
        <div class="row   w_product_giftset_detail_icon">
            <div class="col-md-4 col-4">
                <img src="img/icon/time.svg" alt="">
                <p class="noto_light"><?= $product['cook_time']; ?> mins</p>
            </div>
            <div class="col-md-4 col-4">
                <img src="img/icon/ruler.svg" alt="">
                <p class="noto_light"><?= $product['length']; ?></p>
            </div>
            <div class="col-md-4 col-4">
                <img src="img/icon/width.svg" alt="">
                <p class="noto_light"><?= $product['diameter']; ?></p>
            </div>
        </div>
    </div>
    <!------- 以上為三個icon設定 ------->


    <!------- 以下為商品介紹、原料區域設定 ------->
    <div class="w_product_giftset_detail_wrapper_orange">
        <div class="row">
            <div class="col-md-7">
                <div class="w_product_giftset_detail_cook_step">
                    <p class="noto_regular">商品介紹</p>
                    <div class="w_product_giftset_detail_cook_title_line"></div>
                    <p class="en_font">Description</p>
                    <!------- 商品介紹文字 ------->
                    <p class="noto_thin">
                        <?= $sauce['soase_des'] ?>

                        <br>
                        <br>
                        <?= $pasta['pasase_des'] ?>

                        <br>
                        <br>
                        <?= $product['Description']; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="w_product_giftset_detail_cook_material">
                    <p class="noto_regular">原料</p>
                    <div class="w_product_giftset_detail_cook_title_line_two"></div>
                    <p class="en_font">Ingredient</p>
                    <!------- 原料文字 ------->
                    <p class="noto_thin">

                    <?= $sauce['ingredient'];?>
                        <!-- 番茄<br> -->
                        <!-- 橄欖油<br>
                        鳳尾魚<br>
                        橄欖<br>
                        酸豆<br>
                        大蒜<br> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!------- 以上為商品介紹、原料區域設定 ------->


    <div class="w_product_giftset_detail_wrapper_two">
        <!------------ 以下為推薦食譜區域 ------------>
        <div class="w_product_giftset_detail_wrapper_one">
            <div class="w_product_giftset_detail_recipe_bg">
                <img src="img/pages/others/product_detail_recipe_bg.jpg" alt="">
            </div>
            <div class="col-md-3 w_product_giftset_detail_recipe_title">
                <img src="img/icon/chef2.svg" alt="">
                <p class="product_detail_noto_light_big">推 薦 食 譜</p>


                <div class="w_product_giftset_detail_recipe_title_btn">
                    <a class="w_product_giftset_detail_transition" href="recipe_detail.php?<?= $product['recipe_sid']; ?>&recipe=<?= $product['recipe_sid']; ?>">了解更多</a>
                </div>
            </div>
        </div>
        <!------------ 以上為推薦食譜區域 ------------>


        <!--------------------- 以下為評價區域 --------------------->
        <div class="w_product_giftset_detail_wrapper_three_two">
            <!------------ 以下為評價title區域 ------------>
            <div class="col-md-6 w_product_giftset_detail_title">
                <p class="noto_regular  w_product_giftset_detail_title_line">評價</p>
                <p class="en_font">Reviews</p>
            </div>
            <!------------ 以上為評價title區域 ------------>
            <div class="row">
                <div class="col w_bottom_review_star_box">
                    <img src="img/icon/review2_red.svg" alt="">
                    <p class="product_detail_small_two_en_font_b">4 | 2 Reviews</p>
                </div>
            </div>


            <div class="w_bottom_review_word_box">


                <div class="w_bottom_review_word_one">
                    <div class="w_bottom_review_ciecle_box">
                        <div class="w_bottom_review_ciecle   product_detail_big_en_font_r ">L</div>
                    </div>
                    <p class="product_detail_big_en_font_r ">Miss Lee</p>
                </div>


                <div class="w_bottom_review_word_two">
                    <!-- 以下這邊沿用最上面使用過的星星 -->
                    <div class="w_bottom_review_star_bigbox">
                        <div class="w_bottom_review_star_bigbox_in">
                            <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                            <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                            <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                            <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                            <img class="w_bottom_review1" src="img/icon/review1_red.svg" alt=""><!-- 空的星星 -->
                        </div>
                    </div>
                    <!-- 以上這邊沿用最上面使用過的星星 -->
                    <br>
                    <div class="w_product_giftset_detail_star_box_wordin">
                        <p class="noto_thin">無意間發現的義大利麵品牌，又有食譜教學
                            對沒有習慣自炊小資族簡單輕鬆好上手！
                            口感吃起來沒話說！推！</p>
                    </div>
                </div>


                <div class="w_bottom_review_word_three">
                    <p class="product_detail_big_en_font_r ">12/03/2018</p>
                </div>


            </div>
            <div class="w_bottom_review_word_line"></div><!-- 平價欄位區隔線 -->


            <div class="w_bottom_review_word_box">


                <div class="w_bottom_review_word_one">
                    <div class="w_bottom_review_ciecle_box">
                        <div class="w_bottom_review_ciecle   product_detail_big_en_font_r ">L</div>
                    </div>
                    <p class="product_detail_big_en_font_r ">Miss Lee</p>
                </div>


                <div class="w_bottom_review_word_two">
                    <!-- 以下這邊沿用最上面使用過的星星 -->
                    <div class="w_bottom_review_star_bigbox">
                        <div class="w_bottom_review_star_bigbox_in">
                            <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                            <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                            <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                            <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                            <img class="w_bottom_review1" src="img/icon/review1_red.svg" alt=""><!-- 空的星星 -->
                        </div>
                    </div>
                    <!-- 以上這邊沿用最上面使用過的星星 -->
                    <br>
                    <div class="w_product_giftset_detail_star_box_wordin">
                        <p class="noto_thin">無意間發現的義大利麵品牌，又有食譜教學
                            對沒有習慣自炊小資族簡單輕鬆好上手！
                            口感吃起來沒話說！推！</p>
                    </div>
                </div>


                <div class="w_bottom_review_word_three">
                    <p class="product_detail_big_en_font_r ">12/03/2018</p>
                </div>

            </div>

        </div>
        <!--------------------- 以上為評價區域 --------------------->


        <!------------------------ 以下為底部撰寫評價區域 ------------------------>

        <div class="w_product_giftset_detail_wrapper_four">

            <div class="col-md-6 w_product_giftset_detail_title">
                <p class="noto_regular">寫評價</p>
            </div>

            <div class="w_writing_review_name_box">


                <div class="w_writing_review_name">
                    <p class="product_detail_big_two_en_font_b">Miss Lee</p>
                    <div class="w_writing_review_star_box">
                        <img src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img src="img/icon/review1_red.svg" alt=""><!-- 空的星星 -->
                    </div>
                </div>


                <div class="w_writing_review_name_date   product_detail_small_noto_thin_b">
                    <p>購買日期：12/03/2018</p>
                </div>


            </div>
            <div class="w_writing_review_box">
                <textarea name="" id="" cols="30" rows="5" class="noto_light">顧客寫評價區</textarea>
            </div>


            <div class="w_btn_box">
                <div class="w_btn">
                    <a href="">
                        <button class="w_btn  product_detail_noto_light_big   w_product_giftset_detail_transition">送出
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!------------------------ 以下為底部撰寫評價區域 ------------------------>


        <!------------------------ 以下為寫評價按鈕區域 ------------------------>
        <div class="w_product_giftset_detail_wrapper_five">
            <div class="w_outline_btn_box">
                <a href="">
                    <button class="w_outline_btn   product_detail_noto_light_big   w_product_giftset_detail_transition">
                        寫評價
                    </button>
                </a>
            </div>
        </div>
        <!------------------------ 以上為寫評價按鈕區域 ------------------------>


        <!------------------------ 以下為購買提醒、立即購買按鈕區域 ------------------------>


        <div class="w_product_giftset_detail_wrapper_six">
            <p class="w_product_sauce_detail_attention   product_detail_small_two_en_font_r">提醒：完成此商品訂單之會員即可發表評價！</p>
            <div class="w_outline_btn_box">
                <a href="">
                    <button class="w_outline_btn   product_detail_noto_light_big   w_product_giftset_detail_transition">
                        立即購買
                    </button>
                </a>
            </div>
        </div>
        <!------------------------ 以上為購買提醒、立即購買按鈕區域 ------------------------>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous">
        </script>
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

                    $wrap.append('<button type="button" class="minus w_input_change_style">-</button>' +
                        '<div class="input-box" contenteditable="true"></div>' +
                        '<button type="button" class="add w_input_change_style">+</button>');

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