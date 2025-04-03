<?php
session_start();

if (isset($_POST['clear_cart'])) {
    unset($_SESSION['cart']); 
    header("Location: cartv2.php"); 
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Store</title>

    
    <link rel="stylesheet" type="text/css" href="s.css">
</head>
<div class="header">  
    <div class="header__logo">
      <strong>LeStore</strong>
    </div>
<body bgcolor="#0d0d0d"> 
    <nav class="navbar">
    
    <ul class="toolbar">
       
        <li class="link"><a href="login.php">login</a></li> 
        <li class="link"><a href="cartv2.php">cart</a></li>
        <li class="link"><a href="productsv2.php">products</a></li>
        <li class="link"><a href="index.php">home</a></li>


    </ul>
    </nav>
</div>
<br>
<br>

<div class="container">
    <h1 class="home_header">LeCart</h1>
    <br>
    <br>
    <?php if (empty($_SESSION['cart'])): ?>
  <p>Your cart is empty.</p>
<?php else: ?>
  <?php foreach ($_SESSION['cart'] as $id => $item): ?>
    <div class="cart-product">
      <img src="images/<?php echo $id; ?>.jpg" width="100">
      <h3><?php echo $item['name']; ?></h3>
      <p>Quantity: <?php echo $item['quantity']; ?></p>
      <p>Total Price: $ <?php echo number_format($item['total'], 2); ?></p>
      <hr>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

<form method="POST" action="cartv2.php">
    <button type="submit" name="clear_cart">Clear Cart</button>
</form>

    <br>
    <div class="links">
                Proceed to <a href="checkout.php">Check Out</a>
    </div>
</div>




<script src="index.js"></script>

</body>
</html>
