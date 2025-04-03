
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
    <h1 class="home_header">Creat Account</h1>
<?php
include 'config.php';
$conn = dbConnect();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname    = $_POST['fname'];
    $lname    = $_POST['lname'];
    $email    = $_POST['email'];
    $address  = $_POST['address'];
    $phone    = $_POST['phone'];
    $password = $_POST['password'];

    $verify_query = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    if (mysqli_num_rows($verify_query) != 0) {
        $error = "Email already in use";
    } else {
        $sql = "INSERT INTO users (first_name, last_name, email, address, phone, password)
                VALUES ('$fname', '$lname', '$email', '$address', '$phone', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful";
          
        } 
        else {
            echo "Error occurred";
        
        }
    }
}

?>
    <br>
    <br>
    <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<div class="login">
<section>
<form action="register.php" method="POST">
    <input name="fname" placeholder="First Name" required><br>
    <input name="lname" placeholder="Last Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input name="address" placeholder="Address" required><br>
    <input name="phone" placeholder="Phone Number" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button>Register</button>
</form> 
</section>
</div>
</div>




<script src="index.js"></script>
</body>
</html>
