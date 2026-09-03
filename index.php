<?php
    require_once "header.php";
    require_once "connection.php";

    $sql = "SELECT * FROM products";
    $result  =mysqli_query($conn,$sql);
?>

    <section class="container"> 
        <h1> Welcome to BCA Ecommerce page</h1><br><br>
        <h2>Product page</h2>

        <?php foreach($result as $product) {  ?>
                <h1><?php echo $product['title'] ?></h1>
                <img src="image/<?php echo $product['image'] ?>" width="200" height="200" />
                <a href = "products_details.php?slug=<?php echo $product['slug']?>"> View Product</a>
        <?php } ?>
    </section>

<?php
    require_once "footer.php";
?>