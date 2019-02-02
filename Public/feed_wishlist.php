<?php

require __DIR__ . '/__connect_db.php';

// Wishlist should be an array of items

$wishlist = isset($_SESSION['wishlist']) ? $_SESSION['wishlist'] : array();

?>

<?php if (count($wishlist) > 0): ?>

  <?php foreach ($wishlist as $key => $value): ?>

    <?php

    $productID = $key;

    $query  = sprintf("SELECT * FROM product_info WHERE sid = '$productID' LIMIT 1");
    $result = $pdo->query($query);

    ?>

    <?php while ($product = $result->fetch(PDO::FETCH_ASSOC)): ?>

      <ul class="r_flex wishlist-item">
        <li>
          <a href="#">
            <img src="img/product/l/<?php echo $product['Image_large']; ?>.png" alt="" class="r_wish_p">
          </a>
        </li>
        <li class="r_flex r_f_center">
          <ul>
            <li class="w_nav_en_font_sub"><p> <?php echo $product['Name_En']; ?></p></li>
            <li class="w_nav_en_font_sub"><p> <?php echo $product['Name_Ch']; ?></p></li>
            <li class="w_nav_en_font_sub"><p>NT＄ <?php echo $product['Price']; ?></p></li>
          </ul>
        </li>

        <!-- wishlist item move to cart icon -->
        <li class="r_flex r_f_center r_wish_ml">
          <a href="#" class="js-wishlist-buy" data-sid="<?php echo $product['sid']; ?>">
            <img src="img/icon/shopping_bag.svg" alt="">
          </a>
        </li>

        <!-- wishlist item delete icon -->
        <li class="r_flex r_f_center">
          <a href="#" class="js-wishlist-remove r_wish_delet_p" data-sid="<?php echo $product['sid']; ?>">
            <img src="img/icon/delete.svg" alt="">
          </a>
        </li>
      </ul>

    <?php endwhile; ?>

  <?php endforeach; ?>

<?php endif; ?>
