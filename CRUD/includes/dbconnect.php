<?php

// kete e ruajme lidhjen me databaze 
try{
    //ketu i qasemi databazes me php date object(pdo)
    $pdo = new PDO("mysql:host=localhost; dbname=compu-parts", "root" , "");    
//ne rast se ka ndonje gabim
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}