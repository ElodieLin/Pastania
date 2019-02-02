<?php

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

<div class="e_cart_items_innerwrapper noto_light ">

<?php

$total = 0;
$freight = 0;

foreach ($cart_data as $i) {
$total += $i['qty'] * $i['Price'];
?>

  <ul class="e_cart_item">
    <div class="d_flex">
      <li class="e_img_w">
        <img src="img/product/l/<?php echo $i['Image_large'] ?>.png" alt=""></a>
      </li>

      <li class="e_item_w">
        <ul class="e_item_">
          <li class="e_cart_item_name en_font "><?php echo $i['Name_En'] ?><?php echo $i['product_no'] ?></li>
          <li class="e_cart_item_name_zh noto_light"><?php echo $i['Name_Ch'] ?></li>
          <li class="e_cart_item_weight noto_light e_mt20">500g (<?php echo $i['Serve'] ?>人份)</li>

          <!-- 手機版顯示的 -->
          <li class=" e_price e_none_display_w">
            <span class="noto_light e_price">單價： <span class="en_font e_price">NT＄ <?php echo $i['Price'] ?></span></span>
          </li>

          <li class=" e_none_display_w e_margin_b e_mt10">
            <span class="noto_light e_price">數量： <span class="en_font e_quantity"><?php echo $i['qty']; ?></span></span>
          </li>

          <li class=" e_price e_none_display_w e_mt20">
            <span class="noto_light e_price">小計： <span class="en_font e_price">NT＄ <?php echo $i['qty'] * $i['Price']; ?></span></span>

          </li>
          <!-- 手機版顯示end -->


        </ul>
      </li>
    </div>

    <li class="e_w e_cart_item_price en_font e_none_display_m">NT＄ <?php echo $i['Price'] ?></li>

    <li class="e_w e_none_display_m ">
      <p class="en_font e_subtotal"><?php echo $i['qty'] ?></p>
    </li>

    <li class="e_w e_cart_item_price en_font e_none_display_m">NT＄ <?php echo $i['qty'] * $i['Price']; ?></li>

  </ul>

<?php } ?>

</div>

<hr class="e_cart_hr">

<!-- 總金額計算 -->
<div class="sum_wrapper">
  <div class="sum">

    <div class="e_col_3_full">
      <span class="noto_light e_sum_fontsize e_position">總金額</span>
    </div>

    <div class="e_col_3_full">
      <span class="en_font e_sum_fontsize_en e_position_en">NT＄ <?php echo $total; ?></span>
    </div>
  </div>
  <div class="sum">

    <div class="e_col_3_full">
      <span class="noto_light e_sum_fontsize e_position">運費</span>
    </div>

    <?php

    if ($_SESSION['order']['delivery_way'] == 1) {
      $freight = 60;
    }

    if ($_SESSION['order']['delivery_way'] == 2) {
      $freight = 60;
    }

    if ($_SESSION['order']['delivery_way'] == 3) {
      $freight = 100;
    }

    if ($total >= 1000) {
      $freight = 0;
    }

    ?>

    <div class="e_col_3_full">
      <span class="en_font e_sum_fontsize_en e_position_en">NT＄ <?php echo $freight; ?></span>
    </div>
  </div>
  <hr>
  <div class="sum">

    <div class="e_col_3_full">
      <span class="noto_light e_sum_fontsize e_position e_b">應付金額</span>
    </div>

    <div class="e_col_3_full">
      <span class="en_font e_sum_fontsize_en e_position_en e_b_en">NT＄ <?php echo $total + $freight; ?></span>
    </div>
  </div>
</div>
