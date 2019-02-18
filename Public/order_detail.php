<?php require __DIR__ . '/__connect_db.php';

if (isset($_SESSION['order_sid'])) {
    $m_sql = sprintf("SELECT * FROM `order_details` WHERE `order_sid` = '" . $_SESSION['order_sid'] . "' ");
    $m_stmt = $pdo->query($m_sql);
    $rows = $m_stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        $keys[] = $row['product_sid'];
    }

    $sql = sprintf("SELECT * FROM `product_info` WHERE `sid` IN ('%s')",
        implode("','", $keys)
    ); //加入','在字串間


    $stmt = $pdo->query($sql);

    $product_info = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $o_sql = sprintf("SELECT * FROM `orders` WHERE `sid` = '" . $_SESSION['order_sid'] . "' ");
    $stmt = $pdo->query($o_sql);
    $order = $stmt->fetch(PDO::FETCH_ASSOC);
}


?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

  <link rel="stylesheet" href="css/cart_step4_card.css">
  <style>
    .container {
      margin-top: 130px;
    }
  </style>
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

    <div class="e_cart_items_innerwrapper noto_light ">


      <!-- item1 -->
        <?php foreach ($rows as $key => $row): ?>
          <ul class="e_cart_item">
            <li>
              <div class="d_flex py-2">
                <div class="e_img_w">
                  <a href="product_detail.php?product=<?= $row['product_sid'] ?>">
                    <img src="img/product/l/<?= $product_info[$key]['Image_large'] ?>.png" alt=""></a>
                  </a>
                </div>

                <div class="e_item_w">
                  <ul class="e_item_">
                    <li class="e_cart_item_name en_font "><?= $product_info[$key]['Name_En'] ?></li>
                    <li class="e_cart_item_name_zh noto_light"><?= $product_info[$key]['Name_Ch'] ?></li>
                    <li class="e_cart_item_weight noto_light e_mt20">500g (<?= $product_info[$key]['Serve'] ?>人份)</li>

                    <!-- 手機版顯示的 -->
                    <li class=" e_price e_none_display_w">
                      <span class="noto_light e_price ">單價： <span class="en_font e_price">NT＄ <?= $row['price']; ?></span></span>
                    </li>

                    <li class=" e_none_display_w e_margin_b e_mt10">
                      <span class="noto_light e_price">數量： <span class="en_font e_quantity"><?= $row['quantity']; ?></span></span>
                    </li>

                    <li class=" e_price e_none_display_w e_mt20">
                      <span class="noto_light e_price">小計： <span class="en_font e_price">NT＄ <?= $row['price'] * $row['quantity']; ?></span></span>
                    </li>
                    <!-- 手機版顯示end -->

                  </ul>
                </div>
              </div>
            </li>

            <li class="e_w e_cart_item_price en_font e_none_display_m py-2">NT＄ <?= $row['price']; ?></li>
            <li class="e_w e_none_display_m py-2"><p class="en_font e_subtotal"><?= $row['quantity']; ?></p></li>
            <li class="e_w e_cart_item_price en_font e_none_display_m py-2">NT＄ <?= $row['price'] * $row['quantity']; ?></li>
          </ul>
        <?php endforeach; ?>
    </div>

    <hr class="e_cart_hr">

    <!-- 總金額計算 -->
    <div class="sum_wrapper">
      <div class="sum">

        <div class="e_col_3_full">
          <span class="noto_light e_sum_fontsize e_position">總金額</span>
        </div>

        <div class="e_col_3_full">
          <span class="en_font e_sum_fontsize_en e_position_en">NT＄ <?= $order['amount']; ?></span>
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
          <span class="en_font e_sum_fontsize_en e_position_en e_b_en">NT＄ <?= $order['amount']; ?></span>
        </div>
      </div>
    </div>


  </div>


<?php include __DIR__ . '/__html_foot.php' ?>