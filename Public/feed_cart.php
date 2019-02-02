<?php

require __DIR__ . '/__connect_db.php';

// Wishlist should be an array of items

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

?>

<?php if (count($cart) > 0): ?>

  <?php foreach ($cart as $productID => $productQuantity): ?>

    <?php

    $query  = sprintf("SELECT * FROM product_info WHERE sid = '$productID' LIMIT 1");
    $result = $pdo->query($query);

    ?>

    <?php while ($product = $result->fetch(PDO::FETCH_ASSOC)): ?>

      <ul class="r_flex">
        <li>
          <a href="#">
            <img src="img/product/l/<?php echo $product['Image_large']; ?>.png" alt="" class="r_wish_p">
          </a>
        </li>
        <li class="r_flex r_f_center">
          <ul>
            <li class="w_nav_en_font_sub"><p> <?php echo $product['Name_En']; ?></p></li>
            <li class="w_nav_en_font_sub"><p> <?php echo $product['Name_Ch']; ?></p></li>
            <li class="w_nav_en_font_sub">數量: <?php echo $productQuantity; ?></li>
          </ul>
        </li>

        <li class="r_flex r_f_center r_wish_ml">
          <p>NT＄ <?php echo $productQuantity * $product['Price']; ?></p>
        </li>
      </ul>

    <?php endwhile; ?>

  <?php endforeach; ?>

<?php endif; ?>
