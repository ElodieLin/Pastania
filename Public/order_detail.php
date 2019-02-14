

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

<link rel="stylesheet" href="css/cart_step4_card.css">
<style>
    .container{
        margin-top: 130px;
    }
    </style>
    <div class="container">
        <p class="noto_light ">購買清單</p>
        <hr class="e_cart_hr">

        <div class="e_cart_title e_none_display_m">
            <ul class="noto_light py-2">
                <div class="d_flex">
                    <li class="e_img_w"> </li>
                    <li class="e_item_w">項 目</li>
                </div>
                <li class="e_w">單 價</li>
                <li class="e_w">數 量</li>
                <li class="e_w">小 計</li>
            </ul>
        </div>

        <div class="e_cart_items_innerwrapper noto_light ">


<!-- item1 -->
  <ul class="e_cart_item">
    <div class="d_flex py-2">
      <li class="e_img_w">
        <img src="img/product/l/P15_Orecchiette.png" alt=""></a>
      </li>

      <li class="e_item_w">
        <ul class="e_item_">
          <li class="e_cart_item_name en_font ">Orecchiette P°15</li>
          <li class="e_cart_item_name_zh noto_light">貓耳朵</li>
          <li class="e_cart_item_weight noto_light e_mt20">500g (10人份)</li>

          <!-- 手機版顯示的 -->
          <li class=" e_price e_none_display_w">
            <span class="noto_light e_price ">單價： <span class="en_font e_price">NT＄ 89</span></span>
          </li>

          <li class=" e_none_display_w e_margin_b e_mt10">
            <span class="noto_light e_price">數量： <span class="en_font e_quantity">3</span></span>
          </li>

          <li class=" e_price e_none_display_w e_mt20">
            <span class="noto_light e_price">小計： <span class="en_font e_price">NT＄ 267</span></span>

          </li>
          <!-- 手機版顯示end -->


        </ul>
      </li>
    </div>

    <li class="e_w e_cart_item_price en_font e_none_display_m py-2">NT＄ 89</li>

    <li class="e_w e_none_display_m py-2">
      <p class="en_font e_subtotal">3</p>
    </li>

    <li class="e_w e_cart_item_price en_font e_none_display_m py-2">NT＄ 267</li>

  </ul>


<!-- item2 -->
  <ul class="e_cart_item">
    <div class="d_flex py-2">
      <li class="e_img_w">
        <img src="img/product/l/P6_Casarecci.png" alt=""></a>
      </li>

      <li class="e_item_w">
        <ul class="e_item_">
          <li class="e_cart_item_name en_font ">Casarecci P°6</li>
          <li class="e_cart_item_name_zh noto_light">扭紋柴麵</li>
          <li class="e_cart_item_weight noto_light e_mt20">500g (10人份)</li>

          <!-- 手機版顯示的 -->
          <li class=" e_price e_none_display_w">
            <span class="noto_light e_price ">單價： <span class="en_font e_price">NT＄ 80</span></span>
          </li>

          <li class=" e_none_display_w e_margin_b e_mt10">
            <span class="noto_light e_price">數量： <span class="en_font e_quantity">5</span></span>
          </li>

          <li class=" e_price e_none_display_w e_mt20">
            <span class="noto_light e_price">小計： <span class="en_font e_price">NT＄ 400</span></span>

          </li>
          <!-- 手機版顯示end -->


        </ul>
      </li>
    </div>

    <li class="e_w e_cart_item_price en_font e_none_display_m py-2">NT＄ 80</li>

    <li class="e_w e_none_display_m py-2">
      <p class="en_font e_subtotal">5</p>
    </li>

    <li class="e_w e_cart_item_price en_font e_none_display_m py-2">NT＄ 400</li>

  </ul>

<!-- item 3 -->
<ul class="e_cart_item">
    <div class="d_flex py-2">
      <li class="e_img_w">
        <img src="img/product/l/S2_Penne_Rigate.png" alt=""></a>
      </li>

      <li class="e_item_w">
        <ul class="e_item_">
          <li class="e_cart_item_name en_font ">Penne Rigate S°2</li>
          <li class="e_cart_item_name_zh noto_light">斜管條紋麵</li>
          <li class="e_cart_item_weight noto_light e_mt20">500g (10人份)</li>

          <!-- 手機版顯示的 -->
          <li class=" e_price e_none_display_w">
            <span class="noto_light e_price ">單價： <span class="en_font e_price">NT＄ 89</span></span>
          </li>

          <li class=" e_none_display_w e_margin_b e_mt10">
            <span class="noto_light e_price">數量： <span class="en_font e_quantity">4</span></span>
          </li>

          <li class=" e_price e_none_display_w e_mt20">
            <span class="noto_light e_price">小計： <span class="en_font e_price">NT＄ 356</span></span>

          </li>
          <!-- 手機版顯示end -->


        </ul>
      </li>
    </div>

    <li class="e_w e_cart_item_price en_font e_none_display_m py-2">NT＄ 89</li>

    <li class="e_w e_none_display_m py-2">
      <p class="en_font e_subtotal">4</p>
    </li>

    <li class="e_w e_cart_item_price en_font e_none_display_m py-2">NT＄ 356</li>

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
      <span class="en_font e_sum_fontsize_en e_position_en">NT＄ 1023</span>
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
      <span class="en_font e_sum_fontsize_en e_position_en e_b_en">NT＄ 1023</span>
    </div>
  </div>
</div>

 
    </div>



                    

<?php include __DIR__ . '/__html_foot.php' ?>