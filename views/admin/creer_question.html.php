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
      <link rel="stylesheet" href="<?=WEB_ROUTE.'css/creer_question.css'?>">
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
        <div class="container-fluid">
        <div class="retour">
            <i class="bi bi-arrow-left-circle"><a class="btn" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>" role="button">Liste questions</a></i>
            
        </div>
        
        <h1 class="titre">Création question</h1>
        </div>
       
            
        <div class="container">
            <div class="contenu">
              
                <form method="post" action="<?=WEB_ROUTE?>"  enctype="multipart/form-data"  style="margin-top: 5%;">
                    <input type="hidden" name="controlleurs" value="admin"/>
                    <input type="hidden" name="action" value="<?=!isset($user['id']) ? 'creer_question': 'edit_question';?>"/>
                    <input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:'';?>">
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><b>Question</b></label>
                        <textarea class="form-control input"  id="exampleFormControlTextarea1" rows="3" value="<?=$_SESSION['question'] ? $_SESSION['question']:""?>"></textarea>
                        <small id="questionlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['question'])? $arrayErreur['question']:'';?></small>
                    </div>
                    <div class="form-group">
                        <label for="selection"><b>Nombre de point</b></label>
                        <input type="text" name="nbr_pts"  class="form-control QU4" value="<?= $_SESSION['nbr_pts'] ? $_SESSION['nbr_pts']: ""?>">
                        <small id="nbr_ptslHelp" class="form-text text-danger"><?php echo isset($arrayErreur['nbr_pts'])? $arrayErreur['nbr_pts']:'';?></small>
                           
                    </div>
                    
                        
                    <div class="form-group">
                        <label for="selection" ><b>Type de reponse</b></label>
                        <select id="selection" name="choice" class="form-control QU2">
                            <option value=""> Choisir...</option>
                            <option value="1" >Choix simple</option>
                            <option value="2" >choix double</option>
                            <option value="3" >Choix multiple</option>
                            <small id="choicelHelp" class="form-text text-danger"><?php echo isset($arrayErreur['choice'])? $arrayErreur['choice']:'';?></small>
                            
                        </select>
                        
                    </div>
                    
                    <div class="form-group">
                       <p class="QU"><b>Nombre de réponses</b></p>
                           <input type="text" name="nbr_reponse"  class="form-control QU4" value="<?= $_SESSION['nbr_reponse'] ? $_SESSION['nbr_reponse']: ""?>">
                           <small id="numberlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['nbr_reponse'])? $arrayErreur['nbr_reponse']:'';?></small>
                           <button type="submit" class="btn btn-dark ajout" name="ajout"><i class="bi bi-plus-square-fill"></i></button>
                       </div>
                   
                    <?php for ($i=0; $i < $_SESSION['nbr_reponse'] ; $i++): ?>
                       <div class="row ml-5">
                           <div class="col-md-10">
                                <input type="text" name="nbr_reponse"  class="form-control QU4 ml-4 "> <br>
                           </div>
                         
                                <?php if ( $_SESSION['choice']== '2'): ?>
                                <input class="form-check-input ml-auto mr-auto"  type="radio" name="double"id="exampleRadios1" value="option1">
                                <?php elseif ($_SESSION['choice']== '3'): ?>
                                <label><input class="" type="checkbox" name="multiple" value=""></label>
                          </div>
                        <?php endif ?>

                        <?php endfor ?>

                    
                    <div class=" aligne">
                        <a  type="submit" style="color: white;"  class="btn  btn-secondary " href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">Annuler</a>
                        <button type="submit" style="color: white;" name="btn-submit" class="btn btn-enregistrer annuler">Enregistrer</button>
                 

                    </div>
                </form>
                    
            </div>
       
            
        </div>
       
        
               
                         
                

        
                    

<?php 
    if (isset( $_SESSION['nbr_reponse'])) {
        unset( $_SESSION['nbr_reponse']);
    }
    if (isset( $_SESSION['choice'])) {
        unset( $_SESSION['choice']);
    }
    if (isset( $_SESSION['question'])) {
        unset( $_SESSION['question']);
    }
    if (isset( $_SESSION['nbr_reponse'])) {
        unset( $_SESSION['nbr_reponse']);
    }
    if (isset( $_SESSION['nbr_pts'])) {
        unset( $_SESSION['nbr_pts']);
    }
?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>