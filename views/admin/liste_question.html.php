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
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/liste_question.css'?>">
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
                        <a class="btn sn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="btn btn-registre" href="<?=WEB_ROUTE.'?controlleurs=admin&views=creer_question'?>" role="button"><i class="bi bi-plus-lg"></i>Créer question</a>
        </div>
        <h2><b>Liste des questions</b></h2>
        <?php 
            
            $json = file_get_contents(FILE_QUESTION);
            // 2 convertir contenu en tableau
            $arrayuser = json_decode($json, true);  
           ?>
            
        <div class="container-fluid">

        <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($arrayuser  as $key=> $question): ?>
                       
                 
                        
                   
                    <tr >
                    <th scope="row"></th>
                        <td>  
                            <?=$question['question'] ?> 
                           
                            <?php if ($question['choice']=='2'): ?> <?php echo "</br>" ?>
                            <?php foreach($question['reponse'] as $key => $reponse) :?>
                            <input type="radio" name="double"   <?php echo isset($question['bonnereponse']) && $question['bonnereponse']=='reponse'.$key? 'checked': '';?>>  <?= $reponse ?><br>
                         
                    
                            <?php endforeach ?>
              
                            <?php endif ?>

                            <?php if ($question['choice']=='3'): ?> <?php echo "</br>" ?>
                
                            <?php  foreach($question['reponse'] as $key=> $reponse) :?>
                            <input type="checkbox" name="multiple"  <?php echo isset($question['bonnereponse'.$key]) ? 'checked': '';?>>  <?= $reponse ?><br>
                            
                            <?php endforeach ?>
                            <?php endif ?>

                            <?php if ($question['choice']=='1'): ?>
                            <input type="text" class="input" style="" name=""  value="<?= $question['reponse'][0] ?>">   <?= $question['reponse1'] ?></td><br>
                            <?php endif ?>
                        </td>   
                        <td> 
                            <div class="modification">
                            <a name="" id="" class="btn btn-light" href="<?= WEB_ROUTE.'?controlleurs=admin&views=edit_question&id='.$question['id']?>" role="button"><i class="bi bi-pencil-square"></i></a>
                            <a name="" id=""  class="btn btn-light supprimer" href="<?= WEB_ROUTE.'?controlleurs=admin&views=supprimer&id='.$question['id']?>" role="button"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </td>   
                    </tr>
                    <style>
                    .supprimer{
                        margin: 4%;
                        height: 15%;
                    }
                    
                    </style>
                   
                    <?php endforeach?>

                    
                </tbody>
            </table>
        </div>
       
                        

    


        
            
              
         <!--Optional JavaScript-->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>