<?php
session_start(); 

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = floatval($_POST['price']);

    $key = $id;

    if (isset($_SESSION['cart'][$key])) {
        $_SESSION['cart'][$key]['quantity'] += 1;
        $_SESSION['cart'][$key]['total'] += $price;
    } else {
        $_SESSION['cart'][$key] = [
            'name' => $name,
            'price' => $price,
            'quantity' => 1,
            'total' => $price
        ];
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Store</title>

    
    <link rel="stylesheet" type="text/css" href="s.css">
</head>

<body bgcolor="#0d0d0d"> <!-- Sets the background color of the page -->
<div class="header">  
    <div class="header__logo">
      <strong>LeStore</strong>
    </div> 

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
    <h1 class="home_header">LeProducts</h1>
    <?php
       if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
         echo "<p>Your cart is empty.</p>";
        } else {
         echo "<ul>";
         foreach ($_SESSION['cart'] as $id => $item) {
        echo "<li>{$item['name']} - Quantity: {$item['quantity']} - Total: $" . number_format($item['total'], 2) . "</li>";
         }
         echo "</ul>";
}
?>
    <br>
    <br>
    <section class="pro-grid">
    <div class="product">
        <img src="images/33147.jpg">
        <p>Price: 40.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="33147">
            <input type="hidden" name="product_name" value="Blue Jeans">
            <input type="hidden" name="price" value="40.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/33148.jpg">
        <p>Price: 40.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="33148">
            <input type="hidden" name="product_name" value="Black Pants">
            <input type="hidden" name="price" value="40.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/33149.jpg">
        <p>Price: 40.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="33149">
            <input type="hidden" name="product_name" value="Pink Pant">
            <input type="hidden" name="price" value="40.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
</section>
<section class="pro-grid">
    <div class="product">
        <img src="images/34693.jpg">
        <p>Price: 20.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="34693">
            <input type="hidden" name="product_name" value="Pink Shorts">
            <input type="hidden" name="price" value="20.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/35437.jpg">
        <p>Price: 20.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="35437">
            <input type="hidden" name="product_name" value="Black Jean Shorts">
            <input type="hidden" name="price" value="20.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/35436.jpg">
        <p>Price: 20.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="35436">
            <input type="hidden" name="product_name" value="Jean Shorts">
            <input type="hidden" name="price" value="20.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
</section>
<section class="pro-grid">
    <div class="product">
        <img src="images/31118.jpg">
        <p>Price: 30.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="31118">
            <input type="hidden" name="product_name" value="Red Shirt">
            <input type="hidden" name="price" value="30.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/31119.jpg">
        <p>Price: 30.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="31119">
            <input type="hidden" name="product_name" value="Black Shirt">
            <input type="hidden" name="price" value="30.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/31120.jpg">
        <p>Price: 30.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="31120">
            <input type="hidden" name="product_name" value="Pink Shirt">
            <input type="hidden" name="price" value="30.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
</section>
<section class="pro-grid">
    <div class="product">
        <img src="images/36215.jpg">
        <p>Price: 30.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="36215">
            <input type="hidden" name="product_name" value="Pink Shorts v1">
            <input type="hidden" name="price" value="30.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/36216.jpg">
        <p>Price: 30.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="36216">
            <input type="hidden" name="product_name" value="Pink Short v2">
            <input type="hidden" name="price" value="30.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/36217.jpg">
        <p>Price: 30.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="36217">
            <input type="hidden" name="product_name" value="Pink Short v3">
            <input type="hidden" name="price" value="30.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
</section>
<section class="pro-grid">
    <div class="product">
        <img src="images/34012.jpg">
        <p>Price: 45.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="34012">
            <input type="hidden" name="product_name" value="White Shirt v1">
            <input type="hidden" name="price" value="45.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/34013.jpg">
        <p>Price: 45.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="34013">
            <input type="hidden" name="product_name" value="White Shirt v2">
            <input type="hidden" name="price" value="45.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/34014.jpg">
        <p>Price: 45.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="34014">
            <input type="hidden" name="product_name" value="White Shirt v3">
            <input type="hidden" name="price" value="45.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
</section>
<section class="pro-grid">
    <div class="product">
        <img src="images/3895.jpg">
        <p>Price: 25.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="3895">
            <input type="hidden" name="product_name" value="Micky Mouse Shirt">
            <input type="hidden" name="price" value="25.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/3902.jpg">
        <p>Price: 25.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="3902">
            <input type="hidden" name="product_name" value="Tang Top v1">
            <input type="hidden" name="price" value="25.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/3903.jpg">
        <p>Price: 25.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="3903">
            <input type="hidden" name="product_name" value="Tang Top v2">
            <input type="hidden" name="price" value="25.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
</section>
<section class="pro-grid">
    <div class="product">
        <img src="images/4216.jpg">
        <p>Price: 45.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="4216">
            <input type="hidden" name="product_name" value="Yellow Shirt">
            <input type="hidden" name="price" value="45.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/4217.jpg">
        <p>Price: 45.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="4217">
            <input type="hidden" name="product_name" value="Blue Shirt">
            <input type="hidden" name="price" value="45.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
    <div class="product">
        <img src="images/4218.jpg">
        <p>Price: 45.00$</p>
        <form action="productsv2.php" method="POST">
            <input type="hidden" name="product_id" value="4218">
            <input type="hidden" name="product_name" value="Purple Shirt">
            <input type="hidden" name="price" value="45.00">
            <button type="submit" name="add_to_cart">Add To Cart</button>
        </form>
    </div>
</section>


</div>





</body>
</html>
