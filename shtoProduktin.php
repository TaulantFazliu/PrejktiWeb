<?php
session_start();
//e bojna me qellim me shtu user prej ni forme tcaktume
if(isset($_SESSION['ID'])){
   

    //beje kete veprim nese eshte i loguar user

require('CRUD/includes/dbconnect.php'); //i qasemi databazes


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
            <h1>Add Product</h1>
            <span class="border"></span>
        </div>
    <form method="POST" action="insert_product.php">
    <div class="paneli">
    <div class="fields" >
            <input type="file" class="field"  id="number" name="photo">
            <input type="text" placeholder="Title" class="field"  id="name" name="title">
            <input type="text" placeholder="Description" class="field"  id="email" name="description">
            <input type="hidden" name ="added_by" value="<?php echo $_SESSION['emri']?>">
        </div> 
        <input type="submit" id="send" value="Add" name="submit" style="width: 50px; height: 30px; border-radius: 5px 5px 5px 5px"> 
    </div>
    </form>
    <script src="JavaScript/navBar.js"></script>

<?php 

}else {
    header("Location: HomePage.php");
}
?>
</body>

</html>