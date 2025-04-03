<?php
session_start(); 


include 'config.php';
$conn = dbConnect();

$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user['email'];
       header("Location: index.php");
      exit;
    } else {
        $error = "Invalid email or password.";
    }
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
        <li class="link"><a href="cart.php">cart</a></li>
        <li class="link"><a href="products.php">products</a></li>
        <li class="link"><a href="index.php">home</a></li>


    </ul>
    </nav>
</div>
<br>

<div class="container">
    <h1 class="home_header">LeLogin</h1>

    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <div class="login">
        <section>
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit">Login</button>
            </form> 
            <div class="links">
                Don't have an account? <a href="register.php">Sign Up Now</a>
            </div>
        </section>
    </div>
</div>

<script src="index.js"></script>
</body>
</html>
