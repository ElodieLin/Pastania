<?php

require __DIR__ . '/__connect_db.php';

// Wishlist should be an array of items

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

?>

<?php if (count($cart) > 0): ?>

  <?php foreach ($cart as $key => $value): ?>

    <?php

    $productID = $key;

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
            <li class="w_nav_en_font_sub"><p>NT＄ <?php echo $product['Price']; ?></p></li>
          </ul>
        </li>
      </ul>

    <?php endwhile; ?>

  <?php endforeach; ?>

<?php endif; ?>
