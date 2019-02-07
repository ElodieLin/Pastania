<?php

require __DIR__. '/__connect_db.php';

$m_sql = sprintf("SELECT * FROM `pasta_map` WHERE `Area` = '" . $_GET['area'] . "' ");

// echo $m_sql;
// echo '<br>';
$m_stmt = $pdo->query($m_sql);


$rows = $m_stmt->fetchAll(PDO::FETCH_ASSOC);

$r_sql = sprintf("")

?>

<?php foreach($rows as $row): ?>

    <div class="item">
        <h4 class="card-title text-center r_noto_regular_p pt-2 mb-2"><?= $row['District_Ch'] ?></h4>
        <h4 class="card-title text-center r_en_font_p pb-2"><?= $row['District_En'] ?></h4>
        <img src="img/recipe/<?= $row['Image'] ?>.jpg" alt="">
        <h5 class="card-title text-center r_en_font_p pt-4 mb-1"><?= $row['Recipe_name_En'] ?></h5>
        <h5 class="card-title text-center r_noto_regular_p pb-2"><?= $row['Recipe_name_Ch'] ?></h5>
        <h6 class="card-title text-justify r_noto_light_p pb-2"><?= $row['Description'] ?></h6>

        <a href="recipe_detail.php?id=<?= $row['Recipe_no'] ?>&recipe=<?= $row['Recipe_no'] ?>">
        <button type="button" class="btn r_btn col-md-12 mx-auto r_noto_regular_p pt-3 pb-3 mt-0">
        前往食譜頁
        </button>
        </a> 
    </div>

<?php endforeach; ?>



