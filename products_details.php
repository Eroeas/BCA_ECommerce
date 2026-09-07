<?php
    require_once "header.php";
    require_once "connection.php";

    $slug=$_GET['slug'];

    $sql = "SELECT category.cid, category.name as category_name, users.uid, users.name as vendor_name, products.*
            FROM products 
            LEFT JOIN  category on category.cid=products.category_id 
            LEFT JOIN users ON users.uid=products.user_id 
            WHERE products.slug='$slug'";
    $result  =mysqli_query($conn,$sql);
    $product =mysqli_fetch_assoc($result);
?>
<div class ="container">
    <h1>Product Details</h1>
    
    <div class ="product_box">

        <h2><?php echo $product['title']?></h2>
        <div class="image_box">
            <img  src="image/<?php echo $product['image']?>"  />

        </div>        
        <p><?php echo $product['description']?></p>
        <p>Category: <?php echo $product['category_name'] ?></p>
        <p>Vendor: <?php echo $product['vendor_name'] ?></p>
        <a href="">Order Now</a>
    </div>
</div>

<?php
    require_once "footer.php";
?>