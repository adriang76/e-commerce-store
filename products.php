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
        <li class="link"><a href="cart.php">cart</a></li>
        <li class="link"><a href="products.php">products</a></li>
        <li class="link"><a href="index.php">home</a></li>


    </ul>
    </nav>
</div>
<br>
<br>

<div class="container">
    <h1 class="home_header">LeProducts</h1>
    <ul id="cart"></ul>
    <br>
    <br>
<section class="pro-grid">
    <div class="product">
    <img src="images/33147.jpg">
    <p>Price: 40.00$</P>

    <button onclick="add_to_cart('Blue Jeans', 40.00 , '33147')">Add To Cart</button>
    </div>
    <div class="product">
    <img src="images/33148.jpg">
    <p>Price: 40.00$</P>
    <button onclick="add_to_cart('Black Pants', 40.00, '33148')">Add To Cart</button>
    </div>
    <div class="product">
    <img src="images/33149.jpg">
    <p>Price: 40.00$</P>
    <button onclick="add_to_cart('Pink Pant', 40.00, '33149')">Add To Cart</button>
    
    </div>
</section>
<section class="pro-grid">
    <div class="product">
    <img src="images/34693.jpg">
    <p>Price: 20.00$</P>

    <button onclick="add_to_cart('Pink Shorts', 20.00, '34693')">Add To Cart</button>
    </div>
    <div class="product">
    <img src="images/35437.jpg">
    <p>Price: 20.00$</P>
    <button onclick="add_to_cart('Black Jean Shorts', 20.00, '35437')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/35436.jpg">
    <p>Price: 20.00$</P>
    <button onclick="add_to_cart('Jean Shorts', 20.00, '35436')">Add To Cart</button>
    
    </div>
</section>
<section class="pro-grid">
    <div class="product">
    <img src="images/31118.jpg">
    <p>Price: 30.00$</P>

    <button onclick="add_to_cart('Red Shirt', 30.00, '31118')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/31119.jpg">
    <p>Price: 30.00$</P>
    <button onclick="add_to_cart('Black Shirt', 30.00, '31119')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/31120.jpg">
    <p>Price: 30.00$</P>
    <button onclick="add_to_cart('Pink Shirt', 30.00, '31120')">Add To Cart</button>

    
    </div>
</section>
<section class="pro-grid">
    <div class="product">
    <img src="images/36215.jpg">
    <p>Price: 30.00$</P>

    <button onclick="add_to_cart('Pink Shorts v1', 30.00, '36215')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/36216.jpg">
    <p>Price: 30.00$</P>
    <button onclick="add_to_cart('Pink Short v2', 30.00, '36216')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/36217.jpg">
    <p>Price: 30.00$</P>
    <button onclick="add_to_cart('Pink Short v3', 30.00, '36217')">Add To Cart</button>

    
    </div>
</section>
<section class="pro-grid">
    <div class="product">
    <img src="images/34012.jpg">
    <p>Price: 45.00$</P>

    <button onclick="add_to_cart('White Shirt v1', 45.00, '34012')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/34013.jpg">
    <p>Price: 45.00$</P>
    <button onclick="add_to_cart('White Shirt v2', 45.00, '34013')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/34014.jpg">
    <p>Price: 45.00$</P>
    <button onclick="add_to_cart('White Shirt v3', 45.00, '34014')">Add To Cart</button>

    
    </div>
</section>
<section class="pro-grid">
    <div class="product">
    <img src="images/3895.jpg">
    <p>Price: 25.00$</P>

    <button onclick="add_to_cart('Micky Mouse Shirt', 25.00, '3895')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/3902.jpg">
    <p>Price: 25.00$</P>
    <button onclick="add_to_cart('Tang Top v1', 25.00, '3902')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/3903.jpg">
    <p>Price: 25.00$</P>
    <button onclick="add_to_cart('Tang Top v2', 25.00, '3903')">Add To Cart</button>

    
    </div>
</section>
<section class="pro-grid">
    <div class="product">
    <img src="images/4216.jpg">
    <p>Price: 45.00$</P>

    <button onclick="add_to_cart('Yellow Shirt', 45.00, '4216')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/4217.jpg">
    <p>Price: 45.00$</P>
    <button onclick="add_to_cart('Blue Shirt', 45.00, '4217')">Add To Cart</button>

    </div>
    <div class="product">
    <img src="images/4218.jpg">
    <p>Price: 45.00$</P>
    <button onclick="add_to_cart('Purple Shirt', 45.00, '4218')">Add To Cart</button>

    
    </div>
</section>


</div>




<script src="index.js"></script>
</body>
</html>
