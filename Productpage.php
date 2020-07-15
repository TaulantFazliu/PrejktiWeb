<?php 
session_start();
require 'CRUD/includes/dbconnect.php';
$query = $pdo->query('SELECT * FROM products');
    $products= $query->fetchAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/product.css">
    <link rel="stylesheet" href="CSS/homestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
</head>
<body>



<?php include 'Header-Footer/Header.php';?>



    <div class="team-selection">
        <div class="produ">
            <h1>Products</h1>
            <span class="border"></span>
           
        </div>


        <div class="slider-btn">
        <button class="display-button" onclick="plusDivs(-1)">&#10094;</button>
        <button class="display-button" onclick="plusDivs(+1)">&#10095;</button>
        </div>
    
<div class="produktet">
  <form method="POST" action="buy.php">
            <?php foreach($products as $products): ?>
                    
                    <div class="prod2">
                       
                        <img style="width: 400px; height: 400px" id="card-image"src="<?php echo $products['photo'];?>" />
                        
                        <div class="bottom_part">
                            <h4><?php echo $products['title']; ?></h4>
                            <p><?php echo $products['description']; ?></p>
                        </div>
                        <div class="card-button">
                        <!-- <button class="addtocart3" name="submit">Add to cart</button> -->
                        </div>
                    </div>
                   
                    <?php endforeach;  ?>
        </form>

        <div class="shtoProd">
            <button class="display-button" style="width: 80px; height: 40px" onclick="changepage7()"><b>Add Product</b></button>
        </div>

        </div>
    </div>
    </div>


    <div class="slide"></div>

    <script src="JavaScript/Slider.js"></script>
    <script src="JavaScript/navbar.js"></script>

    


</body>
</html>

