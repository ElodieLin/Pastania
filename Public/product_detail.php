<?php

require __DIR__ . '/__connect_db.php';

$productID = $_GET['product'];

$p_sql = sprintf("SELECT * FROM product_info WHERE sid = $productID LIMIT 1");
$p_stmt = $pdo->query($p_sql);

while ($row = $p_stmt->fetch(PDO::FETCH_ASSOC)) {
    $product = $row;
}


$typeID = $_GET['type'];
$t_sql = sprintf("SELECT product_info.*, product_list.pasta_type as soase_type, product_list.pasta_type_ch as soase_type_ch FROM product_info join product_list on product_info.productlist_sid = product_list.parent_sid WHERE product_info.productlist_sid = '$typeID' ");
$t_stmt = $pdo->query($t_sql);

while ($row_t = $t_stmt->fetch(PDO::FETCH_ASSOC)) {
    $type = $row_t;
}

?>



<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>


  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/product_detail.css">



<div class="w_container">
  <div class="w_product_detail_wrapper_one">

      <?php ?>

    <div class="w_product_detail_bg">
      <div class="w_product_detail_img_box">
        <img class="w_product_detail_small_pasta_img"
             src="img/product/s/<?= $product['Image_small']; ?>.png" alt="">
        <img class="w_product_detail_img" src="img/product/l/<?= $product['Image_large']; ?>.png">
      </div>
    </div>


    <div class="
                        w_product_detail_word">
      <!-- 以下為麵包屑區域 -->
      <div class="w_product_detail_breadcrumbs_box   product_detail_small_noto_thin_b">
        <a href="products_cate.php">
          <span class="w_product_detail_breadcrumbs_ch">產品種類</span>
          <span class="w_product_detail_breadcrumbs_en">Products</span>
        </a>
        <span>></span>


        <a href="product_list_specialty.php"><!-- direct to the correspond categories -->
          <span class="w_product_detail_breadcrumbs_ch"><?= $type['soase_type_ch'] ?></span>
          <span class="w_product_detail_breadcrumbs_en"><?= $type['soase_type'] ?></span>
        </a>


        <span>></span>

        <a href="#"><!-- stay on same page -->
          <span class="w_product_detail_breadcrumbs_ch"><?= $product['Name_Ch']; ?></span>
          <span class="w_product_detail_breadcrumbs_en"><?= $product['Name_En']; ?></span>
        </a>
      </div>
      <!-- 以上為麵包屑區域 -->


      <!-- 以下為品名區域 -->
      <div class="w_product_detail_bigtitle">
        <div class="en_font">
          <p class="pro_name">
              <?php echo $product['Name_En']; ?> <?= $product['product_no']; ?>
            <span class="heart_p"><i class="far fa-heart" data-sid="<?php echo $product['sid']; ?>"></i> </span>
            <!-- <img src="img/icon/like.svg" alt=""> -->
          </p>
          <p class="noto_thin"><?= $product['Name_Ch']; ?></p>
        </div>
      </div>
      <!-- 以上為品名區域 -->


      <div class="w_product_detail_star_box">
        <div class="w_product_detail_star_box_in">
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
        <div class="w_product_detail_star_box_in_money">
          <p class="product_detail_big_en_font_b2">NT＄ <?= $product['Price']; ?></p>
          <p class="product_detail_small_noto_thin">全站購物滿千免運</p>
        </div>
      </div>


      <div class="w_product_detail_word_box_in">
        <br>
        <p class="product_detail_small_noto_thin_b">500g (<?= $product['Serve'] ?>人份)</p>
        <!-- <span class="w_product_detail_number"></span> -->
        <div class="w_product_detail_number">
          <!-- 在這裡插入加減數字欄位 qty box-->
          <input type="text" class="input-number" value="<?= $i ?>">
        </div>

      </div>
      <br>
      <div class="col-md-9 w_product_detail_cart_btn product_detail_noto_light_big">
        <a class="w_product_detail_transition add_to_cart_btn">加入購物車</a>
        <!-------- 橘色大按鈕連結------->
      </div>
    </div>
  </div>
</div>


