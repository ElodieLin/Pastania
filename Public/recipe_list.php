<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'recipe_list';
$per_page = 5; //5 items per page
$parmas = []; //associative array

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
if (isset($_GET['cate'])) {
    $params['cate'] = $cate;
}


// 用戶要看第幾頁 which page for user
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;


//get parent_sid from product list db
//撈資料庫裡categories的parent_sid
// 取得分類資料
$c_sql = "SELECT * FROM recipe_list WHERE sid= 1";
$c_stmt = $pdo->query($c_sql);
$cates = $c_stmt->fetchAll(PDO::FETCH_ASSOC);

// 把where 1 當作是true, 這麼寫可以下多個判斷
$where = ' WHERE 1';
if (!empty($cate)) {
    $where .= " AND sid=$cate ";
    // 連接->category_sid
}

// 取得總筆數, 在選擇該項目時 get items via productlist_sid
$t_sql = " SELECT COUNT(1) FROM recipe_info WHERE parent_sid= 1 ";
$total_rows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$total_pages = ceil($total_rows / $per_page); //總頁數


$page = $page > $total_pages ? $total_pages : $page;
$page = $page < 1 ? 1 : $page;


// get productlist_id from product info db
// 取得商品資料 get product info

$starting_limit = ($page - 1) * $per_page;

$page_sql = sprintf("SELECT * FROM recipe_info WHERE parent_sid = 1 LIMIT $starting_limit, $per_page");
$page_stmt = $pdo->query($page_sql);




?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>


<head>
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/recipe_list.css">
</head>

