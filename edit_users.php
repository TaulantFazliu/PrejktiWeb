<?php 
	require 'CRUD/includes/dbconnect.php';
  // e mer id e user e masnej e validon qat user
    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];
    }

// kur bojme me edit duhet me caktu se cilin rresht po dojme me editu ne baze id
    $sql = 'SELECT * FROM registerform WHERE ID = :ID';
    $query = $pdo->prepare($sql);
    $query->execute(['ID' => $ID]);
    // id qe na vjen nga lart
    $registerform = $query->fetch(); // merret  id
    

    if(isset($_POST['submit'])){
        $emri = $_POST['emri'];
        $email = $_POST['email'];
      
        $sql = 'UPDATE registerform SET emri = :emri, email = :email WHERE ID = :ID ';
        $query = $pdo->prepare($sql);
        $query->bindParam('emri', $emri);
        $query->bindParam('email', $email);
        $query->bindParam('ID', $ID);

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

    <div class="paneli">
    <form method="POST">
                Emri:                                      <!-- qito na vin prej query qe eshte me larte -->
                <input type="text" name="emri" value = "<?php echo $registerform['emri']; ?>"><br>
                Email
                <input type="text" name="email" value = "<?php echo $registerform['email']; ?>" ><br>
                
                 <input type="submit" name="submit" value="Submit">
            </form>
    </div>

    <script src="JavaScript/navBar.js"></script>

</body>

</html>
