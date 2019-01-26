<?php

require __DIR__ . '/__connect_db.php';


?>


<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>


<?php
$recipeID = $_GET['recipe'];

$r_sql = sprintf("SELECT * FROM recipe_info WHERE sid = '$recipeID' ");
$r_stmt = $pdo->query($r_sql);

while ($row = $r_stmt->fetch(PDO::FETCH_ASSOC)) {
    $recipe = $row;
}




$t_sql = sprintf("SELECT recipe_info.*, recipe_list.recipe_type_en as soase_type_en FROM recipe_info join recipe_list on recipe_info.parent_sid = recipe_list.sid WHERE recipe_info.sid= '$recipeID' ");
$t_stmt = $pdo->query($t_sql);

while ($row_t = $t_stmt->fetch(PDO::FETCH_ASSOC)) {
    $type = $row_t;
}


?>
<head>

    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/recipe_detail.css">
</head>

<body>
<div class="w_recipes_detail_breadcrumbs_word_big_box">
    <div class="w_recipes_detail_breadcrumbs_word">
        <!-- 以下為麵包屑區域 -->
        <div class="w_recipes_detail_breadcrumbs_box   product_detail_small_noto_thin_b">
            <a href="recipes_cate.php">
                <span class="w_recipes_detail_breadcrumbs_ch">食譜種類</span>
                <span class="w_recipes_detail_breadcrumbs_en">Recipes</span>
            </a>
            <span>></span>
            <a href="recipe_list_party.php">
                <span class="w_recipes_detail_breadcrumbs_ch"><?= $recipe['type'] ?></span>
                <span class="w_recipes_detail_breadcrumbs_en"><?= $type['soase_type_en'] ?></span>
            </a>
            <span>></span>
            <a href="recipe_detail.php">
                <span class="w_recipes_detail_breadcrumbs_ch"><?= $recipe['name_ch'] ?></span>
                <span class="w_recipes_detail_breadcrumbs_en"><?= $recipe['name_en'] ?></span>
            </a>
        </div>
        <!-- 以上為麵包屑區域 -->
    </div>
</div>


<!------- 以下為介紹內文設定 ------->
<div class="w_recipes_detail_wrapper_one">
    <div class="w_recipes_detail_big_img_box">
        <img src="img/recipe/<?= $recipe['image'] ?>.jpg" alt="">
    </div>
    <div class="w_recipes_detail_big_word_box">
        <div class="w_recipes_detail_big_word_opacity">
            <!------- 標題文字 ------->
            <p class="w_recipes_detail_title_en_font"><?= $recipe['name_en'] ?></p>
            <p class="w_recipes_detail_title_noto_light"><?= $recipe['name_ch']?></p>
        </div>
    </div>
</div>
<div class="w_recipes_detail_wrapper_two">
    <div class="w_recipes_detail_introduction">
        <!------- 介紹文字 ------->
        <p class="noto_thin distric_into"><?= $recipe['description'] ?></p>
    </div>
</div>
<!------- 以上為介紹內文設定 ------->


<div class="w_recipes_detail_wrapper_three">
    <!------- 以下以為三個icon設定 ------->
    <div class="row w_recipes_detail_icon">
        <div class="col-md-4 col-4">
            <img src="img/icon/recipe_portion.svg" alt="">
            <p class="noto_light"><?= $recipe['serve'] ?>人份</p>
        </div>
        <div class="col-md-4 col-4">
            <img src="img/icon/recipe_time.svg" alt="">
            <p class="noto_light"><?= $recipe['time'] ?></p>
        </div>
        <div class="col-md-4 col-4">
            <img src="img/icon/recipe_medium.svg" alt="">
            <p class="noto_light">難易度 <?= $recipe['level'] ?></p>
        </div>
    </div>
    <!------- 以上以為三個icon設定 ------->


    <!------- 以下為烹煮步驟、材料區域設定 ------->
    <div class="row">
        <div class="col-md-7">
            <div class="w_recipes_detail_cook_step">
                <p class="w_recipes_detail_cook_title_in   noto_regular">烹煮步驟</p>
                <!------- 烹煮步驟文字 ------->
                <p class="noto_thin">
                <?php echo nl2br($recipe['step']); ?> 
                </p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="w_recipes_detail_cook_material">
                <p class="w_recipes_detail_cook_title_in   noto_regular">材料</p>
                <!------- 材料文字 ------->
                <p class="noto_thin ingredients">
                <?php echo nl2br($recipe['ingredient']); ?>

                </p>
            </div>
        </div>
    </div>
</div>
<!------- 以上為烹煮步驟、材料區域設定 ------->

<?php
    $likeID = $_GET['ran_product'];

    $l_sql = sprintf("SELECT * FROM product_info ORDER BY RAND() LIMIT 4;");
    $l_stmt = $pdo->query($l_sql);

    // while ($row_ran = $l_stmt->fetch(PDO::FETCH_ASSOC)) {
    //     $ran_product = $row_ran;
    // }
?>



<!------- 以下最佳搭配設定 Best with ------->
<div class="w_recipes_detail_wrapper_four">
    <div class="row">


        <div class="col-md-4">
            <p class="w_recipes_detail_cook_title_in  noto_regular">最佳搭配</p>
        </div>
    </div>
    <div class="row">


   
    <?php while ($row_ran = $l_stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="col-md-3  col-6   w_recipes_detail_best">
            <!------- 最佳搭配商品圖片 -------> 
           
            <a href="product_detail.php?product=<?= $row_ran['sid'] ?>"><img src="img/product/l/<?= $row_ran['Image_large'] ?>.png" alt="">
                <!-- direct to random pasta detail page  -->
                <div class="w_recipes_detail_best_word_box">
                    <!------- 最佳搭配品名、金額 ------->
                    <p class="w_recipes_detail_best_en_font"><?= $row_ran['Name_En'] ?> <?= $row_ran['product_no'] ?></p>
                    <p class="noto_light"><?= $row_ran['Name_Ch'] ?></p>
                    <p class="w_recipes_detail_best_en_font    w_recipes_detail_best_money">NT＄ <?= $row_ran['Price'] ?></p>
                </div>
            </a>
           
        </div>
        <?php endwhile; ?>
        
        
    </div>
</div>
<!------- 以上最佳搭配設定 ------->


<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script>

</script>

</body>

<?php include __DIR__ . '/__html_foot.php' ?>
