<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compu-Parts Contact Us</title>
    <link rel="shortcut icon" href="logot/Logobcg.png" type="image/png">
    <link rel="stylesheet" href="CSS/ContactUs.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include 'Header-Footer/Header.php';?>

     <div class="mid-content" >
         <h1 id="title">Contact Us</h1>
         <h1 id="second">How can we help you?</h1>
         <h4 id="third">Give us a call or a text in whatsApp : +38345810432 or send us an email :</h4>
    <form  name="forma" method="POST" action="contact.php" onsubmit="return validate(event)"> 
        <div class="fields" >
            <input type="text" placeholder="Name" class="field"  id="name" name="emri">
            <div class="error" id="e1"></div>
            <input type="text" placeholder="Email" class="field"  id="email" name="email">
            <div class="error" id="e2"></div>
            <input type="tel" placeholder="Phone Number" class="field"  id="number" name="numri">
            <input type="text" placeholder="Message" class="field" id="msg" name="msg">
        </div> 
        <input type="submit" id="send" value="Send ►" name="submit"> 
    </form>
    
     </div>


     <script src="JavaScript/navBar.js"></script>
     <script src="JavaScript/contact.js"></script>
    
     <?php include 'Header-Footer/Footer.php';?>

</body>
</html>