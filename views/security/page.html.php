<div class="dropdown show">
      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <img class="image" src="<?=WEB_ROUTE."img/avatar.png"?>" alt="avatar">
       <p>Prenom&Nom</p>
      </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Paramétrer votre quizz</a>
      <a class="dropdown-item" href="#">Deconnexion</a>
    </div>
  </div>
   
  <div class="dropdown show">
      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="bi bi-question-circle-fill"></i>
       <p>Questions</p>
      </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Paramétrer votre quizz</a>
      <a class="dropdown-item" href="#">Déconnexion</a>
    </div>
  </div>

  <div class="dropdown show">
      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="bi bi-person-plus-fill"></i>
       <p>Admin</p>
      </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Paramétrer votre quizz</a>
      <a class="dropdown-item" href="#">Deconnexion</a>
    </div>
  </div>

  <div class="dropdown show">
      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="material-icons-outlined">
      </span>

       <p>Joueur</p>
      </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Paramétrer votre quizz</a>
      <a class="dropdown-item" href="#">Deconnexion</a>
    </div>
  </div>

  <div class="dropdown show">
      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="material-icons-outlined">
      </span>

       <p>Tableau de bord</p>
      </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Paramétrer votre quizz</a>
      <a class="dropdown-item" href="#">Deconnexion</a>
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

.container-fluid{
  background-color: black;
  
}
button{
  margin-top: 4%;
  height: 90px;
  width: 170px;
  margin-left: 2%;
}

h3{
    text-align: center;
    color: white;
    margin-top: -5.2%;
    font-size: 23px;
   
    
}
</style>



<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" id="deroulanta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lien</a>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <a class="dropdown-item" href="#">Lien</a>
            <button class="dropdown-item" type="button">Bouton</button>
            <span class="dropdown-item-text">Texte</span>
          </div>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bouton</button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <a class="dropdown-item" href="#">Lien</a>
            <button class="dropdown-item" type="button">Bouton</button>
            <span class="dropdown-item-text">Texte</span>
          </div>
        </div>
      </div>
    </div>


  


  




 

  
  

</style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewsport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body> 
      
   



    <nav class="navbar navbar-expand-sm navbar-light ">
    <a class="navbar-brand" href="#">Quizz</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        
            <?php if (est_admin()) :?>
            <li class="nav-item active">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">Liste des questions</a>
            </li>

                <li class="nav-item">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">Liste des joueurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=joueur'?>">Joueurs</a>
            </li>

            
        </ul>

        <?php endif ?>

        <?php if (est_joueur()) : ?>
        <li class="nav-item active">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">jeu</a>
            </li>
           <?php endif ?>

           <?php if (est_connect()) : ?>
        
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
           
                <li class="nav-item active">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Deconnexion</a>
            </li>
           
            
        </ul>
        <?php endif ?>
        
        
    </div>
</nav>

<style>
.navbar{
    background-color: #FE1B00;
  color: #eee;
    
}
</style>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> 



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
            <?php if (est_admin()) :?>
                <a class="dropdown-item" href="#">créer Questions</a>
                <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">Liste Questions</a>
                <?php endif ?>
            </div>
        </div>
        <div class="dropdown show">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-person-plus-fill"></i>
                <p>Admin</p>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php if (est_admin()) :?>
                <a class="dropdown-item" href="#">créer Admin</a>
                <a class="dropdown-item" href="#">Supprimer Admin</a>
                <?php endif ?>
            </div>
        </div>
        <div class="dropdown show">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-controller"></i>

                <p>Joueur</p>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php if (est_admin()) :?>
                <a class="dropdown-item" href="#">Jeu</a>
                <a class="dropdown-item" href="#">Score</a>
                <?php endif ?>
            </div>
        </div>
        <div class="dropdown show">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-grid-1x2-fill"></i>

                <p>Tableau de bord</p>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php if (est_admin()) :?>
                <?php if (est_joueur()) : ?>
                    <a class="dropdown-item" href="#">Joueurs</a>
                    <a class="dropdown-item" href="#">Score</a>
                <?php endif ?>
                <?php endif ?>
            </div>
        </div>
        </div>