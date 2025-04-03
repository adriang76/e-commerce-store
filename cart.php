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
        <li class="link"><a href="cart.php">cart</a></li>
        <li class="link"><a href="products.php">products</a></li>
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
    <div id="cart-items"></div>
    <button onclick="clearCart()">Clear Cart</button>

    <br>
    <div class="links">
                Proceed to <a href="checkout.php">Check Out</a>
    </div>
</div>




<script src="index.js"></script>

</body>
</html>
