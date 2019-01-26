<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'product_list_long';
$per_page = 12; //12items per page
$parmas = []; //associative array

?>


<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

<?php


$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
if (isset($_GET['cate'])) {
    $params['cate'] = $cate;
}


// 用戶要看第幾頁 which page for user
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;


//get parent_sid from product list db
//撈資料庫裡categories的parent_sid
// 取得分類資料
$c_sql = "SELECT * FROM product_list WHERE parent_sid=6";
$c_stmt = $pdo->query($c_sql);
$cates = $c_stmt->fetchAll(PDO::FETCH_ASSOC);

// 把where 1 當作是true, 這麼寫可以下多個判斷
$where = ' WHERE 1';
if (!empty($cate)) {
    $where .= " AND productlist_sid=$cate ";
    // 連接->category_sid
}

// 取得總筆數, 在選擇該項目時 get items via productlist_sid
$t_sql = " SELECT COUNT(1) FROM giftbox WHERE sid";
$total_rows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$total_pages = ceil($total_rows / $per_page); //總頁數


$page = $page > $total_pages ? $total_pages : $page;
$page = $page < 1 ? 1 : $page;


// get productlist_id from product info db
// 取得商品資料 get product info

$starting_limit = ($page - 1) * $per_page;

$p_sql = sprintf("SELECT * FROM giftbox WHERE sid LIMIT $starting_limit, $per_page");
$p_stmt = $pdo->query($p_sql);

?>

    <head>
        <link rel="stylesheet" href="css/product_list_gift_set.css">
    </head>


    <body>
    <header>
        <div class="w_product_list_cover"></div>
    </header>
    <section>
        <!------------ 以下為title區域 ------------>
        <div class="container">
            <div class="w_product_list_title">

                <p class="noto_regular">組合包</p>
                <img class="w_product_list_title_img" src="img/pages/product_list/gift_set_title.svg" alt="">
                <p class="en_font">Gift Set</p>

            </div>
        </div>
        <!------------ 以上為title區域 ------------>


        <div class="container d-flex">
            <div class="row">
                <!-- fetch 資料庫裡products資料 -->
                <?php while ($row = $p_stmt->fetch(PDO::FETCH_ASSOC)): ?>


                    <div class="w_product_list_wrapper col-md-4 col-6">
                        <div class="w_product_list_bg">
                            <!------------ 此處換商品照片 ------------>
                            <img src="img/giftbox/<?= $row['Image'] ?>.png" alt="">

                        </div>
                        <div class="w_product_list_word_bg">
                            <!------------ 此處為商品照片連結 （電腦版）------------>
                            <a href="product_giftset_detail.php?product=<?= $row['sid']; ?>&sauce=<?= $row['sid'] ?>&pasta=<?= $row['sid'] ?>"
                               class="">
                                <p class="w_gift_set_noto_light_small    w_product_list_word_center    padding-r"><?= $row['Name_Ch'] ?></p>
                                <p class="w_gift_set_en_font_small    w_product_list_word_center    padding-r"><?= $row['Name_En'] ?></p>
                                <div class="w_product_list_arrow    padding-r"><img class="" src="img/icon/arrow.svg"
                                                                                    alt=""></div>
                            </a>
                        </div>
                        <div class="w_product_list_word_mobil">
                            <!------------ 此處為商品照片連結（手機版） ------------>
                            <a href="product_detail.php">
                                <p class="w_noto_light_small    padding-r"><?= $row['Name_Ch'] ?></p>
                                <p class="w_en_font_small    padding-r"><?= $row['Name_En'] ?></p>
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>

        </div>


        <!--
                <div class="container">
                    <div class="row">
                        <div class="w_prodiuct_list_page">
                            <div class="w_prodiuct_list_page_back">
                                <a href="">
                                    <img src="img/icon/arrow_red_back.svg" alt="">
                                </a>
                            </div>
                            <div class="w_prodiuct_list_page_number">
                                <p class="w_prodiuct_list_page_number_one   w_pd_en_font_small_red">
                                    <a href="">1</a>
                                </p>
                                <p class="w_prodiuct_list_page_number_two   w_pd_en_font_small_red">
                                    <a href="">2</a>
                                </p>
                                <p class="w_prodiuct_list_page_number_three   w_pd_en_font_small_red">
                                    <a href="">3</a>
                                </p>
                            </div>

                            <div class="w_prodiuct_list_page_next">
                                <a href="">
                                    <img src="img/icon/arrow_red_next.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->


    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>
    <script>
    </script>

    </body>

<?php include __DIR__ . '/__html_foot.php' ?>