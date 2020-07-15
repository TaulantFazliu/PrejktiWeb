
<?php
session_start();
//e bojna me qellim me shtu user prej ni forme tcaktume

   

    //beje kete veprim nese eshte i loguar user

    require 'CRUD/includes/dbconnect.php'; //i qasemi databazes


?>
 <?php 

$nameERR = "";
function test_input($data){
     $data = trim($data);
     $data = stripcslashes($data); //e hjek pjesen e thojzave 
     $data = htmlspecialchars($data);// e hjek pjesen e html 
     return $data;
 }

    //isset me dit a u shtyp butoni submit ne forme 
        if(isset($_POST['submit'])){
     //momentin qe shtypet submit qe te behen insert te dhenat ne tabel
    //nje variable ia ruajme nje vlere qe ka mi ardh
            // $emri = $_POST['emri'];
            if(empty($_POST['emri'])){
                $nameERR = 'name can not be blank';
            } else{
                $emri = test_input($_POST['emri']);
            }
            // $email = $_POST['email'];
            if(empty($_POST['email'])){
                $nameERR = 'email can not be blank';
            } else{
                $email = test_input($_POST['email']);
            }
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT) ;
          //menyra e insertimit te te dhenave
          $sql = 'INSERT INTO registerform (emri, email, password) VALUES (:emri, :email, :password)';
          //kete e bojme sepse te lidhja e kemi perdor pdo 
           $query = $pdo->prepare($sql);
           //kete e bojme qe mos me ja leju dikujt qe ne vend te imelles me shkru emrin e kshtu me radhe
           $query->bindParam('emri', $emri);
           $query->bindParam('email', $email);
           $query->bindParam('password', $password);
           //ekzekutimi i query
           $query->execute();
           
           header("Location: users.php");
    
        }

?>


<!-- forma -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="CSS/admini.css">
    <link rel="shortcut icon" href="Foto/Logobcg.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <img src="Foto/LogotransADM.png" alt="Logo" id="logo" width="160px" height="95px" onclick="changepage1()">
    
      
    </header>
    <div class="team-selection">
        <div class="produ">
            <h1>Admin Panel</h1>
            <span class="border"></span>
           
        </div>
        <form method="POST" action="add_users.php" >
        <div class="paneli">
                <input type="text" class="inputat" placeholder="Name" name="emri" id="e" style="width: 300px; height: 40px; margin: 0 auto"  />
				
				<input type="email" class="inputat" placeholder="Email" name="email" id="em" style="width: 300px; height: 40px; margin: 0 auto"/>
				
				<input type="password" class="inputat" id="psw" placeholder="Password" name="password" style="width: 300px; height: 40px; margin: 0 auto"/>
				
				<input type="submit" class="butonat" id="sUp" value="Submit" name="submit" style="margin: 0 auto">
    </div>
        </form>
    

    <script src="JavaScript/navBar.js"></script>

</body>

</html>
