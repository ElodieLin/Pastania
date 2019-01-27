<?php
session_start();

// 宣告
if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

//設定sid 跟數量都不為0
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;

if(! empty($sid)){
    // 如果 sid 不為 0, 有設定時

    if(empty($qty)) {
    // 移除 (當數量是空值時)
    unset($_SESSION['cart'][$sid]);

    } else {
    // 加入 或 變更
    // TODO: 要去資料庫確認有這個商品, 而且商品在架上

    $_SESSION['cart'][$sid] = $qty;
    }

}

echo json_encode($_SESSION['cart']);