<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><img src="image/images.png" class="logo" alt="logl" width="20px"></img></li> 
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="addcategroy.php">Add Category</a></li>
                <li><a href="addproduct.php">Add Product</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <hr>




<?php if (isset($_SESSION['success'])){?>
    <h1><?=$_SESSION ['success'];?> </h1>
    <?php unset ($_SESSION['success']); ?>
<?php } ?>

<?php if (isset($_SESSION['error'])){?>
    <h1><?=$_SESSION ['error'];?> </h1>
    <?php unset ($_SESSION['error']); ?>
<?php } ?>
