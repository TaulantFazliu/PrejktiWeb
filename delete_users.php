<?php
    include 'CRUD/includes/dbconnect.php';

    if (isset($_GET['ID'])) {
        $ID = $_GET['ID'];
    }

     //fshirja e userit ne baze te id
     $query = "DELETE FROM registerform WHERE ID= :ID";
     $query = $pdo->prepare($query);
 
     $query->execute(['ID' => $ID]);
 
 
     header("Location: users.php");
     ?>