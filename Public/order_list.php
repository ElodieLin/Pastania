<?php require __DIR__ . '/__connect_db.php';

$page_name = 'order_list';


if (!isset($_SESSION['user'])) {
    header('Location: ./');
    exit;
}

// 查訂單

$o_sql = "SELECT `sid`, `member_sid`, `amount`, `order_date`, `tracking_num` 
          FROM `orders` 
          WHERE `member_sid`=? AND `order_date`>'2018-07-01' ORDER BY `order_date` DESC";


$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    $_SESSION['user']['id']
]);

$orders = $o_stmt->fetchAll(PDO::FETCH_ASSOC);

$order_sids = [];
foreach ($orders as $order) {
    $order_sids[] = $order['sid'];
}


?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>
  <style>
    .container {
      margin-top: 130px;

    }

    /* 以下是英文字型，是標題大小，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 (只有食譜細節頁的標題會改粗體可以直接在html裡加粗體的標籤)*/
    .en_font {
      font-family: 'Lao MN', 'Arya';
      font-size: 2rem;
      color: #5C7880;
    }

    /* 以下是中文字型＿light，內文用，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
    .noto_light {
      font-family: 'Noto Sans TC';
      font-weight: 300;
      /* 這是次細的(light) */
      letter-spacing: 2px;
      font-size: 1.3rem;
      color: #5C7880;

    }

    /* 以下是中文字型_thin，次要內文用，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
    .noto_thin {
      font-family: 'Noto Sans TC';
      font-weight: 100;
      /* 這是最細的(thin) */
      letter-spacing: 2px;
      /* font-size: 1.3rem;
      color: #5C7880; */
      color: #E67348;

    }


    /* 以下是中文字型標題大小 regular，頁面大標題用，如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
    .noto_regular {
      font-family: 'Noto Sans TC';
      letter-spacing: 2px;
      font-size: 2rem;
      color: #5C7880;

    }


    /* 以上是模組 */


    .en_font_content {
      font-size: 1.1rem;
    }

    /* btn */
    .e_btn {
      /* width: 372px;
      height: 70px; */
      border: 0;
      background-color: #E67348 !important;
      color: #fff;
      font-size: 1rem;
      /* border-radius: 5px; */
      /* text-align: center;
      cursor: pointer; */
      font-family: 'Noto Sans TC';
    }

    .ch_text {
      font-size: 1.2rem !important;
      font-weight: 400 !important;
    }

    .container{
      margin-bottom:400px;
    }




  </style>


  <div class="container">
    <h2 class="text-center py-4 noto_regular"> 訂單查詢 </h2>
    <table class="table mt-3">

      <thead>
      <tr>
        <th scope="col" class="en_font en_font_content">No.</th>
        <th scope="col" class="noto_regular ch_text">訂單編號</th>
        <th scope="col" class="noto_regular ch_text">訂單成立日期</th>
        <th scope="col" class="noto_regular ch_text">訂單金額</th>
        <th scope="col" class="noto_regular ch_text">狀態</th>
        <th scope="col"></th>
      </tr>
      </thead>
      <tbody>
      <?php
      $order_sids = [];
      foreach ($orders as $order) {

          // $order_sids[] = $order['sid'];
          // $orders = $o_stmt->fetchAll(PDO::FETCH_ASSOC);


          ?>
        <tr class="rows">
          <th scope="row" class="en_font en_font_content rowCount"></th>
          <td class="en_font en_font_content"><?= $order['tracking_num'] ?></td>
          <td class="en_font en_font_content"><?= $order['order_date'] ?></td>
          <td class="en_font en_font_content">NT$ <?= $order['amount'] ?> </td>
          <td class="noto_thin">訂單確認中</td>
          <td><a href="order_detail.php">
              <button class="btn btn-info e_btn">查看訂單</button>
            </a></td>
        </tr>
      <?php } ?>
      <script>
          var i = 1;
          $(".rowCount").each(
              function () {
                  $(this).text(i);
                  i++;
              }
          )

      </script>
      <!-- <tr>
        <th scope="row" class="en_font en_font_content">2</th>
        <td class="en_font en_font_content">XITOWIEJR</td>
        <td class="en_font en_font_content">2019-02-02</td>
        <td class="en_font en_font_content">NT$ </td>
        <td class="noto_thin">訂單確認中</td>
        <td><a href="cart_step4_card.php"> <button class="btn btn-info e_btn">查看訂單 </button></a></td>
      </tr> -->

      <!-- <tr>
        <th scope="row" class="en_font en_font_content">3</th>
        <td class="en_font en_font_content">XITOWIEJR</td>
        <td class="en_font en_font_content">2019-02-02</td>
        <td class="en_font en_font_content">NT$ </td>
        <td class="noto_thin">訂單確認中</td>
        <td><a href="cart_step4_card.php"> <button class="btn btn-info e_btn">查看訂單 </button></a></td>
      </tr> -->

      </tbody>
    </table>
  </div>

<?php include __DIR__ . '/__html_foot.php' ?>