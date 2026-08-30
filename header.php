<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="category.php">Categories</a>
    <a href="products.php">Products</a>
    <a href="contact.php">Contact</a>
    
    


    <?php if (isset($_SESSION['auth'])){ ?>
    <a>Welcome :<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User'; ?> </a>
    <a href="logout.php">Log out</a>
    <a href="addcategory.php">Add Category</a>
    <a href="addproduct.php">Add Product</a>
    <?php } else { ?>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
    <?php } ?>

    
<hr>



<?php if (isset($_SESSION['success'])){?>
    <h1><?=$_SESSION ['success'];?> </h1>
    <?php unset ($_SESSION['success']); ?>
<?php } ?>

<?php if (isset($_SESSION['error'])){?>
    <h1><?=$_SESSION ['error'];?> </h1>
    <?php unset ($_SESSION['error']); ?>
<?php } ?>
