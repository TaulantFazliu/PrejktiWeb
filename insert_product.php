<?php
session_start();
//e bojna me qellim me shtu user prej ni forme tcaktume
if(isset($_SESSION['ID'])){
   

    //beje kete veprim nese eshte i loguar user

require('CRUD/includes/dbconnect.php'); //i qasemi databazes


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
            $photo = $_POST['photo'];
            // $title = $_POST['title'];
            if(empty($_POST['title'])){
                $nameERR = 'title can not be blank';
            } else{
                $title = test_input($_POST['title']);
            }

            // $description = $_POST['description'];
            if(empty($_POST['description'])){
                $nameERR = 'description can not be blank';
            } else{
                $description = test_input($_POST['description']);
            }

            $added_by = $_POST['added_by'];
           
          //menyra e insertimit te te dhenave
          $sql = 'INSERT INTO products (photo, title, description, added_by) VALUES (:photo, :title, :description, :added_by)';
          //kete e bojme sepse te lidhja e kemi perdor pdo 
           $query = $pdo->prepare($sql);
           //kete e bojme qe mos me ja leju dikujt qe ne vend te imelles me shkru emrin e kshtu me radhe
           $query->bindParam('photo', $photo);
           $query->bindParam('title', $title);
           $query->bindParam('description', $description);
           $query->bindParam('added_by', $added_by);
           //ekzekutimi i query
           $query->execute();
           
           header("Location: Productpage.php");
        }
?>
<?php 

}else {
    header("Location: HomePage.php");
}
?>
