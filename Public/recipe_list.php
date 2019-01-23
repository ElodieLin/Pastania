<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'recipe_list';
$per_page = 5; //5 items per page
$parmas = []; //associative array

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
                        <a href="recipe_detail.php?id=<?php echo $row['sid']; ?>">
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
                        <a href="recipe_detail.php?id=<?php echo $row['sid']; ?>">
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
    </div>


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
