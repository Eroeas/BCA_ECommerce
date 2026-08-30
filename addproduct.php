<?php
require_once 'header.php';
require_once 'connection.php';

if(!isset($_SESSION['auth'])){
    $_SESSION['error']= "Login to access this page";
    header("Location: login.php");
    exit;
}

if(!empty($_POST)){
    $category_id = $_POST['category_id'];
    
    
    $user_id = $_SESSION['user_id']; 
    
    $title = $_POST['title'];
    
    $slug = strtolower(str_replace(" ", "-", $title)); 
    
    $quantity = $_POST['quantity'];
    $price = $_POST["price"];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $description = $_POST['description'];

    if(move_uploaded_file($tmp_name, "image/" . $image)){
        $sql = "INSERT INTO products (category_id, user_id, title, slug, quantity, price, image, description)
                VALUES('$category_id', '$user_id', '$title', '$slug', '$quantity', '$price', '$image', '$description')";
        
        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['success'] = "Product added successfully";
            header("Location: addproduct.php");
            exit; // CHANGED: Added exit; after header
        } else {
            $_SESSION['error'] = "Product not added";
            header("Location: addproduct.php");
            exit; // CHANGED: Added exit; after header
        }
    } else {
        $_SESSION['error'] = "Image not uploaded";
        header("Location: addproduct.php");
        exit; // CHANGED: Added exit; after header
    }
}

$query = "SELECT * FROM category";
$category = mysqli_query($conn, $query);
?>

<h1>Add Product</h1>
<form action="" method="post" enctype="multipart/form-data">
    Category: 
    <select name="category_id" required>
        <option value="">---Select Category---</option>
        <?php foreach($category as $cat){ ?>
            <option value="<?php echo $cat['id']; // CHANGED: Changed 'cid' to 'id' to match standard column naming ?>">
                <?php echo $cat['name']; ?>
            </option>
        <?php } ?>
    </select> <br><br>

    <!-- CHANGED: Fixed typos 'requried' to 'required' and 'numbner' to 'number' -->
    Title: <input type="text" name="title" required><br><br>
    Quantity: <input type="number" name="quantity" required><br><br>
    Price: <input type="number" name="price" required><br><br>
    Image: <input type="file" name="image" required><br><br>
    Description: <textarea name="description" required></textarea><br><br>
    <button>Add Product</button>
</form>