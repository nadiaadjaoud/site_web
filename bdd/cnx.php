<?php
  session_start();
  $serveur = "localhost";
  $dbname = "memoire";
  $user = "root";
  $pass = "";
  

  $email = htmlspecialchars($_POST['emailcnx']);
  $mdp = sha1($_POST['mdpcnx']);

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
   
           
           if(!empty($_POST['emailcnx']) AND !empty($_POST['mdpcnx']) ) {
              
           $requser=$dbco->prepare("SELECT * FROM inscription WHERE email=? and mdp=?");
            $requser->execute(array($email,$mdp));
            $userexist=$requser->rowCount();
            if($userexist==1){
             $userinfo=$requser->fetch();
             $_SESSION['id']=$userinfo['id'];
             $_SESSION['email']=$userinfo['email'];
             header("location:../html/rendez-vous.php?id=".$_SESSION['id']);
            }else{
              $erreur="mauvais mail ou mot de passe";
            }
        }
          else{
         $erreur="tous les champs doivent etres complété";
       }
      
      
    }
      catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
       }
?>