
 <!DOCTYPE html>
<html lang=fr>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/page2.css">  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=xzZ-rVr0qOX36uzxYEqPSXXFaFIhSGeJPjmRKLxBNQRUdy1TDeaYJx5KPGZR2hPDYMtz8J0rjJstajfPx1FijRP9vJvcfJ3CdL4HdVZ3sA6PXEDHc6K2ANqP9mwZOb-U0Vav780urjPz8GTzqvGxZI8iF9Gbi0qkGkfYP1HfUzxXjDuREUAEHzIzb7y3sm6hSpBgfwUXKomhd2qEJf62_oHiOcZDKH24HblCUVEFq6nU7dSB_y_KYnqDEAFDh1o6COhXtRkcqeGJd-uU0KE2iXMXOH3kTfcxSmEVwPCo8N3ShB3OQa8dK2uhvadfYVeAmQAZmnnxt1sWmIJ70Kf-Wg" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>insertion d'un nouveau patient</title>
 
</head>
<body>
    <header>
    
        <div class="logo" >
       <img src="../photo/logomod.png" alt="logo"></img> </div>
    
    </header>
    
          <form class="form-style-9" method="POST" action="../bdd/cnx_bdd3.php" >
            <ul>
            <li>
                <svg class="icon1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="96" height="96"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M80.625,10.75c-38.50683,0 -69.875,31.36817 -69.875,69.875c0,38.50683 31.36817,69.875 69.875,69.875c38.50683,0 69.875,-31.36817 69.875,-69.875c0,-38.50683 -31.36817,-69.875 -69.875,-69.875zM80.625,21.5c32.71192,0 59.125,26.41308 59.125,59.125c0,14.40332 -5.12304,27.54688 -13.60547,37.79297c-4.61914,-13.10156 -14.61328,-23.6416 -27.37891,-28.84864c5.33301,-4.91308 8.73438,-11.92578 8.73438,-19.69433c0,-14.78125 -12.09375,-26.875 -26.875,-26.875c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,7.76855 3.40136,14.78125 8.73438,19.69433c-12.76562,5.20703 -22.71777,15.74707 -27.33692,28.84864c-8.52441,-10.24609 -13.64746,-23.38965 -13.64746,-37.79297c0,-32.71192 26.41308,-59.125 59.125,-59.125zM80.625,53.75c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125zM80.625,96.75c18.2666,0 33.25781,12.97558 36.74317,30.19239c-10.12011,8.02051 -22.84375,12.80761 -36.74317,12.80761c-13.89942,0 -26.62304,-4.7871 -36.70117,-12.80761c3.44335,-17.2168 18.43456,-30.19239 36.70117,-30.19239z">

                </path></g></g></svg>
      
                <input type="text" name="nom" id="nom"class="field-style field-split align-left" placeholder="Entrer votre nom" required />
                <svg class="icon2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="96" height="96"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M80.625,10.75c-38.50683,0 -69.875,31.36817 -69.875,69.875c0,38.50683 31.36817,69.875 69.875,69.875c38.50683,0 69.875,-31.36817 69.875,-69.875c0,-38.50683 -31.36817,-69.875 -69.875,-69.875zM80.625,21.5c32.71192,0 59.125,26.41308 59.125,59.125c0,14.40332 -5.12304,27.54688 -13.60547,37.79297c-4.61914,-13.10156 -14.61328,-23.6416 -27.37891,-28.84864c5.33301,-4.91308 8.73438,-11.92578 8.73438,-19.69433c0,-14.78125 -12.09375,-26.875 -26.875,-26.875c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,7.76855 3.40136,14.78125 8.73438,19.69433c-12.76562,5.20703 -22.71777,15.74707 -27.33692,28.84864c-8.52441,-10.24609 -13.64746,-23.38965 -13.64746,-37.79297c0,-32.71192 26.41308,-59.125 59.125,-59.125zM80.625,53.75c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125zM80.625,96.75c18.2666,0 33.25781,12.97558 36.74317,30.19239c-10.12011,8.02051 -22.84375,12.80761 -36.74317,12.80761c-13.89942,0 -26.62304,-4.7871 -36.70117,-12.80761c3.44335,-17.2168 18.43456,-30.19239 36.70117,-30.19239z">

                </path></g></g></svg>
 
                <input type="text" name="prenom" id="prenom" class="field-style field-split align-right" placeholder="Entrer votre prenom" required />
            
            </li>
            <li>
                <svg class="icon1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="96" height="96"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#4f9fd1"><path d="M80.625,21.5c-5.87891,0 -11.16992,0.20996 -16.125,0.50391v-0.08398c-0.37793,0 -0.71386,0.08398 -1.09179,0.08398c-16.83888,1.00781 -28.5127,3.40136 -36.23926,5.71094c-4.36719,1.34375 -8.18848,4.07324 -11.21192,7.64258c-2.98145,3.52734 -5.20703,7.97851 -5.20703,13.01757v16.125h32.33399l0.46191,-4.87109c0,0 0.71388,-7.22266 3.90528,-14.19335c1.5957,-3.44336 3.77929,-6.76075 6.55078,-9.02832c2.01563,-1.67969 4.2832,-2.93946 7.22266,-3.44336c0.71386,-0.04199 1.21777,-0.12597 1.97362,-0.20996c0.042,0 0.08399,0.04199 0.12598,0c5.16504,-0.29395 10.91797,-0.50391 17.30078,-0.50391c6.38281,0 12.13574,0.20996 17.30078,0.50391c0.04199,0.04199 0.08399,0 0.12598,0c0.16797,0.04199 0.33594,0.04199 0.5459,0.08399c0.50391,0 0.92383,0.08398 1.42774,0.12597c2.93945,0.50391 5.20703,1.76368 7.22266,3.44336c2.77148,2.26757 4.95507,5.58496 6.55078,9.02832c3.19141,6.9707 3.90527,14.19335 3.90527,14.19335l0.41992,4.87109h32.37598v-16.125c0,-5.03906 -2.22558,-9.49023 -5.20703,-13.01757c-3.02344,-3.56934 -6.84473,-6.29883 -11.21192,-7.64258c-7.72656,-2.30957 -19.40039,-4.70312 -36.23925,-5.71094c-0.37794,0 -0.71388,-0.08398 -1.0918,-0.08398v0.08398c-4.95507,-0.29395 -10.24609,-0.50391 -16.125,-0.50391zM40.77442,35.56739c-1.13379,1.80567 -2.26758,3.61132 -3.06543,5.41699c-2.98145,6.4668 -3.06544,9.74219 -3.52734,12.76563h-12.68165v-5.375c0,-1.67969 0.92383,-4.03125 2.6875,-6.08886c1.76368,-2.05761 4.19922,-3.69531 6.13086,-4.24121c2.6875,-0.83984 6.34081,-1.67969 10.45605,-2.47754zM120.47558,35.56739c4.11524,0.79785 7.76856,1.6377 10.49805,2.47754c1.88965,0.5459 4.3252,2.18359 6.08886,4.24121c1.76368,2.05761 2.6875,4.40918 2.6875,6.08886v5.375h-12.68164c-0.46192,-3.02344 -0.54591,-6.29882 -3.48535,-12.76562c-0.83984,-1.80567 -1.97364,-3.61132 -3.10743,-5.41699zM53.75,64.5v11.42188l-0.50391,0.33594c0,0 -7.76855,5.66895 -15.5371,14.19336c-7.81055,8.48242 -16.20899,19.94628 -16.20899,33.17382v10.75c0,8.86035 7.26465,16.125 16.125,16.125h86c8.86035,0 16.125,-7.26465 16.125,-16.125v-10.75c0,-13.22754 -8.39844,-24.69141 -16.16699,-33.17382c-7.81055,-8.52442 -15.5791,-14.19336 -15.5791,-14.19336l-0.50391,-0.33594v-11.42187h-10.75v10.75h-32.25v-10.75zM58.45313,86h44.34375c0.96582,0.75586 6.4248,4.70313 12.80761,11.67383c7.0127,7.64257 13.39551,17.67871 13.39551,25.95117v10.75c0,3.02344 -2.35156,5.375 -5.375,5.375h-86c-3.02344,0 -5.375,-2.35156 -5.375,-5.375v-10.75c0,-8.27246 6.38281,-18.30859 13.35352,-25.95117c6.4248,-6.97071 11.88378,-10.91797 12.8496,-11.67383zM53.75,96.75v10.75h10.75v-10.75zM75.25,96.75v10.75h10.75v-10.75zM96.75,96.75v10.75h10.75v-10.75zM53.75,118.25v10.75h10.75v-10.75zM75.25,118.25v10.75h10.75v-10.75zM96.75,118.25v10.75h10.75v-10.75z">