<body>
<section>
    <div class="w_recipes_list_breadcrumbs_word_big_box">
        <div class="w_recipes_list_breadcrumbs_word">
            <!-- 以下為麵包屑區域 -->
            <div class="w_recipes_list_breadcrumbs_box   product_detail_small_noto_thin_b">
                <a href="recipes_cate.php">
                    <span class="w_recipes_list_breadcrumbs_ch">食譜種類</span>
                    <span class="w_recipes_list_breadcrumbs_en">Recipes</span>
                </a>
                <span>></span>
                <?php

                $categoryID = $_GET['category'];


                $p_sql = sprintf("SELECT * FROM recipe_list WHERE sid = '$categoryID'");
                $p_stmt = $pdo->query($p_sql);

                ?>



                <?php while ($row = $p_stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <a href="#">
                        <span class="w_recipes_list_breadcrumbs_ch"><?= $row['recipe_type_ch'] ?></span>
                        <span class="w_recipes_list_breadcrumbs_en"><?= $row['recipe_type_en'] ?></span>
                    </a>
                <?php endwhile; ?>
            </div>
            <!-- 以上為麵包屑區域 -->

        </div>
    </div>




    <!------------ 以下為title區域 ------------>
    <div class="container-fluid">
        <div class="w_recipes_list_title">

            <!-- title detabase connect start -->
            <?php

            $categoryID = $_GET['category'];


            $p_sql = sprintf("SELECT * FROM recipe_list WHERE sid = '$categoryID'");
            $p_stmt = $pdo->query($p_sql);


            ?>

            <?php while ($row = $p_stmt->fetch(PDO::FETCH_ASSOC)): ?>

                <p class="noto_regular  w_recipes_list_title_line"><?= $row['recipe_type_ch'] ?></p>
                <p class="en_font title_party"><?= $row['recipe_type_en'] ?></p>

            <?php endwhile; ?>
            <!-- title detabase connect end -->
        </div>
    </div>
    <!------------ 以上為title區域 ------------>


    <div class="w_recipes_list_wrapper">


        <?php

        $categoryID = $_GET['category'];


        $p_sql = sprintf("SELECT * FROM recipe_info WHERE parent_sid = '$categoryID'");
        $p_stmt = $pdo->query($p_sql);

        $count = 0;

        ?>

        <?php while ($row = $p_stmt->fetch(PDO::FETCH_ASSOC)): ?>

            <?php

            $count++;

            $isEven = true;

            if ($count % 2 == 0) {
                $isEven = false;
            }

            ?>

            <?php if ($isEven): ?>

                <div class="w_recipes_list_bg_b">
                    <!------------ 以下為食譜照片區域 ------------>
                    <div class="w_recipes_list_img_box">
                        <img src="img/recipe/<?php echo $row['image']; ?>.jpg" alt="">
                    </div>
                    <!------------ 以上為食譜照片區域 ------------>


                    <div class="w_recipes_list_word_box">
                        <a href="recipe_detail.php?id=<?php echo $row['sid']; ?>&recipe=<?php echo $row['sid']; ?>">
                            <!-- direct to recipe detail page  -->
                            <!------------ 以下為食譜名稱區域 ------------>
                            <p class="w_recipes_list_en_font_small"><?php echo $row['name_en']; ?></p>
                            <p class="w_recipes_list_noto_regular_small"><?php echo $row['name_ch']; ?></p>
                            <!------------ 以上為食譜名稱區域 ------------>


                            <!------------ 以下為食譜連結、箭頭區域 ------------>

                            <div class="w_recipes_list_word_line_box">
                                <div class="w_recipes_list_word_line"></div>
                                <img class="w_recipes_list_word_img" src="img/icon/arrow.svg" alt="">
                            </div>
                            <!------------ 以上為食譜連結、箭頭區域 ------------>
                        </a>
                    </div>
                </div>


            <?php else: ?>

                <div class="w_recipes_list_bg_y">
                    <div class="w_recipes_list_word_box_r">
                        <a href="recipe_detail.php?id=<?php echo $row['sid']; ?>&recipe=<?php echo $row['sid']; ?>">
                            <!-- direct to recipe detail page  -->

                            <!------------ 以下為食譜名稱區域 ------------>
                            <p class="w_recipes_list_en_font_small"><?php echo $row['name_en']; ?></p>
                            <p class="w_recipes_list_noto_regular_small"><?php echo $row['name_ch']; ?></p>
                            <!------------ 以上為食譜名稱區域 ------------>


                            <!------------ 以下為食譜連結、箭頭區域 ------------>
                            <div class="w_recipes_list_word_line_box_r">
                                <img class="w_recipes_list_word_img_r" src="img/icon/arrow.svg" alt="">
                                <div class="w_recipes_list_word_line_r"></div>
                            </div>
                            <!------------ 以上為食譜連結、箭頭區域 ------------>
                        </a>
                    </div>
                    <!------------ 以下為食譜照片區域 ------------>
                    <div class="w_recipes_list_img_box">
                        <img src="img/recipe/<?php echo $row['image']; ?>.jpg" alt="">
                    </div>
                    <!------------ 以上為食譜照片區域 ------------>


                </div>

            <?php endif; ?>

        <?php endwhile; ?>


    </div>


          <!-- pagination start -->
          <div class="container">
            <div class="row">
                <!-- pre_arrow -->
                <div class="w_prodiuct_list_page">

                    <!-- <style>
                        .disabledArrow {
                            opacity: 0.25;
                        }
                        </style> -->

                    <?php

                    $prevPage = $page - 1;
                    $isHidden = false;

                    if ($prevPage < 1) {
                        $prevPage = 1;
                        $isHidden = true;
                    }

                    ?>

                    <div class="w_prodiuct_list_page_back <?php if ($isHidden) echo 'disabledArrow'; ?>">
                        <a href="?page=<?php echo $prevPage; ?>">
                            <img src="img/icon/arrow_red_back.svg" alt="">
                        </a>
                    </div>

                    <!-- 設定頁數迴圈 & 點到該分頁變成active -->
                    <?php for ($i = 1; $i <= $total_pages; $i++):
                        $params['page'] = $i;

                        ?>

                        <!-- <style>
                            .active a {
                                color: blue;
                            }
                            </style> -->

                        <div class="w_prodiuct_list_page_number">
                            <p class="w_prodiuct_list_page_number_one   w_pd_en_font_small_red <?= $i == $page ? 'active' : '' ?>">
                                <a href="?<?= http_build_query($params) ?>"><?= $i ?></a>
                            </p>

                        </div>
                    <?php endfor ?>

                    <?php

                    $nextPage = $page + 1;
                    $isHidden = false;

                    if ($nextPage > $total_pages) {
                        $nextPage = $total_pages;
                        $isHidden = true;
                    }

                    ?>

                    <!-- next icon -->
                    <div class="w_prodiuct_list_page_next <?php if ($isHidden) echo 'disabledArrow'; ?>">
                        <a href="?page=<?php echo $nextPage; ?>">
                            <img src="img/icon/arrow_red_next.svg" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- pagination end -->

</section>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
</script>


<script>

</script>
</body>

<?php include __DIR__ . '/__html_foot.php' ?>