<div class="w_product_detail_wrapper_two">
  <!------------ 以下為title區域 ------------>
  <div class="col-md-6 w_product_detail_title">
    <p class="noto_regular  w_product_detail_title_line">商品介紹</p>
    <p class="en_font">Description</p>
  </div>
  <!------------ 以上為title區域 ------------>


  <!------- 以下為介紹文字、三個icon設定 ------->
  <div class="row">
    <div class="col-md-6 w_product_detail_word_box">
      <p class="noto_thin">
          <?= $product['Description']; ?>
      </p>
    </div>
  </div>

  <div data-aos="zoom-in">
    <div class="row w_product_detail_icon">
      <div class="col-md-4 col-4">
        <img src="img/icon/time.svg" alt="">
        <p class="noto_light"><?= $product['Cook_time']; ?> mins</p>
      </div>
      <div class="col-md-4 col-4">
        <img src="img/icon/ruler.svg" alt="">
        <p class="noto_light"><?= $product['Length']; ?></p>
      </div>
      <div class="col-md-4 col-4">
        <img src="img/icon/width.svg" alt="">
        <p class="noto_light"><?= $product['Diameter']; ?></p>
      </div>
    </div>
  </div>
</div>
<!------- 以下為介紹文字、三個icon設定 ------->


<!------------ 以下為推薦食譜區域 ------------>
<div class="w_product_detail_wrapper_one">
  <div class="w_product_detail_recipe_bg">
    <img src="img/pages/others/product_detail_recipe_bg.jpg" alt="">
  </div>
  <div data-aos="flip-left" class="col-md-3 w_product_detail_recipe_title">
    <img src="img/icon/chef2.svg" alt="">
    <p class="product_detail_noto_light_big">推 薦 食 譜</p>


    <div class="w_product_detail_recipe_title_btn">
      <a class="w_product_detail_transition"
         href="recipe_detail.php?<?= $product['Recipe_sid']; ?>&recipe=<?php echo $product['Recipe_sid']; ?>">了解更多</a>
      <!-- direct to recipe detail page via mapping db -->
    </div>
  </div>
</div>
<!------------ 以上為推薦食譜區域 ------------>

<?php
$likeID = $_GET['ran_product'];

$l_sql = sprintf("SELECT * FROM product_info ORDER BY RAND() LIMIT 1;");
$l_stmt = $pdo->query($l_sql);

while ($row_ran = $l_stmt->fetch(PDO::FETCH_ASSOC)) {
    $ran_product = $row_ran;
}
?>


<!------------ 以下為你可能會喜歡區域 ------------>
<div class="w_product_detail_wrapper_two">

  <div class="w_product_detail_like">
    <div class="w_product_detail_like_word_box">

      <div data-aos="fade-right">
        <!------ 以下為大標文字和線區域 ------->
        <div class="w_product_detail_like_word_one ">
          <p class="noto_regular w_product_detail_like_word_line">你可能喜歡</p>
          <p class="product_detail_big_en_font">This may also interest you</p>
        </div>
        <!------ 以上為大標文字和線區域 ------->
      </div>

      <!------ 以下為產品名稱和按鈕區域 ------->
      <div class="w_product_detail_like_word_two">
        <div class="w_product_detail_like_word_two_word">
          <p class="product_detail_big_en_font_b"><?= $ran_product['Name_En'] ?> <?= $ran_product['product_no'] ?></p>
          <p class="product_detail_noto_light_big"><?= $ran_product['Name_Ch'] ?></p>

          <div class="w_product_detail_like_word_btn ">
            <a class="w_product_detail_transition" href="product_detail.php?product=<?= $ran_product['sid'] ?>">了解更多</a>
          </div>
        </div>
      </div>
      <!------ 以上為產品名稱和按鈕區域 ------->
    </div>


    <!------ 以下為產品照片區域 ------->
    <div class="w_product_detail_like_img_box">
      <img src="img/product/l/<?= $ran_product['Image_large'] ?>.png" alt="">
    </div>
    <!------ 以上為產品照片區域 ------->
  </div>


  <!------ 以下為你可能會喜歡背景區域 ------->
  <div class="w_product_detail_like_img_box_bg">
    <img src="img/pages/others/product_detail_recommend_bg.png" alt="">
  </div>
  <!------ 以下為你可能會喜歡背景區域 ------->
</div>
<!------------ 以上為你可能會喜歡區域 ------------>