</path></g></g></svg>
                <input type="text" name="telephone" id="telephone" class="field-style field-split align-left" placeholder="Entrer votre numero de telephone" required/>
                <svg class="icon2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="96" height="96"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#4f9fd1"><path d="M86,21.5c-17.74321,0 -32.25,14.50679 -32.25,32.25c0,5.33164 2.01286,10.7904 4.66113,16.81787c2.22998,5.07543 5.0461,10.35388 7.91553,15.43213h-28.70166c-2.20058,-0.00225 -4.18031,1.33697 -4.99707,3.38037l-21.5,53.75c-0.66186,1.65688 -0.45849,3.5342 0.54281,5.01092c1.00131,1.47672 2.67007,2.3604 4.45426,2.35871h139.75c1.78419,0.00169 3.45295,-0.88199 4.45426,-2.35871c1.00131,-1.47672 1.20467,-3.35403 0.54281,-5.01092l-21.5,-53.75c-0.81676,-2.0434 -2.79649,-3.38263 -4.99707,-3.38037h-28.70166c2.86942,-5.07825 5.68556,-10.3567 7.91552,-15.43213c2.64827,-6.02747 4.66114,-11.48623 4.66114,-16.81787c0,-17.74321 -14.50679,-32.25 -32.25,-32.25zM86,32.25c11.92679,0 21.5,9.57321 21.5,21.5c0,2.08586 -1.34652,7.05124 -3.7373,12.49268c-2.39079,5.44143 -5.66842,11.57491 -8.96533,17.25879c-4.3866,7.5625 -6.34526,10.25358 -8.79736,13.94141c-2.4521,-3.68783 -4.41076,-6.37891 -8.79736,-13.94141c-3.29691,-5.68388 -6.57454,-11.81736 -8.96533,-17.25879c-2.39079,-5.44143 -3.7373,-10.40681 -3.7373,-12.49268c0,-11.92679 9.57321,-21.5 21.5,-21.5zM86,43c-5.93706,0 -10.75,4.81294 -10.75,10.75c0,5.93706 4.81294,10.75 10.75,10.75c5.93706,0 10.75,-4.81294 10.75,-10.75c0,-5.93706 -4.81294,-10.75 -10.75,-10.75zM41.25732,96.75h31.51514c4.72829,7.62307 8.79736,13.79443 8.79736,13.79443l4.43018,6.40381l4.43018,-6.40381c0,0 4.06907,-6.17136 8.79736,-13.79443h31.51513l17.19581,43h-123.87696z">

                </path></g></g></svg>
                <input type="text" name="adresse"id="adresse"class="field-style field-split align-right" placeholder="Entrer votre adresse" required/>
                <li>
                    <div class="date">
                        <label >DATE DE RDV :</label>
                        <input class="l1" type="number" id="jour" name="jour" placeholder="jj" min="1" max="31"style="width:32px">
                        <input type="number" class="l1" id="mois" name="mois"placeholder="mm" min="1" max="12"style="width:50px">
                        <input type="number" class="3" id="annee" name="annee" placeholder="aaaa" min="2020" max="3000">
                       
                        <div class="rad">
                        <label >AGE: </label>
                            <input class="list" type="number" id="age" name="age" class="field-style field-full align-none"  value="1"min="0" max="100"/>
                        </div>
                    </div>
                    </li>
                    <li>
                    
                        
                            
                            
                                <label >SEXE :</label>
                                <input type="radio" name="sexe" id="sexe" value="H" checked>homme
                                <input type="radio" name="sexe" id="sexe" value="F">femme
         <?php                       
if(isset( $_POST['inscrire'])){
  foreach ($_POST['sexe'] as $value) {
    //loop through all checked checkboxes and do logic
  }
}
?>
                                
                            
                </li>
               

                        
                 <input type="submit"  value="enregistrer" name="inscrire" id="submit" style="padding: 4px 25px;
                 background-color: #0096FF; margin: 15px; margin-left: 775px;"  class="button">
         


                <input  type="reset" value="annuler" name="annuler" id="annuler" style="padding: 4px 35px;
                background-color: #0096FF;
                margin: 15px;" class="button">
                
                    </li>
                    </ul>
                    </form>
       
                    
        
 
          
                

</body>
</html>
