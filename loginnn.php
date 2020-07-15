<?php  
session_start();

require 'CRUD/includes/dbconnect.php';
//lidhja me databaze

if(isset($_POST['submit'])):
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = '';

    $query = $pdo->prepare('SELECT ID, emri , email, password, roli FROM registerform WHERE email = :email' ) ;
    $query->bindParam('email', $email);
    
    $query->execute();
    $registerform = $query-> fetch();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    //se pari e bojme count a ka kthy rreshta prej database, qe e kqyr a ka aj rresht qe e ka shkru email dhe e verifikon password se a eshte i njejte me ate ne database
    if(count($registerform) > 0 && password_verify($password, $registerform['password'])){
        $_SESSION['ID'] = $registerform['ID'];
        $_SESSION['emri'] = $registerform['emri'];
        $_SESSION['roli'] = $registerform['roli'];

        //e plotson sessionin ne menyre dinamike
        header("Location: HomePage.php");

    } else {
        $message = 'Password do not match!'; 
    }
endif;

?>
<?php 
                if(!empty($message)): ?>
               <p><?php echo $message ?></p>
               <?php endif; ?>
    
    