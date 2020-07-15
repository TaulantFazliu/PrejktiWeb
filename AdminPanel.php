<?php 
session_start();
require 'CRUD/includes/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="CSS/admini.css">
    <link rel="stylesheet" href="CSS/homestyle.css">
    <link rel="shortcut icon" href="Foto/Logobcg.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

<?php include "Header-Footer/Header.php";?>
    <!-- <header>
        <img src="Foto/LogotransADM.png" alt="Logo" id="logo" width="160px" height="95px" onclick="changepage1()">
    </header> -->
    <div class="team-selection">
        <div class="produ">
            <h1>Admin Panel</h1>
            <span class="border"></span>
           
        </div>

    <div class="paneli">
        <ul class="listaa">
            <li><button class="butonat" onclick="changepage9()">Show Contact Us</button></li>
            <li><button class="butonat" onclick="changepage8()" >Show Users</button></li>
            <li><button class="butonat" onclick="changepage11()">Show Added By Product</button></li>
        </ul>
    </div>

    <script src="JavaScript/navBar.js"></script>

</body>

</html>