<?php

session_start();
//nese ekziston ky sesion beje ridireced user te user.php
if(isset($_SESSION['registerform'])){
    header("Location: HomePage.php");

    //beje kete veprim nese eshte i loguar user
}

require 'CRUD/includes/dbconnect.php';
//lidhja me databaze

if(isset($_POST['submit'])){
    $emri = $_POST['emri'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT) ;
    $message = '';
    $sql = 'INSERT INTO registerform (emri, email, password) VALUES (:emri, :email, :password)';
    //kete e bojme sepse te lidhja e kemi perdor pdo 
    $query = $pdo->prepare($sql);
    //kete e bojme qe mos me ja leju dikujt qe ne vend te imelles me shkru emrin e kshtu me radhe
    $query->bindParam('emri', $emri);
    $query->bindParam('email', $email);
    $query->bindParam('password', $password);
    //ekzekutimi i query
   if($query->execute()){
    header("Location: login.php");
   }else{
       $message = "Ka probleme gjate regjistrimit ";
   }

   }    
   ?>

   <?php if(!empty($message)){
       echo $message;
   }

   ?>
  