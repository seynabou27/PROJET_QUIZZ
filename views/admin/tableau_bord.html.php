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
      <link rel="stylesheet" href="<?=WEB_ROUTE.'css/tableau_bord.css'?>">
  </head>
  <body>

        <header>
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
        </header>
        <?php 

            $json = file_get_contents(ROUTE_DIR.'data/user.data.json');
                
            // 2 convertir contenu en tableau
            $arrayuser = json_decode($json, true);
            $json = file_get_contents(ROUTE_DIR.'data/user.question.json');
                
            // 2 convertir contenu en tableau
            $arrayquestion = json_decode($json, true);

            $compteurj=$compteuri=$compteura=0;
            foreach ($arrayuser as $user){
                if ($user['role']=='ROLE_JOUEUR') {
                    $compteurj++;

                }elseif($user['role']=='ROLE_ADMIN'){
                    $compteuri++;
                }
            }
            $compteura=0;
            foreach($arrayquestion as $question){
                $compteura++;

            }







        ?>

        <div class="container  justify-content-center">
            <div class="card admin"> 
            <b><?=$compteuri?></b> 
                <b>Administateurs </b>  
                <i class="bi bi-bar-chart"></i>
            </div>

            <div class="card joueur">
                <b><?=$compteurj ?></b>
                <b>Nombre de joueur </b>
                <i class="bi bi-bar-chart"></i>
            </div>

        
            <div class="card question">
                <b><?=$compteura?></b>
                <b>Nombres de question</b>
                
                <i class="bi bi-bar-chart"></i> 

            </div>

            
        </div>
        <style>
           
        
        </style>

        
              
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>