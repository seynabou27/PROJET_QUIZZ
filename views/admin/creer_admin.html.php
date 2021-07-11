<?php

    if (isset($_SESSION['arrayErreur'])){
     $arrayErreur =$_SESSION['arrayErreur'];
     unset ($_SESSION['arrayErreur']);
 }
  //require_once(ROUTE_DIR.'views/inc/header.inc.html.php');
 //if (est_admin()){
     //require_once(ROUTE_DIR.'views/inc/menu.html.php');
  //}
 //require_once(ROUTE_DIR.'views/inc/header.inc.html.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewsport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/creer_admin.css'?>">
  </head>
  <body>

        <nav class="navbar navbar-expand-sm navbar-light ">
            
            <?php
                $remoteImage = ROUTE_DIR."public/img/logo.png";
                $type = pathinfo($remoteImage, PATHINFO_EXTENSION);
                $data = file_get_contents($remoteImage);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
            ?>
            
            <img src="<?=$base64?>" alt="tes">            
               
            <h3>Le plaisir de jouer</h3> 
        
        
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavId">
                <ul class="nav justify-content-center">
                
                    <?php if (est_admin()) :?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=tableau_bord'?>">Tableau de bord</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">Questions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_admin'?>">Administrateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_joueur'?>">Joueurs</a>
                        </li>
                    <?php endif ?>

        
                </ul>

           

                <?php if (est_joueur()) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">jeu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_joueur'?>">Joueurs</a>
                    </li>
                <?php endif ?>
                <img class="image" src="<?=WEB_ROUTE."img/avatar.png"?>" alt="avatar">

                <?php if (est_connect()) : ?>
    
                    <div class="dropdown">
                        <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sambata Ndiaye
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Paramétre</a>
                            <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Déconnexion</a>
                        </div>
                    </div>
                <?php endif ?>
    
    
            </div>
        </nav>
            
        
              <div class="container-fluid">
                <div class="retour">
                    <i class="bi bi-arrow-left-circle"></i><a class="btn" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_admin'?>" role="button">Liste des administrateurs</a>
            
                </div>  

              <form method="post" action="<?=WEB_ROUTE?>"  enctype="multipart/form-data"  style="margin-top: 5%;">
                     <input type="hidden" name="controlleurs" value="security"/>
                     <input type="hidden" name="action" value="<?=isset($user['id']) ? 'edit':'inscription';?>"/>
                     <input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:'';?>">
                                
                     <h1 class="texte">Créer Administrateur</h1>
 
               <div class="row mb-3">
                     <div class="col">
                         Prenom
                       <input type="text"  name="Prenom" class="form-control" style="background-color: #eee;" placeholder="" value="<?=isset($user['Prenom']) ? $user['Prenom']:'';?>" >
                       <small class="form-text text-danger"><?php echo isset($arrayErreur['Prenom'])? $arrayErreur['Prenom']:'';?></small>
                     </div>
                     <div class="col">
                         Nom
                       <input type="text" name="nom" class="form-control"style="background-color: #eee;" value="<?=isset($user['nom']) ? $user['nom']:'';?>" placeholder="">
                       <small class="form-text text-danger"><?php echo isset($arrayErreur['nom'])? $arrayErreur['nom']:'';?></small>
                     </div>
               </div>
                <div class="form-group">
                         <label for="exampleInputEmail1"></label>
                         Adresse Email
                         <input type="texte" name="login" class="form-control" style="background-color: #eee;" aria-describedby="emailHelp" value="<?=isset($user['login']) ? $user['login']:'';?>"  placeholder="Name123@gmail.com">
                         <small id="emailHelp" class="form-text text-danger"><?php echo isset($arrayErreur['login'])? $arrayErreur['login']:'';?></small>
                  </div>
                 <div class="row mb-3">
                 <div class="col">
                     <label for="exampleInputPassword"></label>
                     Mot de passe
                     <input type="password" name="password" class="form-control"  style="background-color: #eee;"value="<?=isset($user['password']) ? $user['password']:'';?>" placeholder="**********">
                     <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?></small>
                 </div>
                 <div class="col">
                     <label for="exampleInputPassword1"></label>
                     Confirmer mot de passe
                     <input type="password" name="password1" class="form-control"  style="background-color: #eee;" value="<?=isset($user['password1']) ? $user['password1']:'';?>" placeholder="**********">
                     <small id="passwordlHelp" class="form-text text-danger">
                         <?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?>
                         <?php echo isset($arrayErreur['password1'])? $arrayErreur['password1']:'';?></small> 
                 </div>                 
               </div>
               
                <div class="mb-3">
                     
                  <p class="photo" style="color:black;border:2px solid black"><b>Choisir une photo de profil</b></p>
                  <small id="" class="form-text text-danger"></small>                         
                  <label style="color:black;" for="file">Fichier</label>
                  <input type="file" name="file">
                  <div class="boutton">
                    
                    <button type="submit" class="btn w-15 p-2" name="btn_submit" style="background-color: #FE1B00; color:white;">Enregistrer</button>
                    <a  type="submit" style="color: white;"  class="btn  btn-secondary annuler " href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_admin'?>">Annuler</a>
                  </div>
                 
                         <style>
                            .boutton .btn{
                                margin: 1%;
                                float: right;

                            }
                         </style> 
                </div>
                     
             </form>
          </div>




              
              
      

        




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>