<?php
require __DIR__ . '/__connect_db.php';
$m_sql = "SELECT * FROM `product_info` WHERE `Name_Ch` LIKE '%" . $_GET['q'] . "%' ";
$m_stmt = $pdo->query($m_sql);
$rows = $m_stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>


<link rel="stylesheet" href="css/search.css">
<section>
  <?php if(count($rows) == 0): ?>
  <!------------ 以下為title區域 ------------>
  <div class="container">
    <div class="r_product_search_title">
      <p class="w_noto_light">未找到搜尋結果</p>
      <p class="w_noto_light_small">請再輸入其他文字</p>
    </div>
  </div>
  <!------------ 以上為title區域 ------------>
    <div class="container d-flex">
      <div class="row">
        <div class="input-group m-4">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-serach"><img src="img/icon/search.svg" alt=""
                                                                    style="width: 20px"></span>
          </div>
          <form action="/search.php" class="search">
            <input type="search" class="form-control input_s" id="search-bar" name="q" placeholder="請輸入關鍵字搜尋"
                   aria-label="search" aria-describedby="basic-serach">
          </form>
        </div>
      </div>
    </div>
  <?php else: ?>
    <!------------ 以下為title區域 ------------>
    <div class="container">
      <div class="r_product_search_title">
        <p class="w_noto_light">找到 <?php echo count($rows); ?> 筆關於 '<?php echo $_GET['q']; ?>' 的資料</p>
      </div>
    </div>
    <!------------ 以上為title區域 ------------>

  <div class="container d-flex">
    <div class="row">
      <div class="input-group m-4">
        <div class="input-group-prepend">
              <span class="input-group-text" id="basic-serach"><img src="img/icon/search.svg" alt=""
                                                                    style="width: 20px"></span>
        </div>
        <form action="/search.php" class="search">
          <input type="search" class="form-control input_s" id="search-bar" name="q" placeholder="請輸入關鍵字搜尋"
                 aria-label="search" aria-describedby="basic-serach">
        </form>
      </div>

      <?php foreach ($rows as $row): ?>
        <div class="w_product_list_wrapper col-md-4 col-6">
          <div class="w_product_list_bg">
            <!------------ 此處換商品照片 ------------>
            <img src="img/product/s/<?php echo $row['Image_small']; ?>.png" alt="">

          </div>
          <div class="w_product_list_word_bg">
            <!------------ 此處為商品照片連結 （電腦版）------------>
            <a href="<?php echo '/product_detail.php?product=' . $row['sid'] . '&type=' . $row['productlist_sid']; ?>" class="">
              <p class="w_noto_light_small    w_product_list_word_center    padding-r"><?php echo $row['Name_Ch']; ?></p>
              <p class="w_en_font_small    w_product_list_word_center    padding-r"><?php echo $row['Name_En']; ?></p>
              <div class="w_product_list_arrow    padding-r"><img class="" src="img/icon/arrow.svg" alt=""></div>
            </a>
          </div>
          <div class="w_product_list_word_mobil">
            <!------------ 此處為商品照片連結（手機版） ------------>
            <a href="<?php echo '/product_detail.php?product=' . $row['sid'] . '&type=' . $row['productlist_sid']; ?>">
              <p class="w_noto_light_small    padding-r"><?php echo $row['Name_Ch']; ?></p>
              <p class="w_en_font_small    padding-r"><?php echo $row['Name_En']; ?></p>
            </a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <?php endif; ?>
</section>

<?php include __DIR__ . '/__html_foot.php' ?>