<?php
    if (isset($_SESSION['arrayErreur'])){
     $arrayErreur =$_SESSION['arrayErreur'];
     unset ($_SESSION['arrayErreur']);
 } 
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
      <link rel="stylesheet" href="<?=WEB_ROUTE.'css/liste_admin.css'?>">
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
        
        <div class="boutton">
        <a class="btn btn-registre" style="color:white;" href="<?=WEB_ROUTE.'?controlleurs=admin&views=creer_admin'?>" role="button"><i class="bi bi-plus-lg"></i>Création d'un administrateur</a>
        </div>
            <!-- Pop-up -->
            <?php   
                $json = file_get_contents(FILE_USERS);
    
                // 2 convertir contenu en tableau
                $arrayuser = json_decode($json, true);
                //if  (!isset ( $_GET [ 'liste_admin' ]) ) {  
                    //$listadmin  = 1 ;  
                //}else {  
                    //$listadmin  =  $_GET [ 'liste_admin' ];  
                //}  
                
                //$results_par_page  = 5;  
                //$page_result  = ( $page -1) *  $results_par_page ;  

                //determiner le nombre total par page
                //$nombre_page  =  ceil  ( $nombre_result  /  $results_par_page );  
                
                
 

                
                    
            ?>
            
            <h2><b> Liste des Administrateurs </b></h2>
            
            
            <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <th scope="col">Prenom&Nom</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                   <?php foreach ($arrayuser as $user): ?>
                    <?php if ($user['role']== "ROLE_ADMIN"): ?>
                        
                   
                    <tr>
                        <td> 
                            <?=  $user["nom"]." ".$user['Prenom'] ?>
                        </td>
                        <td>  <?=  $user["login"]." ".$user['role'] ?></td>
                        <td><a name="" id="" class="btn btn-light" href="<?=WEB_ROUTE.'?controlleurs=security&views=edit&id='.$user['id']?>" role="button">Modifier<i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <?php endif ?>
                    <?php endforeach ?>


                    
                </tbody>
            </table>
            <nav aria-label="Page navigation example" class="page">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" style="color:#767676;" href="#" tabindex="-1">Précedent</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" style="color:#FE1B00;" href="#">suivant</a>
                    </li>
                </ul>
            </nav>
                    
        </div>
        


     
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>