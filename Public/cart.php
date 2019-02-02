<?php require __DIR__ . '/__connect_db.php';
$page_name = 'cart';

//$_SESSION fake


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

  <!-- 插入購物車是空的 empty cart start -->

  <div class="e_no_items">

    <p class="e_empty_cart noto_light">購 物 車 是 空 的</p>

    <hr>

    <div class="continue_shopping">
      <button class="e_btn noto_light">繼 續 購 物</button>
    </div>

  </div>
  <!-- 插入購物車是空的 empty cart end -->


  <!-- 購物車有商品 cart with items start -->
  <div class="e_cart_items_outerwrapper">
    <form action="cart_step2.php" method="post">
      <!-- 每個商品都包在 innerwrapper裡 -->
      <!-- $cart_data as $sid => $item -->
      <div class="e_cart_items_innerwrapper noto_light ">
          <?php
          $total = 0;

          foreach ($keys as $k) {
              $i = $cart_data[$k];
              $total += $i['qty'] * $i['Price']; ?>
            <!-- <input type="hidden" name="products[][sid]" value="<?php echo $sid ?>"/>
                    <input type="hidden" name="products[][qty]" value="<?php echo $sessionCart[$sid] ?>"/> -->

            <ul class="e_cart_item product-item" data-sid="<?= $i['sid'] ?>" id="product<?= $i['sid'] ?>">
              <li>
                <div class="d_flex py-2">
                  <div class="e_img_w">
                    <a href="product_detail.php?product=<?= $i['sid'] ?>&type=<?= $i['productlist_sid'] ?>"><img
                              src="img/product/l/<?php echo $i['Image_large'] ?>.png" alt=""></a>
                  </div>
                  <div class="e_item_w">
                    <ul class="d_colum ">
                      <li class="e_cart_item_name en_font "><a
                                href=""><?php echo $i['Name_En'] ?><?php echo $i['product_no'] ?></a></li>
                      <li class="e_cart_item_name_zh noto_light"><a href=""><?php echo $i['Name_Ch'] ?></a></li>
                      <li class="e_cart_item_weight noto_light e_mt20">500g (<?php echo $i['Serve'] ?>人份)</li>

                      <!-- 手機版顯示的 mobile display-->
                      <li class="e_w e_none_display_w e_margin_b e_mt10" data-qty="<?= $i['qty'] ?>">
                        <input type="text" class="input-number item-qty" value="<?= $i['qty'] ?>">
                      </li>
                      <li class="e_w e_cart_item_price en_font e_price e_none_display_w e_mt20">
                        NT＄ <?php echo $i['Price'] ?></li>
                      <li class="e_icon_w e_operate_icon e_none_display_w e_mt10" display=flex>
                        <div class="e_cart_operate_icon ">
                          <!-- heart icon (mobile) -->
                          <a href="#"><i class="far fa-heart"></i></a>
                        </div>
                        <!-- remove icon (mobile) -->
                        <div class="e_cart_operate_icon">
                          <a href="javascript: remove_item(<?= $i['sid'] ?>)">
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
                          </a>
                        </div>
                      </li>
                      <!-- 手機版顯示 end -->
                    </ul>
                  </div>
                </div>
              </li>

              <!-- price -->
              <li class="e_w e_cart_item_price en_font e_none_display_m price product-price py-2"
                  data-price="<?= $i['Price'] ?>">NT＄ <?php echo $i['Price'] ?></li>

              <!-- select qty -->
              <li class="e_w e_none_display_m py-2 " data-qty="<?= $i['qty'] ?>">
                <input type="text" class="input-number item-qty" value="<?= $i['qty'] ?>">
              </li>

              <!-- sub_total -->
              <li class="e_w e_cart_item_price en_font e_none_display_m price sub-total py-2"
                  data-price="<?= $i['Price'] * $i['qty'] ?>">NT＄ <?= $i['Price'] * $i['qty'] ?></li>
              <li class="e_icon_w e_operate_icon e_none_display_m wish_icon">
                <!-- heart icon  -->
                <div class="e_cart_operate_icon py-2">
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
                <!-- remove icon  -->
                <div class="e_cart_operate_icon remove_icon py-2">
                  <a href="javascript: remove_item(<?= $i['sid'] ?>)">
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
                  </a>

                </div>
              </li>
            </ul>

          <?php } ?>
      </div>

      <hr class="e_cart_hr">
<!-- Total price start-->
      <div class="sum_wrapper">
        <div class="sum">
          <div class="e_col_3_full">
            <span class="noto_light e_sum_fontsize e_position">總金額</span>
          </div>
          <div class="e_col_3_full">
            <span class="en_font e_sum_fontsize_en e_position_en ">NT＄ <span id="total-price" class="price" data-price="<?= $total ?>"></span> </span>
          </div>
        </div>