<!--------------------- 以下為評價區域 --------------------->
<div class="w_product_detail_wrapper_three">
  <!------------ 以下為評價title區域 ------------>
  <div class="col-md-6 w_product_detail_title">
    <p class="noto_regular  w_product_detail_title_line">評價</p>
    <p class="en_font">Reviews</p>
  </div>
  <!------------ 以上為評價title區域 ------------>
  <div class="row">
    <div class="col w_bottom_review_star_box">
      <img src="img/icon/review2_red.svg" alt="">
      <p class="product_detail_small_two_en_font_b re_number">4 | 2 Reviews</p>
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
      <div class="w_product_detail_star_box_wordin">
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
        <div class="w_bottom_review_ciecle   product_detail_big_en_font_r ">Ｗ</div>
      </div>
      <p class="product_detail_big_en_font_r ">Mr Wang</p>
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
      <div class="w_product_detail_star_box_wordin">
        <p class="noto_thin">真是太棒了，讚！</p>
      </div>
    </div>


    <div class="w_bottom_review_word_three">
      <p class="product_detail_big_en_font_r ">12/24/2018</p>
    </div>

  </div>

  <div class="reviews_demo">

  </div>


</div>
<!--------------------- 以上為評價區域 --------------------->


<!------------------------ 以下為底部撰寫評價區域 ------------------------>

<div class="w_product_detail_wrapper_four">

  <div class="col-md-6 w_product_detail_title">
    <p class="noto_regular">寫評價</p>
  </div>

  <div class="w_writing_review_name_box">


    <div class="w_writing_review_name">
      <p class="product_detail_big_two_en_font_b"><?= $_SESSION['user']['nickname'] ?></p>
      <div class="w_writing_review_star_box">
        <img src="img/icon/review1_red.svg" alt="">
        <img src="img/icon/review1_red.svg" alt="">
        <img src="img/icon/review1_red.svg" alt="">
        <img src="img/icon/review1_red.svg" alt="">
        <img src="img/icon/review1_red.svg" alt="">
      </div>
    </div>


    <div class="w_writing_review_name_date   product_detail_small_noto_thin_b">
      <p>購買日期：02/20/2019</p>
    </div>


  </div>
  <div class="w_writing_review_box">
    <textarea cols="30" rows="5" class="noto_light" id="commentText" placeholder="顧客寫評價區"></textarea>
  </div>


  <div class="w_btn_box">
    <div class="w_btn">
      <a href="javascript:">
        <button class="w_btn  product_detail_noto_light_big   w_product_detail_transition board">送出</button>
      </a>
    </div>
  </div>
</div>
<!------------------------ 以下為底部撰寫評價區域 ------------------------>


<!------------------------ 以下為寫評價按鈕區域 ------------------------>
<div class="w_product_detail_wrapper_five">
  <div class="w_outline_btn_box">
    <a href="">
      <button class="w_outline_btn   product_detail_noto_light_big   w_product_detail_transition">寫評價</button>
    </a>
  </div>
</div>
<!------------------------ 以上為寫評價按鈕區域 ------------------------>


<!------------------------ 以下為購買提醒、立即購買按鈕區域 ------------------------>


<div class="w_product_detail_wrapper_six">
  <p class="w_product_detail_attention   product_detail_small_two_en_font_r">提醒：完成此商品訂單之會員即可發表評價！</p>
  <div class="w_outline_btn_box">
    <a href="">
      <button class="w_outline_btn   product_detail_noto_light_big   w_product_detail_transition">立即購買
      </button>
    </a>
  </div>
</div>
<!------------------------ 以上為購買提醒、立即購買按鈕區域 ------------------------>


