<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
        <div class="container-fluid">

            <?php
                $remoteImage = ROUTE_DIR."public/img/logo.png";
                $type = pathinfo($remoteImage, PATHINFO_EXTENSION);
                $data = file_get_contents($remoteImage);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
            ?>
            <img src="<?=$base64?>" alt="tes">

        </div>
        <h3> <b> Le plaisir de jouer </b></h3>
        <div class="row">
            <div class="col-3">
                <div class="dropdown show" class="show">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="image" src="<?=WEB_ROUTE."img/avatar.png"?>" alt="avatar">
                        <p>Prenom&Nom</p>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php if (est_connect()) : ?>
                            <a class="dropdown-item" href="#">Paramétrer votre quizz</a>
                            <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Deconnexion</a>
                        <?php endif ?>
                    </div>
                </div>
            
                <div class="dropdown show">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-question-circle-fill"></i>
                        <p>Questions</p>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        
                            <a class="dropdown-item" href="#">créer Questions</a>
                            <a class="dropdown-item" href="#">Liste Questions</a>
                            
                    </div>
                </div>
                <div class="dropdown show">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-plus-fill"></i>
                        <p>Admin</p>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">créer Admin</a>
                        <a class="dropdown-item" href="#">Supprimer Admin</a>
                    </div>
                </div>
                <div class="dropdown show">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-controller"></i>

                        <p>Joueur</p>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        
                            <a class="dropdown-item" href="#">Jeu</a>
                            <a class="dropdown-item" href="#">Score</a>
    
                    </div>
                </div>
                <div class="dropdown show">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-grid-1x2-fill"></i>

                        <p>Tableau de bord</p>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                
                        <a class="dropdown-item" href="#">Joueurs</a>
                        <a class="dropdown-item" href="#">Score</a>
                
                    </div>
                </div>
                
            </div>
            <div class="col-8">
                <div class="container">
                    <p><b>Liste Questions</b></p>
                    <div class="row">
                        <div class="col-5">
                            <div class="fond">
                                <p><b>1.Les langages Web</b></p>
                                
                                
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>

























        <style>

            body {
                height:100%;
                background-color: #FE1B00;
    
            }
            img{
                width: 79px;
            }
            .image{
                width: 40px;
            }
            p{
                margin-top: 1%;
            }
            h3{
                text-align: center;
                color: white;
                margin-top: -5.2%;
                font-size: 23px;
            }
            h1{
                text-align: center;
                color: #000;
                margin-bottom: 12%;
            }
            .container-fluid{
                background-color: black;
            }
            button{
  
                height: 88px;
                width: 130px;
                margin: 4%;
            }
            .col-3{
                margin-top: 3%;
            }
            .col-8{
                background-color: white;
                margin-top: 4%;
                margin-left: 5%;
            }

            a:hover{
                color: #FE1B00;

            }
            ul li a {
                text-decoration: none;
            }
            .btn {
                background-color: #FE1B00;
                color: #eee;
                margin-left: 12%;
  
  
            }
            .lien{
                color: #FE1B00;
                margin-left: 39%;
            }
        </style>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>