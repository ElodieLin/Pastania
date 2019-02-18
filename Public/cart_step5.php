<?php require __DIR__ . '/__connect_db.php';

if ($_POST)
{
  $order = $_SESSION['order'];
  $cart  = $_SESSION['cart'];

  $trackingNo = sprintf('PASTA-%s', mt_rand(10000000, 99999999));


  
  try {

    $sql = "INSERT INTO `orders` (`member_sid`, `amount`, `mobile`, `delivery_way`,
    `delivery_time`, `payment`, `order_date`, `receive_name`, `tracking_num`) VALUES (
      ?, ?, ?, ?, ?, ?, NOW(), ?, ?)";
    $stmt = $pdo->prepare($sql);

      $stmt->execute([
    $_SESSION['user']['id'],
    $_SESSION['order']['total'],
    $_SESSION['order']['mobile'],
    $_SESSION['order']['delivery_way'],
    $_SESSION['order']['delivery_time'],
    $_SESSION['order']['payment_option'],
    $_SESSION['order']['nickname'],
    $trackingNo
  ]);
    } catch (PDOException $e) {
        var_dump($e);
    }
    // 前一筆插入的 id
    $order_id = $pdo -> lastInsertId();

    $keys = array_keys($cart);
    $sql = sprintf("SELECT * FROM `product_info` WHERE `sid` IN ('%s')",
        implode("','", $keys)
    ); //加入','在字串間

    $stmt = $pdo->query($sql);

    $cart_data = []; // 存放商品資料和數量
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {

        // 把商品的數量, 設定給該項目的 qty 屬性(array)
        $r['qty'] = $cart[$r['sid']];

        $cart_data[$r['sid']] = $r;
    }

    $params = array();

    foreach ($keys as $k) {
        $params[] = array($order_id, $cart_data[$k]['sid'], $cart_data[$k]['Price'], $cart[$k]);
    }

    try {
        $sql = "INSERT INTO `order_details` (`order_sid`, `product_sid`, `price`, `quantity`) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        foreach ($params as $line) {
            $stmt->execute($line);
        }
    } catch (PDOException $e) {
        var_dump($e);
    }
}
unset($_SESSION['cart']);
?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php'; ?>



    <link rel="stylesheet" href="css/cart_step5.css">




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


        <!-- 感謝購買 Thanks for purchasing-->
        <div class="e_thanks">
            <p class="noto_light ">感謝您的購買</p>
            <hr class="e_cart_hr">
            <!-- order tracking number  -->
            <p class="noto_light">訂單編號：<?php echo $trackingNo; ?></p>
            <p class="noto_light">訂單購買確認信已經寄送到您的信箱，詳細購買明細及發票資訊請查閱電子郵件。</p>
        </div>


        <!-- ATM轉帳資訊 （card&超取不顯示）will show when choose ATM  payment transition -->
        <div class="e_selected_ATM">
            <p class="noto_light ">付款方式 - ATM</p>
            <hr class="e_cart_hr">
            <p class="noto_light e_fontsize">※請在兩天內匯款，若在兩天內沒收到匯款資訊系統會自動取消訂單。</p>

            <div class="e_ATM_info" role="">
                <p class="noto_light e_ATM_info_title">ATM轉帳資訊</p>
                <hr>
                <p class="noto_light e_info_confirm">銀行名稱： 013國泰世華銀行 </p>
                <p class="noto_light e_info_confirm">匯款帳號： 1234-5678-999900</p>
                <p class="noto_light e_info_confirm">轉帳金額： <span> NT$ 287</span> </p>
                <p class="noto_light e_info_confirm">繳款期限： <span>2018/12/25</span> 23:59pm 之前</p>

            </div>
        </div>

    </div>

<?php include __DIR__ . '/__html_foot.php' ?>
