<?php
session_start();
    require 'CRUD/includes/dbconnect.php';
    // i qasemi lidhjes me databaze

    // e krijojme query pdo me i mar prej users tabeles
	$query = $pdo->query('SELECT * FROM products');
    $products = $query->fetchAll();
    //per me i marr te dhenat qe i rujme te variabla users
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

    

    <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Added By</th>
                       
                       
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($products as $products):
                        //e thrrasim php per me mujt me ju qas si vlere na array
                        ?>
                        <tr>
                        <!--te dhenat -->
                            <td><?php echo $products['ID']; ?></td>
                            <td><?php echo $products['title']; ?></td>
                            <td><?php echo $products['description']; ?></td>
                            <td><?php echo $products['added_by']; ?></td>
                            <td><a href="edit_products.php?ID=<?php echo $products['ID']; ?>">Edit</a></td>
                            <td><a href="delete_products.php?ID=<?php echo $products['ID']; ?>">Delete</a></td>
                            
                            <!--per me mujt me bo delete dhe edit te dhenat ne baze te id se user -->
                            
                        </tr>
                    <?php endforeach;  // mbyllet cikli foreach?>
                </tbody>
            </table>
    </div>

    <script src="JavaScript/navBar.js"></script>

</body>

</html>