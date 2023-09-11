<?php
 session_start();
 $serveur = "localhost";
 $dbname = "memoire";
 $user = "root";
 $pass = "";
 

   try{
       //On se connecte à la BDD
       $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
       $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  
       if(isset($_POST['subcnx'])){
         
       
        if(!empty($_POST['email']) AND !empty(sha1($_POST['mdp'])) ) {
              
          $requser=$dbco->prepare("SELECT * FROM inscription WHERE email=? and mdp=?");
           $requser->execute(array($_POST['email'],sha1($_POST['mdp'])));
           $userexist=$requser->rowCount();
           if($userexist==1){
            $userinfo=$requser->fetch();
            $_SESSION['id']=$userinfo['id'];
            $_SESSION['email']=$userinfo['email'];
          
       
            if(  $_SESSION['id']==1){
              header("location:../html/espaceDoc.php?id=".$_SESSION['id']);
            }elseif(  $_SESSION['id']==2){
              header("location:../html/espaceSecr.php?id=".$_SESSION['id']);
            }
            else{
               header("location:../html/rendez-vous.php?id=".$_SESSION['id']);
            }
           }else{
             echo"mauvais mail ou mot de passe";
           }
       }
         else{
        echo"tous les champs doivent etres complété";
      }
     
   }
  }
     catch(PDOException $e){
       echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
      }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/vraicss.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
 



 
        <title>Accueil</title>
    </head>
 

    <body>
        <header>
             <div class="logo" >     
    
    <img src="../photo/logomod.png" alt="logo"></img> </div>
        </header>
       
    <body>
       
        <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <h1>Nous Nous Engageons Pour Votre Santé.</h1>
                        <p> Docteur Saheb, Specialiste en Dermatologie Depuis 20ans, met a votre disposition ses services du Samedi au Jeudi de 8h jusqu'a 16h.Pour plus d'informations, veuillez nous contacter :</p> 

<div class="bouge">
                        <a href="https://twitter.com" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
<a href="https://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
<a href="https://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a> <br>
                        
 </div>
 

                      <div class="container"></div>
                       <br> <a class="main_btn mr-10"  id="button1">Inscrivez vous maintenant</a>
                     
  <a  class="bouton2" id="button">connectez vous maintenant</a>
  
</div>

<div class="container3">
<div class="popup" style="display: none;border: 1px solid #ccc0;padding: -18px;   margin: -545px 45px 213px;   margin-left: -10px;   width: 167%;
    height: 619px;  justify-content: center;  align-items: center;  text-align: center;background-color: #ffffff78;">
   <div class="popup-content" style=" height: 150px;border-radius: 49px;
 height: 318px; width: 588px; background-color: #ffffffdb; padding: 20px; margin-top: -144px;
  position:relative;margin-left: -60px;">
  <div class="modal header" style="background-color:#56ade4; 
  padding-top: 17px;  margin-top: -19px;  padding: 13px 11px;  margin-left: -20px;  margin-right: -20px; border-radius: 4px;
">
   <img src="https://img.icons8.com/color/16/000000/cancel--v1.png"alt="close"class="close" style="position:absolute;top:-15px;right: -15px;
  background-color: #fff;height: 23px;width: 20px;border-radius: 50%;cursor: pointer;"/>
   
   <img src="https://img.icons8.com/ios/64/000000/lock.png" alt="user"/>
   </div>
   <form  method="POST"  style="margin-top: 11px;" onsubmit="return Verification1()">
       <label class="label"for="email" style="color: black; font-size: 18px;margin-left: -210px;"><img src="https://img.icons8.com/small/64/000000/user-male-circle.png"class="icone"style="margin-bottom: -71px;
        margin-left: -167px;"/></label>
   <input type="email" name="email" id="emaill" placeholder=" Entrer votre adresse email" style="margin:20px auto; display: block; width: 50%; padding: 8px;
  border: 1px solid gray;">
  <label for="mdp" style="color:black; font-size:18px;margin-left:-374px;"> <img src="https://img.icons8.com/small/64/000000/lock.png" class="icone"/> </label>
  <input type="password" name="mdp" id="password" placeholder=" Entrer votre mot de passe" style="    display: block;  width: 50%; padding: 8px; margin-top: -46px; border: 1px solid gray;margin-left: 138px;">
 <input class="bouton2"  type="submit" name="subcnx" style="margin-left: -128%;width: 48%;margin-top: 42px;"  value="connexion"/> 
 
</form>
<div class="modal footer" style="background-color:#56ade4;  padding-top: 17px; margin-top: 14px; padding: 22px 11px;  margin-left: -20px;  margin-right: -20px; border-radius: 4px;">


</div>
   
</div>
</div> 
</div>
<script>
 document.getElementById("button").addEventListener("click",function(){
     document.querySelector(".popup").style.display="flex";
 })
 document.querySelector(".close").addEventListener("click",function(){
   document.querySelector(".popup").style.display   = "none"


 })

</script>
</div>



