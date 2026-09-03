<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <header>
        <img src="images.png" alt="logo" class="logo">
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Categories</a>
            <a href="#">Product</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
        </div>
    </header>

    <!-- Main Dynamic Content Zone -->
    <main>
        
        <!-- Large Banner Block -->
        <section class="hero-banner">
            <img src="herobanner.jpg" alt="banner" class="banner-image">
        </section>

        <!-- Product Cards Row Display Grid -->
        <section class="product-grid">
            <div class="grid-card"><img src="images.jpg" alt="banner" class="banner-image"></div>
            <div class="grid-card"></div>
            <div class="grid-card"></div>
            <div class="grid-card"></div>
            <div class="grid-card"></div>
            <div class="grid-card"></div>
        </section>

    </main>

    
   <footer>
    <hr>
    <p>
        &copy Rights <?php echo date("Y") ?> BCA_Ecommerce
    </p>
        </footer>
    </body>
</html>
