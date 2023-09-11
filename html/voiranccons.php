<?php 
    


    if(isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);
    }else{
        $currentPage = 1;
    }
    include('../bdd/bdd-ListRdv.php');
    // $requete="SELECT * FROM user";
    // $resultatf= $pdo-> query($requete);
    $size=isset($_GET['size'])?$_GET['size']:"4";
    $premier = ($currentPage * $size) - $size;
     //$offset=($currentPage -1)*$size;
     $requete="SELECT * FROM fichepat where id=id LIMIT $premier,$size";
      $sqlCount="SELECT COUNT(*) AS nbrU FROM fichepat";
    
    
         
     $resultatf= $dbco->query($requete);
     $queryCount = $dbco->query($sqlCount);
     $result = $queryCount->fetch();

         $nbreUser = (int) $result['nbrU'];
         $pages = ceil ($nbreUser / $size);
     
  
  //liaison du parametre nommé
  
  

  
         
  

  ?>
      
      <!DOCTYPE html>
      <html>
          <head>
            <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initiale-scale=1.0">
              <meta name="description" content="Application Web">
              <link rel="stylesheet" type="text/css" href="../css/ListRdv.css">
            <link rel="stylesheet"type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <link href="css/bootstrap.css" rel="stylesheet">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <title>espace docteur </title>
            <style>
                /* Style the links inside the sidenav */
              
          #mySidenav a {
  position: absolute;
    left: -150px;
    transition: 0.3s;
    padding: 16px;
    width: 167px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 12px 12px 0;
}

#mySidenav a:hover {
left: 0;
}


#accueil {
top: 90px;
background-color: #2196F3;
}

#LPAT{
top: 140px;
background-color: #2196F3;
}
#fp{
top: 190px;
background-color: #2196F3;
}
#Ncon{
  top: 240px;
  background-color: #2196F3;
  }
  #Acon{
    top: 310PX;
    background-color: #2196F3;
    }

