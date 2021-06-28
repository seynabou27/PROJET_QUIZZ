
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
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=jeu'?>">Joueurs</a>
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
            <p class="titre"><b>Création question</b></p>
        </div>
        
            
        </div>
            
            
        <div class="container">
            <div class="contenu">
                <div class="input-group">
                    <p class="QU"><b>Question</b></p> <input class="input" type="text" name="" value="">
                </div>
                         
                 <div class="form-group">
                   <label for="selection"><b>Nombre de point</b></label>
                   <select id="selection" class="form-control QU1">
                     <option value=""> Choisir...</option>
                        <option value="1">1pts</option>
                        <option value="2">2pts</option>
                        <option value="3">4pts</option>
                        <option value="4">50pts</option>
                        <option value="5">60pts</option>
                        <option value="6">70pts</option>
                        <option value="7">100pts</option>
                   </select>
                 </div>
                    
                <div class="form-group">
                   <label for="selection"><b>Type de reponse</b></label>
                   <select id="selection" class="form-control QU2">
                     <option value=""> Choisir...</option>
                        <option value="1">Choix simple</option>
                        <option value="3">choix double</option>
                        <option value="2">Choix multiple</option>
                        
                   </select>
                   <div class="input-group">
                        <p class="QU5"><b>Réponse1</b></p> <input style="margin: 3%;" class="QU4" class="input" type="text" name="" value=""> <i class="bi bi-trash-fill"></i>
                    </div>
                    <div class="input-group">
                        <p class="QU6"><b>Réponse2</b></p> <input style="margin: 3%;"  class="QU4" class="input" type="text" name="" value=""><i class="bi bi-trash-fill"></i>
                    </div>
                 </div>
                    <div class="ajout">
                        <i class="bi bi-plus-square-fill"></i>
                    </div>
                    <div class="aligne">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" name="btn-submit" class="btn btn-enregistrer">Enregistrer</button>
                 

                    </div>
                    
            </div>
       
            
        </div>
       
        

        <style>
            .retour{
                margin: 5%;
                
            }
            .container{
                
                padding: 2.5%;
                
            }
            .titre{
                margin-left: 13%;
                margin-top: -3.2%;
                font-size: 23px;
            }
            .input{
                border-radius: 20px;
                background-color: gainsboro;
                border: 1.5px solid gainsboro;
                width: 76%;
                height: 75px;
                margin-left: 2%;

            }
            .QU{
                margin-top: 2%;



            }
            
            .QU1{
                width: 30%;
                background-color: gainsboro;
                

            }
            .QU2{
                width: 70%;
                background-color: gainsboro;
                

            }
            .contenu{
                border: 2px solid black;
                border-radius: 2%;
                height: 800px;
                
            }
            .QU4{
                
                border-radius: 20px;
                background-color: gainsboro;
                border: 1.5px solid gainsboro;
                width: 80%;
                height: 50px;
                

            } 
            .input-group{
                margin-top: 3%;
                margin: 3%;
            }
            .form-group{
                margin: 5%;
            }
            .QU5{
                margin-top: 4.5%;
            }
            .QU6{
                margin-top: 4.5%;
            }
            .bi{
                margin-top: 5%;
            }
            .ajout{
                text-align: center;
                margin-top: -3%;
                margin: 3%;
            }
            .btn-enregistrer{
                background-color:#FE1B00;

            }
            .aligne{
                float: right;
                margin-right: 9%;
            }


        </style>
                    


        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>