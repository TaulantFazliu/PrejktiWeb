<?php 
	require 'CRUD/includes/dbconnect.php';
  // e mer id e user e masnej e validon qat user
    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];
    }

// kur bojme me edit duhet me caktu se cilin rresht po dojme me editu ne baze id
    $sql = 'SELECT * FROM products WHERE ID = :ID';
    $query = $pdo->prepare($sql);
    $query->execute(['ID' => $ID]);
    // id qe na vjen nga lart
    $products = $query->fetch(); // merret  id
    

    if(isset($_POST['submit'])){

        $photo = $_POST['photo'];
        $title = $_POST['title'];
        $description = $_POST['description'];
      
        $sql = 'UPDATE products SET photo = :photo,  title = :title, description = :description WHERE ID = :ID ';
        $query = $pdo->prepare($sql);
        $query->bindParam('photo', $photo);
        $query->bindParam('title', $title);
        $query->bindParam('description', $description);
        $query->bindParam('ID', $ID);

        $query->execute();
        header("Location: showadded_by.php");
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

    <div class="paneli">
    <form method="POST">
                Photo:
                <input type="file" class="field"  id="number" name="photo" value="<?php echo $products['photo'];?>">
                Title:                                      <!-- qito na vin prej query qe eshte me larte -->
                <input type="text" name="title" value = "<?php echo $products['title']; ?>"><br>
                Description:
                <input type="text" name="description" value = "<?php echo $products['description']; ?>" ><br>
                
                 <input type="submit" name="submit" value="Submit">
            </form>
    </div>

    <script src="JavaScript/navBar.js"></script>

</body>

</html>
