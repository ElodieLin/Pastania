<?php

require __DIR__ . '/__connect_db.php';

if ($_POST)
{
  $inputTotal         = $_POST['total'];
  $inputPaymentOption = $_POST['payment_option'];

  $_SESSION['order']['total']          = $inputTotal;
  $_SESSION['order']['payment_option'] = $inputPaymentOption;

  if ($inputPaymentOption == 1) {
    header('Location: cart_step4_ATM.php');
    exit();
  }

  if ($inputPaymentOption == 2) {
    header('Location: cart_step4_card.php');
    exit();
  }

  header('Location: cart_step3.php');
  exit();
}

?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php';

?>

  <head>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/cart_step3.css">

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
      <ul class="noto_light py-2">
        <div class="d_flex">
          <li class="e_img_w"></li>
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

      <?php include_once('order_cart.php'); ?>

    </div>
    <!-- 購物車有商品 end -->
    <form action="cart_step3.php" method="post">
      <p class="noto_light ">選擇付款方式</p>
      <hr class="e_cart_hr">

      <div class="e_payment_method">
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="payment_option" type="radio" checked id="paymentOption1" value="1">
          <label class="form-check-label noto_light" for="paymentOption1">ATM匯款</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="payment_option" type="radio" id="paymentOption2" value="2">
          <label class="form-check-label noto_light" for="paymentOption2">信用卡線上刷卡</label>
        </div>

        <!-- alert -->
        <small id="" class="form-text e_payment_method_alert col-4 noto_light">請選擇付款方式</small>

      </div>

      <input type="hidden" name="total" value="<?php echo $total; ?>" />

      <div class="e_cart_btn">
        <button class="e_btn_outline noto_light">上 一 步</button>
        <button class="e_btn noto_light" type="submit">結 帳 去</button>
      </div>
    </form>


  </div>
  </body>


<?php include __DIR__ . '/__html_foot.php' ?>