<script>
    //      留言板demo
    $(".w_writing_review_star_box").click(function () {
        $(this).replaceWith("      <div class=\"w_writing_review_star_box\">\n" +
            "        <img src=\"img/icon/review2_red.svg\" alt=\"\">\n" +
            "        <img src=\"img/icon/review2_red.svg\" alt=\"\">\n" +
            "        <img src=\"img/icon/review2_red.svg\" alt=\"\">\n" +
            "        <img src=\"img/icon/review2_red.svg\" alt=\"\">\n" +
            "        <img src=\"img/icon/review2_red.svg\" alt=\"\">\n" +
            "      </div>\n")
    });


    $(".board").click(function () {
        $("#commentText").replaceWith("  <div class=\"w_writing_review_box\">\n" +
            "    <textarea cols=\"30\" rows=\"5\" class=\"noto_light\" id=\"commentText\" placeholder=\"顧客寫評價區\"></textarea>\n" +
            "  </div>\n");
        $(".w_writing_review_star_box").replaceWith("      <div class=\"w_writing_review_star_box\">\n" +
            "        <img src=\"img/icon/review1_red.svg\" alt=\"\">\n" +
            "        <img src=\"img/icon/review1_red.svg\" alt=\"\">\n" +
            "        <img src=\"img/icon/review1_red.svg\" alt=\"\">\n" +
            "        <img src=\"img/icon/review1_red.svg\" alt=\"\">\n" +
            "        <img src=\"img/icon/review1_red.svg\" alt=\"\">\n" +
            "      </div>\n");
        $(".reviews_demo").replaceWith("  <div class=\"w_bottom_review_word_line\"></div><!-- 平價欄位區隔線 -->\n" +
            "\n" +
            "\n" +
            "  <div class=\"w_bottom_review_word_box\">\n" +
            "\n" +
            "\n" +
            "    <div class=\"w_bottom_review_word_one\">\n" +
            "      <div class=\"w_bottom_review_ciecle_box\">\n" +
            "        <div class=\"w_bottom_review_ciecle   product_detail_big_en_font_r \">H</div>\n" +
            "      </div>\n" +
            "      <p class=\"product_detail_big_en_font_r \">Miss Hey</p>\n" +
            "    </div>\n" +
            "\n" +
            "\n" +
            "    <div class=\"w_bottom_review_word_two\">\n" +
            "      <!-- 以下這邊沿用最上面使用過的星星 -->\n" +
            "      <div class=\"w_bottom_review_star_bigbox\">\n" +
            "        <div class=\"w_bottom_review_star_bigbox_in\">\n" +
            "          <img class=\"w_bottom_review2\" src=\"img/icon/review2_red.svg\" alt=\"\"><!-- 填滿的星星 -->\n" +
            "          <img class=\"w_bottom_review2\" src=\"img/icon/review2_red.svg\" alt=\"\"><!-- 填滿的星星 -->\n" +
            "          <img class=\"w_bottom_review2\" src=\"img/icon/review2_red.svg\" alt=\"\"><!-- 填滿的星星 -->\n" +
            "          <img class=\"w_bottom_review2\" src=\"img/icon/review2_red.svg\" alt=\"\"><!-- 填滿的星星 -->\n" +
            "          <img class=\"w_bottom_review1\" src=\"img/icon/review2_red.svg\" alt=\"\"><!-- 空的星星 -->\n" +
            "        </div>\n" +
            "      </div>\n" +
            "      <!-- 以上這邊沿用最上面使用過的星星 -->\n" +
            "      <br>\n" +
            "      <div class=\"w_product_detail_star_box_wordin\">\n" +
            "        <p class=\"noto_thin\">great!</p>\n" +
            "      </div>\n" +
            "    </div>\n" +
            "\n" +
            "\n" +
            "    <div class=\"w_bottom_review_word_three\">\n" +
            "      <p class=\"product_detail_big_en_font_r \">02/20/2019</p>\n" +
            "    </div>\n" +
            "\n" +
            "  </div>\n");
        $(".re_number").replaceWith("<p class=\"product_detail_small_two_en_font_b re_number\">4.5 | 3 Reviews</p>\n")


    });


    //      數字加減

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
                    console.log(numVal);
                    numVal = isNaN(parseInt(numVal)) ? 1 : parseInt(numVal);
                    numVal = numVal < min ?
                        min : numVal > max ?
                            max : numVal;
                    $(this).text(numVal);
                })
                .keydown(function (e) {
                    var _key = e.keyCode;
                    console.log(_key);
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
                        console.log('要取代');
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

    $('.fa-heart').on('click', function () {
        // Add item to wishlist, or remove if already on wishlist

        // find sid of element

        var sid = $(this).data('sid');
        var quantity = 1;

        // If the heart is checked, we should set a quantity of 1

        if (!$(this).hasClass('fas')) {
            quantity = 1;
        }

        $.get('add_to_wishlist.php', {sid: sid, qty: quantity}, function (data) {
            console.log(data);
        }, 'json');
    });

    $('.far').click(function () {
        $(this).toggleClass('fas');
        // $('.far').toggleClass('fas');
    });


    //add to cart
    $('.add_to_cart_btn').click(function () {
        console.log("hi");
        var card = $(this).closest('.product-item');
        var sid = <?= $product['sid']?>;
        var qty = $('.input-box').text();
        console.log(qty);
        console.log(sid);


        // ajax
        $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
            // alert('已加入購物車')
            cart_count(data); //連接navbar_list裡的cart_count data, 可即時更新
        }, 'json');
    });

    //aos動畫特效設定
    $(function () {
        AOS.init({
            delay: 200,
            easing: 'ease-in-out'
        });
    })
</script>



<?php include __DIR__ . '/__html_foot.php' ?>
