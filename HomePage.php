<?php 
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);

require 'CRUD/includes/dbconnect.php';

if($_SESSION['roli'] == 0){


?>

<!DOCTYPE html>
<html>
    <head>
<title>Compu-Parts</title>
<link rel="shortcut icon" href="logot/Logobcg.png" type="image/png">
<link rel="stylesheet" href="CSS/homestyle.css">
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body > 
       
    <?php include 'Header-Footer/Header.php';?>

            <div class="content">
                <img src="Foto/homescreen.png" alt="" class="fotoja">
                <div class="teksti-mes">
                    <h1 id="h1">COMPU-PARTS</h1>
                    <h4 id="sp">Buy or build your perfect PC <br> with te best price</h4>
                </div>
                <div class="butonatmes">
                    <button id="buy" onclick="changepage6()">View Products</button>
                </div>
            </div>

            <script src="JavaScript/navBar.js"></script>
            <script src="JavaScript/footer.js"></script>
            
            <?php include 'Header-Footer/Footer.php';?>

<?php 
    }else{
        header("Location: AdminPanel.php"); 
    }
?>

    </body>
</html>