<div class="container3" >
<div class="popup1" style="display: none;border: 1px solid #ccc0;padding: -18px;   margin: -545px 45px 213px;   margin-left: -10px;   width: 167%;
    height: 619px;  justify-content: center;  align-items: center;  text-align: center;background-color: #ffffff78;">
   <div class="popup-content1" style=" height: 150px;
 height: 526px; width: 588px; background-color: #ffffffdb; padding: 20px; margin-top: -12px;
  position:relative;margin-left: -60px;">

  <div class="modal header1"style="margin-right: -19px;border: 1px solid black;margin-top: -20px;margin-left: -20px;
    background-color: #56ade4; height: 44px;"> <h4 class="text" style="    font-size: 35px; margin-top: 2px;color: WHITE;">inscription</h4>
   <img src="https://img.icons8.com/color/16/000000/cancel--v1.png"alt="close"class="close1" style="position:absolute;top:-15px;right: -15px;
  background-color: #fff;height: 23px;width: 20px;border-radius: 50%;cursor: pointer;"/>
   </div>
   <form  method="POST" action="../bdd/inscription-patient.php" style="margin-top: 18px; "onsubmit="return Verification()">
   <ul>
   
       <div class="nom" style="  line-height: 38px; margin-left:-27px ">
       <label class="label"for="nom" style="color: black; font-size: 18px;margin-left:-536px;">Nom
        </label>
   <input type="text" name="nom" id="nom" placeholder=" Entrer votre nom" style="margin-top: 0px;margin-left: 31px; display: block; width: 63%; padding: 8px;
  border: 1px solid gray;">
  </div>
  <div clas="prenom" style=" line-height: 38px;  margin-left: -28px;">
  <label for="prenom" class="prenom" style="    margin-left: -545px;  color: black;">Prenom</label>
  <input type="text" name="prenom" id="prenom" placeholder=" Entrer votre prenom" style="margin-top: -1px;margin-left: 31px; display: block; width: 63%; padding: 8px;
  border: 1px solid gray;">
</div>
<div class="champ"style=" line-height: 38px;margin-left: -28px;">
  <label for="email" class="email" style="    margin-left: -545px;  color: black;">Adresse email</label>
  <input type="email" name="email" id="email" placeholder=" Entrer votre adresse email" style="margin-top: -1px;margin-left: 31px; display: block; width: 63%; padding: 8px;
  border: 1px solid gray;">
</div>

<div class="champ"style=" line-height: 38px;line-height: 36px;margin-left: -25px;">
  <label for="conf_email" class="conf_email" style="    margin-left:-453px;  color: black;">Confirmation Adresse email</label>
  <input type="text" name="conf_email" id="conemail" placeholder=" Confirmer votre adresse email" style="margin-top: -1px;margin-left: 31px; display: block; width: 63%; padding: 8px;
  border: 1px solid gray;">
</div>
<div class="champ"style=" line-height: 38px;line-height: 36px;margin-left: -25px;">
  <label  class="mdp" style="  margin-left: -545px;  color: black;">Mot de passe</label>
  <input type="password" name="mdp" id="password" placeholder="Entrer votre mot de passe" style="margin-top: -1px;margin-left: 31px; display: block; width: 63%; padding: 8px;
  border: 1px solid gray;">
</div>
<div class="champstyle=" style="line-height: 36px;margin-left: -25px;">
  <label for="age" class="prenom" style="    margin-left: -545px;  color: black;">Age</label>
  <input class="list" type="number" id="age" name="age" class="field-style field-full align-none"  value="1"min="1" max="100"
 style="margin-top: -10pxpx;margin-left: 31px; display: block; width: 5%; padding: 8px;/>
  border: 1px solid gray;">
</div>
<div class="champ" style=" margin-left: -410px; color: black; margin-top: 10px;">
<label >SEXE : </label>
<input  type="radio" name="sexe" value="H"  >homme
 <input type="radio" name="sexe" value="F"   >femme
</div>

</ul>

<div class="btn2"style=" margin-top: -21px;">
<input type="submit" class="bouton2" id="btn1" value="confirmer" name="inscrire"  style="margin-left: -427px;
    top: 0px;" >
<input type="reset"  value="annuler" name="annuler" class="bouton2"id="btn2" >
</div>
</form>


</div>
</div> 


<script>
 document.getElementById("button1").addEventListener("click",function(){
     document.querySelector(".popup1").style.display="flex";
 })
 document.querySelector(".close1").addEventListener("click",function(){
   document.querySelector(".popup1").style.display   = "none"


 })

</script>
</div>
              
            
        
        





                    </div>
                </div>
            </div>
        </div>
        <p  class="adr"style="    margin-left: -32px;  margin-top: -368px;"><img src="../photo/adresse.png"> 1Rue des fréres BEGGAZ-Bloc C n2 Nouvelle Ville TIZI-OUZOU</p>


    </section>
   
    <!--================ End Home Banner Area =================-->







  </body>

 

  </html>