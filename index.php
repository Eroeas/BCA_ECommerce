<?php
    require_once "header.php";
    require_once "connection.php";

    $sql = "SELECT * FROM products";
    $result  =mysqli_query($conn,$sql);
?>

    <section class="container"> 
        <h1> Welcome to BCA Ecommerce page</h1>
        <h2>Product page</h2>

        <div class="product-list">
                <?php foreach($result as $product) {  ?>
                <div class="product-box">
                    <div class="product-image"><img src="image/<?php echo $product['image'] ?>" /></div>
                    <div class="product-title"><h2><?php echo $product['title'] ?></h2></div>
                    <div class="product-description"><p><?php echo $product['description']?></p></div>
                    <div class="product-order"><a href = "products_details.php?slug=<?php echo $product['slug']?>"> Product Details</a></div>

                    
                    
                </div>
                <?php } ?>

        </div>
        


    </section>

<?php
    require_once "footer.php";
?>