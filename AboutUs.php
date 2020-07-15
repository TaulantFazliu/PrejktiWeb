<?php 
session_start();
require 'CRUD/includes/dbconnect.php';
$query = $pdo->query('SELECT * FROM aboutus');
    $aboutus= $query->fetchAll();


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logot/Logobcg.png" type="image/png">
    <link rel="stylesheet" href="CSS/About-us.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Compu-Parts About Us</title>
</head>
<body>

    <?php include 'Header-Footer/Header.php'; ?>

    <!-- <div class="abutus">
        <h1>About us</h1>
        <span class="border"></span>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita eaque, nostrum fugit ipsa illum eum maiores voluptatum temporibus consequatur ipsam officia. Dolor nihil nostrum dolorem commodi odit eveniet dicta sed.
        </p>
    </div> -->


    <div class="team-selection">
        <div class="abutus">
            <h1>About us</h1>
            <span class="border"></span>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita eaque, nostrum fugit ipsa illum eum maiores voluptatum temporibus consequatur ipsam officia. Dolor nihil nostrum dolorem commodi odit eveniet dicta sed.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita eaque, nostrum fugit ipsa illum eum maiores voluptatum temporibus consequatur ipsam officia. Dolor nihil nostrum dolorem commodi odit eveniet dicta sed.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita eaque, nostrum fugit ipsa illum eum maiores voluptatum temporibus consequatur ipsam officia. Dolor nihil nostrum dolorem commodi odit eveniet dicta sed.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita eaque, nostrum fugit ipsa illum eum maiores voluptatum temporibus consequatur ipsam officia. Dolor nihil nostrum dolorem commodi odit eveniet dicta sed.
            </p>
        </div>



        <h1>Our Team</h1>
        <span class="border"></span>
        <div class="ps">
            <a href="#p1" class="linku"><img src="Foto/TaliMatka1.jpg" alt=""></a>
            <a href="#p2" class="linku"><img src="Foto/BesmiriMarigon.jpg" alt=""></a>
            <a href="#p3" class="linku"><img src="Foto/adnani.png" alt=""></a>
        </div>

        <div class="section" id="p1">
            <span class="name">Taulant Fazliu</span>
            <span class="border"></span>
            <p>
                Un jam Taulant Fazliu 
            </p>
        </div>

        <div class="section" id="p2">
            <span class="name">Besmir Ternava</span>
            <span class="border"></span>
            <p>
                Un jam Besmir Ternava 
            </p>
        </div>

        <div class="section" id="p3">
            <span class="name">Adnan Kasumaj</span>
            <span class="border"></span>
            <P>
                Un jam Adnan Kasumaj 
            </P>

        </div>
    </div>

    
    <!-- <form method="POST" action="">
            <?php foreach($aboutus as $aboutus): ?>
                    
                    <div class="ps" style="margin-bottom: 40px;">
                        <img style="display: inline-block;
                                    margin: 0 30px;
                                    width: 160px;
                                    height: 160px;
                                    overflow: hidden;
                                    border-radius: 50%;" class="linku" id="linku"src="<?php echo $aboutus['photo'];?>" />
                    </div>    

                        <div class="section">
                            <span class="name" style="display: block;
                                                        margin-bottom: 30px;
                                                        text-align: center;
                                                        text-transform: uppercase;
                                                        font-size: 22px;"><?php echo $aboutus['title']; ?></span>
                            <span class="border"></span>
                            <p><?php echo $aboutus['description']; ?></p>
                        </div>
                    
                   
                    <?php endforeach;  ?>
        </form> -->

    
    <script src="JavaScript/navBar.js"></script>
    <script src="JavaScript/footer.js"></script>


    <?php include 'Header-Footer/Footer.php'; ?>


</body>
</html>