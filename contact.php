<?php

session_start();

if(isset($_SESSION['contactus'])){
    header("Location: HomePage.php");

    //beje kete veprim nese eshte i loguar user
}

require 'CRUD/includes/dbconnect.php';
//lidhja me databaze

if(isset($_POST['submit'])){
    $emri = $_POST['emri'];
    $email = $_POST['email'];
    $numri = $_POST['numri'];
    $msg = $_POST['msg'];
    $message = '';
    $sql = 'INSERT INTO contactus (emri, email, numri, msg) VALUES (:emri, :email, :numri, :msg)';
    //kete e bojme sepse te lidhja e kemi perdor pdo 
    $query = $pdo->prepare($sql);
    //kete e bojme qe mos me ja leju dikujt qe ne vend te imelles me shkru emrin e kshtu me radhe
    $query->bindParam('emri', $emri);
    $query->bindParam('email', $email);
    $query->bindParam('numri', $numri);
    $query->bindParam('msg', $msg);
    //ekzekutimi i query
   if($query->execute()){
    header("Location: ContactUs.php");
   }else{
       $message = "Ka probleme gjate regjistrimit ";
   }

   }    
   ?>

   <?php if(!empty($message)){
       echo $message;
   }

   ?>