<!-- Total price end-->
        <br>
        <p class="noto_light">全站滿千免運喔！</p>
      </div>

      <div class="e_cart_btn">
        <button class="e_btn_outline noto_light">繼 續 購 物</button>
        <button type="submit" class="e_btn noto_light">結 帳 去</button>
      </div>
    </form>
  </div>

  <!-- 購物車有商品 cart with items end -->
    <?php
    $likeID = $_GET['ran_product'];

    $l_sql = sprintf("SELECT * FROM product_info ORDER BY RAND() LIMIT 4;");
    $l_stmt = $pdo->query($l_sql);

    ?>

  <!-- 以下是推薦商品 recommend -->
  <div class="e_cart_recommend">
    <p class="noto_light ">你可能喜歡</p>
    <hr class="e_cart_hr">


    <div class="e_recommend_item_wrap">
        <?php while ($row_ran = $l_stmt->fetch(PDO::FETCH_ASSOC)): ?>
          <div class="e_recommend_item col_3">
            <div class="recommend_img_size cursor">
              <a href="product_detail.php?product=<?= $row_ran['sid'] ?>"><img
                        src="img/product/l/<?= $row_ran['Image_large'] ?>.png" alt=""></a>
            </div>
            <div class="e_recommend_item_text">
              <span class="e_recommend_item_name en_font "><a
                        href=""><?= $row_ran['Name_En'] ?> <?= $row_ran['product_no'] ?></a></span>
              <span class="e_recommend_item_name_zh noto_light "><a href=""><?= $row_ran['Name_Ch'] ?></a></span>
              <span class="e_item_price en_font ">NT＄ <?= $row_ran['Price'] ?></span>
            </div>
          </div>
        <?php endwhile; ?>


    </div>


  </div>

</div>

<!-- Optional JavaScript -->

<!-- ＪＱ套上面這支，不要套slim版的  -->


<script>

  // qty input number
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

            $inputBox.text($input.val());

            function add() {
              var sid = $($wrap).closest('.e_cart_item').data('sid');
                if (parseInt($inputBox.text()) < max) {
                  var value = parseInt($inputBox.text()) + 1;
                    $inputBox.text(parseInt($inputBox.text()) + 1);
                    $(this).closest('.e_cart_item').find('.item-qty').val(value);
                    item_increase(sid, value);
                    calTotalPrice();
                }
            }

            function minus() {
              var sid = $($wrap).closest('.e_cart_item').data('sid');
                if (parseInt($inputBox.text()) > min) {
                  var value = parseInt($inputBox.text()) - 1;
                    $inputBox.text(parseInt($inputBox.text()) - 1);
                    $(this).closest('.e_cart_item').find('.item-qty').val(value);
                    item_decrease(sid, value);
                    calTotalPrice();
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


    // 移除商品(用reload page刷新頁面資訊) remove item
    var remove_item = function (sid) {
        $.get('add_to_cart.php', {sid: sid}, function (data) {
            // location.reload(); //刷新頁面的方式
            // confirm ('確認要刪除此商品嗎？');

            cart_count(data); // 更新選單上泡泡裡的數字
            $('#product' + sid).remove(); // 移除該列 <tr>
            calTotalPrice(); // 計算總共多少錢
            updateAllPrice(); // 依據資料變更呈現


        }, 'json');
    };

    var item_increase = function(sid, quantity) {
      $.get('add_to_cart.php', {sid: sid, qty: quantity}, function (data) {
            // location.reload(); //刷新頁面的方式
            // confirm ('確認要刪除此商品嗎？');

            cart_count(data); // 更新選單上泡泡裡的數字
            // calTotalPrice(); // 計算總共多少錢
            updateAllPrice(); // 依據資料變更呈現


        }, 'json');
    }

    var item_decrease = function(sid, quantity) {
      $.get('add_to_cart.php', {sid: sid, qty: quantity}, function (data) {
            // location.reload(); //刷新頁面的方式
            // confirm ('確認要刪除此商品嗎？');

            cart_count(data); // 更新選單上泡泡裡的數字
            // calTotalPrice(); // 計算總共多少錢
            updateAllPrice(); // 依據資料變更呈現


        }, 'json');
    }

    // 單項商品金額小計 product sub total
    var updateAllPrice = function () {
        $('.price').each(function () {
            var p = $(this).attr('data-price');
            // p = dallorCommas(p);
            $(this).text(p);
            // $(this).text('NT $ ' + p + '元');
        });
    };
    updateAllPrice(); //呼叫變數

    //計算總金額 total price
    var calTotalPrice = function () {
        var t_price = $('#total-price'); //總金額下的id
        var total = 0;

        $('.product-item').each(function () {
            var price = $(this).find('.product-price').attr('data-price');
            var qty = $(this).find('.item-qty').val();

            total += price * qty;
        });

        t_price.attr('data-price', total);
    };

    $('.fa-heart').on('click', function() {
      // Add item to wishlist, or remove if already on wishlist

      // find sid of element

      var sid = $(this).closest('.e_cart_item').data('sid');
      var quantity = 0;

      // If the heart is checked, we should set a quantity of 1

      if ($(this).hasClass('fas')) {
        quantity = 1;
      }

      $.get('add_to_wishlist.php', {sid: sid, qty: quantity}, function (data) {

      }, 'json');
    });

    //商品變更數量, 帶入新小計 change qty number, and with new sub total
    $('.item-qty').on('change', function () {
      alert('huh');
        var item_row = $(this).closest('ul');
        var sid = item_ul.attr('data-sid');
        var qty = $(this).val();
        // var qty = $('.input-box').text();
        var price = item_ul.find('.product-price').attr('data-price');

        $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
            // location.reload();//刷新頁面用

            cart_count(data); // 更新選單上泡泡裡的數字

            item_ul.find('.sub-total').attr('data-price', price * qty); // 變更該項目的小計
            calTotalPrice(); // 計算總共多少錢

            updateAllPrice();
        }, 'json');

    });


</script>

</body>

<?php include __DIR__ . '/__html_foot.php' ?>
