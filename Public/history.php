<?php

require __DIR__. '/__connect_db.php';

if(! isset($_SESSION['user'])){
    header('Location: ./');
    exit;
}

// 查訂單

$o_sql = "SELECT `sid`, `member_sid`, `amount`, `order_date` 
          FROM `orders` 
          WHERE `member_sid`=? AND `order_date`>'2018-07-01'";

$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    $_SESSION['user']['id']
]);

$orders = $o_stmt->fetchAll(PDO::FETCH_ASSOC);

$order_sids = [];
foreach($orders as $order){
    $order_sids[] = $order['sid'];
}

$d_sql = sprintf("SELECT order_details.*, product_info.Name_En, product_info.product_no, product_info.Name_Ch
          FROM `order_details` 
          LEFT JOIN `product_info` ON order_details.product_sid=product_info.sid
          WHERE order_details.order_sid in (%s)", implode(',', $order_sids));

/*
$d_sql = sprintf("SELECT order_details.*
          FROM `order_details` 
          WHERE order_details.order_sid in (%s)", implode(',', $order_sids));

*/

$d_stmt = $pdo->query($d_sql);

$details = $d_stmt->fetchAll(PDO::FETCH_ASSOC);



?>
<?php include __DIR__. '/__html_head.php' ?>
<?php include __DIR__. '/__navbar.php' ?>
<div class="container">

<pre>
    <?php
    // echo $d_sql;

    print_r($orders);
    print_r($details);
    ?>




</pre>


</div>
<?php include __DIR__. '/__html_foot.php' ?>