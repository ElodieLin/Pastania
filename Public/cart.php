<?php require __DIR__ . '/__connect_db.php';
$page_name = 'cart';

//$_SESSION fake
$_SESSION['cart'] = [
    2 => 2,//p_sid=>數量
    3 => 1,
    5 => 3,
];

//購物車裡不是0的時候才會執行
if (!empty($_SESSION['cart'])) {
    $sessionCart = $_SESSION['cart'];
    // 購物車裡要有商品
    $keys = array_keys($_SESSION['cart']);
    $sql = sprintf("SELECT * FROM `product_info` WHERE `sid` IN ('%s')",
        implode("','", $keys)
    ); //加入','在字串間

    $stmt = $pdo->query($sql);

    $cart_data = []; // 存放商品資料和數量
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {

        // 把商品的數量, 設定給該項目的 qty 屬性(array)
        $r['qty'] = $_SESSION['cart'][$r['sid']];

        $cart_data[$r['sid']] = $r;
    }

    // header('Content-Type: text/plain');

    // // 依照用戶加入的順序去取得商品資料
    // foreach($keys as $k){
    //     print_r( $cart_data[$k] );
    // }


}

?>



<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

<head>
    <link rel="stylesheet" href="css/cart.css">

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
        <form action="cart_step2.php" method="post">
            <!-- 每個商品都包在 innerwrapper裡 -->
            <div class="e_cart_items_innerwrapper noto_light ">
                <?php foreach ($cart_data as $sid => $item): ?>
                    <input type="hidden" name="products[][sid]" value="<?php echo $sid ?>"/>
                    <input type="hidden" name="products[][qty]" value="<?php echo $sessionCart[$sid] ?>"/>

                    <ul class="e_cart_item">
                        <li>
                            <div class="d_flex">
                                <div class="e_img_w">
                                    <a href="product_detail.php?product="><img src="img/product/l/P1_Farfalle_Tricolore.png" alt=""></a>
                                </div>
                                <div class="e_item_w">
                                    <ul class="d_colum">
                                        <li class="e_cart_item_name en_font "><a href="">Farfalle nº 87</a></li>
                                        <li class="e_cart_item_name_zh noto_light"><a href=""><?php echo $item['Name_Ch'] ?></a></li>
                                        <li class="e_cart_item_weight noto_light e_mt20">500g (7人份)</li>

                                        <!-- 手機版顯示的 -->
                                        <li class="e_w e_none_display_w e_margin_b e_mt10">
                                            <input type="text" class="input-number">
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
                                </div>
                            </div>
                        </li>


                        <li class="e_w e_cart_item_price en_font e_none_display_m">NT＄ 109</li>

                        <li class="e_w e_none_display_m ">
                            <input type="text" class="input-number">
                        </li>

                        <li class="e_w e_cart_item_price en_font e_none_display_m">NT＄ 109</li>
                        <li class="e_icon_w e_operate_icon e_none_display_m wish_icon">
                            <!-- heart icon  -->
                            <div class="e_cart_operate_icon ">
                                <a href="#"><i class="far fa-heart"></i></a>
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
                <?php endforeach;; ?>
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
                <button type="submit" class="e_btn noto_light">結 帳 去</button>
            </div>
        </form>
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
