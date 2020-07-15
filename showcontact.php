<?php
    require 'CRUD/includes/dbconnect.php';
    // i qasemi lidhjes me databaze

    // e krijojme query pdo me i mar prej users tabeles
	$query = $pdo->query('SELECT * FROM contactus');
    $contactus = $query->fetchAll();
    //per me i marr te dhenat qe i rujme te variabla users
?>

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
    <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Message</th>
                        <!-- <th>Added_by</th> -->
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($contactus as $contactus):
                        //e thrrasim php per me mujt me ju qas si vlere na array
                        ?>
                        <tr>
                        <!--te dhenat -->
                            <td><?php echo $contactus['ID']; ?></td>
                            <td><?php echo $contactus['emri']; ?></td>
                            <td><?php echo $contactus['email']; ?></td>
                            <td><?php echo $contactus['numri']; ?></td>
                            <td><?php echo $contactus['msg']; ?></td>
                            <!-- <td><?php echo $registerform['added_by']; ?></td> -->
                            <!--per me mujt me bo delete dhe edit te dhenat ne baze te id se user -->
                        </tr>
                    <?php endforeach;  // mbyllet cikli foreach?>
                </tbody>
            </table>
    </div>

    <script src="JavaScript/navBar.js"></script>

</body>

</html>