.icon{
margin-right: -20px;
margin-left: 1099px;
margin-top: -102px;
margin-bottom: 36px;
padding-left: 18px;
}
        </style>
      
      
     
          
      </head>
      
      
          <body style=" position:fixed; background-color: #cccccc;width: 101%; left: 0%;">
          <header style=" margin-left: 1px;">
                  <div class="logo" style="top:-2px;  margin-left: 1px; ">
                      <img src="../photo/logomod.png" alt="logo" style="width:100%; height:100px ; overflow: hidden;margin-top: -14px;"> 
                  </div>
                  <div class="deconnexion"style="margin-right: -68px;">
                             
                      <svg class="icon1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="96" height="96"
                       viewBox="0 0 172 172"
                         style=" fill:#000000;"><defs><linearGradient x1="86" y1="30.23438" x2="86" y2="158.6055" gradientUnits="userSpaceOnUse" id="color-1_44051_gr1"><stop offset="0" stop-color="#5ab6de"></stop><stop offset="1" stop-color="#0072ff"></stop></linearGradient><linearGradient x1="86" y1="14.10938" x2="86" y2="95.43044" gradientUnits="userSpaceOnUse" id="color-2_44051_gr2"><stop offset="0" stop-color="#a8d0e9"></stop><stop offset="1" stop-color="#70afff"></stop></linearGradient><linearGradient x1="86" y1="30.23438" x2="86" y2="158.6055" gradientUnits="userSpaceOnUse" id="color-3_44051_gr3"><stop offset="0" stop-color="#4fa0d2"></stop><stop offset="1" stop-color="#0072ff"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M86,155.875c-34.08556,0 -61.8125,-27.72694 -61.8125,-61.8125c0,-24.31381 14.33781,-46.45881 36.52581,-56.41869l2.19838,4.902c-20.25838,9.09719 -33.34919,29.31794 -33.34919,51.51669c0,31.11856 25.31894,56.4375 56.4375,56.4375c31.11856,0 56.4375,-25.31894 56.4375,-56.4375c0,-22.2095 -13.09887,-42.43294 -33.368,-51.52475l2.19837,-4.902c22.20144,9.9545 36.54462,32.10219 36.54462,56.42675c0,34.08556 -27.72694,61.8125 -61.8125,61.8125z" fill="url(#color-1_44051_gr1)"></path><path d="M96.75,80.625c0,5.93669 -4.81331,10.75 -10.75,10.75v0c-5.93669,0 -10.75,-4.81331 -10.75,-10.75v-53.75c0,-5.93669 4.81331,-10.75 10.75,-10.75v0c5.93669,0 10.75,4.81331 10.75,10.75z" fill="url(#color-2_44051_gr2)"></path><path d="M86,139.75c-25.19263,0 -45.6875,-20.49487 -45.6875,-45.6875c0,-17.62462 9.847,-33.368 25.69787,-41.09456l2.35694,4.83481c-13.99112,6.8155 -22.67981,20.70988 -22.67981,36.25975c0,22.22831 18.08419,40.3125 40.3125,40.3125c22.22831,0 40.3125,-18.08419 40.3125,-40.3125c0,-15.54719 -8.686,-29.44156 -22.67444,-36.25975l2.35694,-4.82944c15.84819,7.72388 25.6925,23.46725 25.6925,41.08919c0,25.19263 -20.49487,45.6875 -45.6875,45.6875z" fill="url(#color-3_44051_gr3)">
      
                           </path></g></g></svg>
                           <a href="../bdd/deco.php"><button class="deco">Deconnexion</button></a>
                  </div>
      
              </header>
              
              <div id="mySidenav" class="sidenav">
           
       
              <a href="espaceDoc.php?id=1" id="accueil">accueil</a>
     <a href="listePat.php" id="LPAT">Liste patients</a>
     <a href="fichePat.php" id="fp">Fiche patient</a>
     <a href="NouvConsu.php" id="Ncon">Nouvelle consultation</a>
     <a href="#" id="Acon">Anciennes consultation</a>


           
      
         </div>
      
      
      <body>
      
      
     <!-- <div class="container "style="margin-top:1%">
        <form class="form-inline" action="voiranccons.php" method="get" style="border: 2px width:444px;solid #4e97ff; ">
          <fieldset style="margin-top=14px;">    
            <div class="input-group" style="    margin-bottom: -15px;margin-top: 10px;;">
            
              <input id="nomC" name="nomC" type="text" class="form-control"  placeholder=" mots clé ou bien tous"aria-label="Saisie de mots clés" required="required" style="margin-top: -13px;
          margin-left: -2%;">
              <div class="input-group-append">
              
        <button type="submit" class="btn btn-default" style="margin-top: -57px; margin-left: 97%; width: 53px; height: 34px;">
          <span class="glyphicon glyphicon-search"></span> 
        </button>
          </div>
            </div>
          </fieldset> 
        </form>
      </div>-->
              </div>
              <div class="panelpanelprimary"style="border: 2px solid #0000004a; width: 1168px; margin-left: 12%; margin-top: 15px;">
                  <div class="panel-heading" style="color:white; background-color:#0096FF;text-align: center;"> <strong> Anciennes consultations (<?php echo $nbreUser ?>)</strong> </div>
                  <div class="panel-body" style="padding:0px;">
                      <table class="table table-striped">
                          <thead>
                          <th>num</th><th>n°patient</th><th>Motif de la visite</th><th>poid</th><th>taille</th><th>diagnostic</th><th>signe physique</th><th>siége des laison</th><th>signe fonctionnel</th><th>signe général</th><th>remarque</th><th>date</th>
                         </thead>
                              <tbody>
                              
                              <?php
                             
                             
                              foreach( $resultatf as $user){
                              ?>
                                   <tr>
                                   <td><?php echo $user['idfiche']?></td>
                                   <td><?php echo $user['id']?></td>
                                   <td><?php echo $user['motifv']?></td>
                                   <td><?php echo $user['poid']?></td>
                                   <td><?php echo $user['taille']?></td>
                                      <td><?php echo $user['diag']?></td>
                                      <td><?php echo $user ['signph']?></td>
                                      <td><?php echo $user['siegedl']?></td>
                                      <td><?php echo $user['signf']?></td>
                                      <td><?php echo $user['signg']?></td>
                                      <td><?php echo $user['remq']?></td>
                                      <td><?php echo $user['date']?></td>
               
                                      <td>
      
              
               
      
      
   
      
      
                                  
                                   </tr>
                                   <?php } ?>
           
                              </tbody>
      
      
                          
                      </table>
              
                      <nav>
          <ul class="pagination">
          <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                  <a href="voiranccons.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
              </li>
              <?php for($i= 1; $i <= $pages; $i++): ?>
                  <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                  <li class="page-item <?php if($i == $currentPage)  echo "active";  ?>">
                      <a href="voiranccons.php?page=<?= $i ?>" class="page-link"><?= $i ?></a>
                  </li>
              <?php endfor ?>
                 <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                 <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                  <a href="voiranccons.php?page=<?= $currentPage +1 ?>" class="page-link">Suivante</a>
              </li>
                
          </ul>
      </nav>
                           </div>
                  </div>
           </body>
      
         
         
      </body>
      </html> 