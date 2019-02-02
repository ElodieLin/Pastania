<?php
session_start();

// 宣告
if(! isset($_SESSION['wishlist'])){
    $_SESSION['wishlist'] = [];
}

//設定sid 跟數量都不為0
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;

if(! empty($sid)){
    // 如果 sid 不為 0, 有設定時

    if(empty($qty)) {
    // 移除 (當數量是空值時)
    unset($_SESSION['wishlist'][$sid]);

    } else {
    // 加入 或 變更 add or change
    

    $_SESSION['wishlist'][$sid] = $qty;
    }

}

echo json_encode($_SESSION['wishlist']);