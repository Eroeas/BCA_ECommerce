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
<h1>Product Details</h1>
<h2><?php echo $product['title']?></h2>
<img src="image/<?php echo $product['image']?>" width="200" height ="200" />
<p><?php echo $product['description']?></p>
<p>Category: <?php echo $product['category_name'] ?></p>
<p>Vendor: <?php echo $product['vendor_name'] ?></p>
<a href="">Order Now</a>

<?php
    require_once "footer.php";
?>