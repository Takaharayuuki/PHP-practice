<?php require_once 'products.php' ?>
<?php require_once 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css" >
  <title>PHP</title>
</head>
<body>
  <div class="container">
    <div class="app-container">
      <h1 class="title">Shopping</h1>
      <div class="cards-container">
      <?php foreach($products as $product): ?>
        <div class="card">
          <img class="card-image" src="<?php echo $product["image"]; ?> " alt="">
          <p class="card-title"><?php echo $product["name"]; ?></php>
          <div class="flex justify-between">
            <p class="card-price"><?php echo displayPrice($product["price"]); ?></p>
            <input min="0" class="item-number" type="number" value="0">
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="btn-footer bg-white">
        <input class="cart-btn" type="submit" name="submit" value="カートに追加" />
      </div>
    </div>
  </div>
</body>
</html>