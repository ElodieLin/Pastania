<?php
require __DIR__. '/__connect_db.php';

// 如果沒登入會員, 或者購物車內是空的
if(! isset($_SESSION['user']) or empty($_SESSION['cart'])){
    header('Location: ./');
    exit;
}


// <--- begin 同購物車列表頁(cart.php)前處理
$keys = array_keys($_SESSION['cart']);
//$sql = "SELECT * FROM `products` WHERE `sid` IN ('18', '20', '7')";
$sql = sprintf("SELECT * FROM `products` WHERE `sid` IN ('%s')",
    implode("','", $keys)
);

$stmt = $pdo->query($sql);

$cart_data = []; // 存放商品資料和數量
$total_price = 0; // 總計
while($r = $stmt->fetch(PDO::FETCH_ASSOC)){

    // 把商品的數量, 設定給該項目的 qty 屬性
    $r['qty'] = $_SESSION['cart'][$r['sid']];

    $cart_data[$r['sid']] = $r;

    $total_price += $r['qty']*$r['price'];
}
// <--- end 同購物車列表頁前處理


//寫入db-> orders資訊                                                       // 時間設當下Now()
$o_sql = "INSERT INTO `orders`(`member_sid`, `amount`, `order_date`) VALUES (?, ?, NOW())";
$o_stmt = $pdo->prepare($o_sql);

$o_stmt->execute([
    $_SESSION['user']['id'],
    $total_price
    ]);

$o_sid = $pdo->lastInsertId(); // 取得新增資料後, 該筆的主鍵


// 將orders購買資訊寫入order_details的db裡
$d_sql = "INSERT INTO `order_details`(`order_sid`, `product_sid`, `price`, `quantity`) VALUES (?,?,?,?)";

$d_stmt = $pdo->prepare($d_sql);

foreach($keys as $p_sid){
    $d_stmt->execute([
        $o_sid,
        $p_sid,
        $cart_data[$p_sid]['price'],
        $cart_data[$p_sid]['qty']
    ]);
}

unset($_SESSION['cart']); // 清除購物車內容




?>
<?php include __DIR__. '/__html_head.php' ?>
<?php include __DIR__. '/__navbar.php' ?>
<div class="container">

<!-- 當按確認購買後會顯示的資訊(navbar cart 數目會歸零) -->
<div class="alert alert-info">感謝您的購買</div>

<!-- TODO: 購物明細 -->

</div>
<?php include __DIR__. '/__html_foot.php' ?>