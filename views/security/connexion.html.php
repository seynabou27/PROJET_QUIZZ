<?php 
if (isset($_SESSION['arrayErreur'])){
    $arrayErreur =$_SESSION['arrayErreur'];
    unset ($_SESSION['arrayErreur']);
}

 require_once(ROUTE_DIR.'views/inc/header.inc.html.php');
?>





<!doctype html>
<html lang="en">
  <head>
    <title>connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/connexion.css'?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />-->

  </head>
  <body>
  <div class="container-fluid mx-auto">
 <div class="row boder">
    <div class="col-md-6 left" class="connect">

            <?php
                $remoteImage = ROUTE_DIR."public/img/logo.png";
                $type = pathinfo($remoteImage, PATHINFO_EXTENSION);
                $data = file_get_contents($remoteImage);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
              ?>

               <img src="<?=$base64?>" alt="tes">

              <h3> <b> Le plaisir de jouer </b></h3>
              
      
      
    </div>
    <div class="col-md-6 right">
    <div class="form-container sign-in-container texte-center">

    <form method="POST" enctype="multipart/form-data" action="<?=WEB_ROUTE?>"style="margin-top: 5%;">
                    <input type="hidden" name="controlleurs" value="security"/>
                    <input type="hidden" name="action" value="connexion"/>
                               
        <h1 class="texte">Connexion</h1>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="texte" name="login" class="form-control  w-75 p-3" style="background-color: #eee;" id="exampleInputEmail1"  placeholder="Nom d'utilisateur / Email">
            <small id="emailHelp" class="form-text text-danger"><?php echo isset($arrayErreur['login'])? $arrayErreur['login']:'';?></small></small>
         </div>
         <div class="form-group">
            <label for="exampleInputPassword"></label>
            <input type="password" name="password" class="form-control  w-75 p-3"  style="background-color: #eee;" id="exampleInputPassword" placeholder="Mot de passe">
            <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?></small>
          </div>
              <div class="form-groupe">
              <button type="submit" class="btn boutton w-75 p-2" name="btn_submit" style="background-color: #FE1B00;">Je me connecte</button>
              </div>
              <p class="texte"> Vous n'avez pas encore de compte?</p>
              <a  class="lien" href="<?=WEB_ROUTE.'?controlleurs=security&views=inscription'?>">Je m'inscris</a>
              

        
    </form>
    </div>
    </div>
    </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


