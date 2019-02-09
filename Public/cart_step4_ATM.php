<?php

session_start();

?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

  <head>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous"> -->
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

      <?php include_once('order_cart.php'); ?>

    </div>
    <!-- 購物車有商品 end -->

    <!-- 選擇付款方式 end-->


    <!-- 確認配送資訊 -->
    <p class="noto_light ">確認配送資訊</p>
    <hr class="e_cart_hr">

    <div class="alert e_delivery_info_confirm" role="alert">
      <p class="noto_light e_info_confirm">姓名： <span>王小小</span></p>
      <p class="noto_light e_info_confirm">地址：<span>112 台北市北投區有錢路1號1樓錢路1號1樓錢路1號1樓</span></p>
      <p class="noto_light e_info_confirm">手機：<span>0910－000111</span></p>
      <p class="noto_light e_info_confirm">配送時間：<span>不指定</span></p>

    </div>
    <div class="">
      <form action="cart_step5.php" method="post" class="e_cart_btn">
        <input type="hidden" name="action" value="order" />
        <button class="e_btn_outline noto_light">上 一 步</button>
        <button class="e_btn noto_light" type="submit">確 認 結 帳</button>
      </form>
    </div>
  </div>
  </body>

<?php include __DIR__ . '/__html_foot.php' ?>
