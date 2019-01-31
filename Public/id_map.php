<?php

require __DIR__. '/__connect_db.php';

$_GET['id'];


$m_sql = sprintf("SELECT * FROM `pasta_map` WHERE `id` = '" . $_GET['id'] . "' ");
$m_stmt = $pdo->query($m_sql);

while ($row = $m_stmt->fetch(PDO::FETCH_ASSOC)) {
    $map = $row;
}

?>
<!-- The Modal Head -->
<div class="modal-header border-bottom-0 pb-0 ">
    <div href="#" class="col-12 modal-title mx-auto text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="card-title text-center r_noto_regular pt-4" id=""><?= $map['District_Ch'] ?></h4>
        <h4 class="card-title text-center en_font" id="title_en"><?= $map['District_En'] ?></h4>

    </div>
</div>
<!-- The Modal Body -->
<div class="modal-body pt-0 pb-0 pr-5 pl-5">
<img src="img/recipe/<?= $map['Image'] ?>.jpg" alt="">
    <h5 class="card-title text-center r_en_font pt-4 mb-1" id="district_en"><?= $map['Recipe_name_En'] ?></h5>
    <h5 class="card-title text-center r_noto_light pb-3" id="district_ch"><?= $map['Recipe_name_Ch'] ?></h5>
    <h6 class="card-title text-justify noto_light" id="district_des">
    <?= $map['Description'] ?></h6>
</h6>
    <div class="input-group mb-3">
    </div>
</div>
<!-- The Modal Footer -->
<div class="modal-footer pt-0 pr-5 pl-5 border-top-0">
    <a href="recipe_detail.php?id=<?= $map['Recipe_no'] ?>&recipe=<?= $map['Recipe_no'] ?>" class="btn r_btn col-md-12 mx-auto noto_light pt-3 pb-3 mt-0 mb-3">
        前往食譜頁

    </a>
</div>

