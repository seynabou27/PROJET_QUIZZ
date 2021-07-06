
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    
            <!-- Pop-up -->
            <?php  
                $json = file_get_contents(FILE_USERS);
                    // 2 convertir contenu en tableau
                $arrayuser = json_decode($json, true);
                    

            ?>
            
            <h2><b> Liste des Joueurs </b></h2>
            
            
            <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                       
                        <th scope="col">Prenom&Nom</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Scores</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($arrayuser as $user): ?>
                    <?php if ($user['role']== "ROLE_JOUEUR"): ?>
                        
                   
                    <tr>
                        <td>
                            <?=  $user["nom"]." ".$user['Prenom'] ?>
                        </td>
                        <td>  <?=  $user["login"]?></td>
                        <td>350pts</td>
                       
                    </tr>
                    <?php endif ?>
                    <?php endforeach ?>
                    
                </tbody>

            </table>
    </div>
        




    

                    <style>
                                    
                        nav{
                            background-color: black;
                        
                        }
                        .navbar-toggler-icon{
                            background-color: white;
                            border-radius: 3px;
                        }
                        button:after{
                            color: white;

                        

                        }
                        .justify-content-center{
                            margin-left: 25%;
                        }
                        .btn:hover{
                            color: white;
                        }
                        link{
                            color: white;
                        }
                
                        a:hover{
                            color: white;
                            
                            border-bottom: 5px solid white;
                        
                        }
                        ul li a {
                            text-decoration:none;
                            color: #7a7a7a;
                        
                        }
                    
                        ul{
                            margin-left: 28%;
                            color: white;
                        
                        }
                        .btn{
                            color: #767676;
                        }
            
                    
                    
                        img{
                            width: 45px;
                        }
                        h3{
                            font-size: 16px;
                            margin-top: 2.5%;
                            color: white;

                        }
                        h2{
                            font-size: 20px;
                            margin: 6%;
                        }
                        .image{
                            margin-left: 14%;
                        }
                        .btn-n{
                            float: right;
                            margin: 2%;
                            background-color:#FE1B00;
                            color: white;
                        }
                        
       
                    
                    </style>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

