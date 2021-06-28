<?php

    if (isset($_SESSION['arrayErreur'])){
     $arrayErreur =$_SESSION['arrayErreur'];
     unset ($_SESSION['arrayErreur']);
 }
  require_once(ROUTE_DIR.'views/inc/header.inc.html.php');
 if (est_admin()){
     require_once(ROUTE_DIR.'views/inc/menu.html.php');
  }
 require_once(ROUTE_DIR.'views/inc/header.inc.html.php');

 if(isset($_FILES['file'])){
  $tmpName = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  $size = $_FILES['file']['size'];
  $arrayErreur = $_FILES['file']['arrayErreur'];
  
  
}





  ?>
  <!doctype html>
<html lang="en">
  <head>
    <title>deconnexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/style.css'?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />-->


  <div class="container-fluid mx-auto">
   
   
   <div class="row">
         <div class="col-md-6 left" >
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

              <form method="post" action="<?=WEB_ROUTE?>"  enctype="multipart/form-data"  style="margin-top: 5%;">
                     <input type="hidden" name="controlleurs" value="security"/>
                     <input type="hidden" name="action" value="inscription"/>
                     <input type="hidden" name="id" value="<?=isset($user['id']) ? $user['id']:'';?>">
                                
                     <h1 class="texte">Inscription</h1>
 
               <div class="row mb-3">
                     <div class="col">
                       <input type="text"  name="Prenom" class="form-control" style="background-color: #eee;" placeholder="Prénom">
                       <small class="form-text text-danger"><?php echo isset($arrayErreur['Prenom'])? $arrayErreur['Prenom']:'';?></small>
                     </div>
                     <div class="col">
                       <input type="text" name="nom" class="form-control"style="background-color: #eee;" placeholder="Nom">
                       <small class="form-text text-danger"><?php echo isset($arrayErreur['nom'])? $arrayErreur['nom']:'';?></small>
                     </div>
               </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1"></label>
                         <input type="texte" name="login" class="form-control" style="background-color: #eee;" aria-describedby="emailHelp" placeholder="Nom d'utilisateur / Email">
                         <small id="emailHelp" class="form-text text-danger"><?php echo isset($arrayErreur['login'])? $arrayErreur['login']:'';?></small>
                     </div>
                 <div class="row mb-3">
                 <div class="col">
                     <label for="exampleInputPassword"></label>
                     <input type="password" name="password" class="form-control"  style="background-color: #eee;" placeholder="Mot de passe">
                     <small id="passwordlHelp" class="form-text text-danger"><?php echo isset($arrayErreur['password'])? $arrayErreur['password']:'';?></small>
                 </div>
                 <div class="col">
                     <label for="exampleInputPassword1"></label>
                     <input type="password" name="password1" class="form-control"  style="background-color: #eee;" placeholder="Confirmer mot de passe">
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
                            <button type="submit" class="btn w-100 p-2" name="btn_submit" style="background-color: #FE1B00;">Je m'inscris</button>
                          
                  </div>
                     <div class="pieds"><p class="texte"> Vous avez deja un compte?</p>
                     
                     <a class="lien" href="<?=WEB_ROUTE.'?controlleurs=security&views=connexion'?>">Je me connecte</a>
                     </div>
             </form>




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
