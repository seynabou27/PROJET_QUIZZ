<!doctype html>
<html lang="en">
  <head>
    <title>Inscription</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body >
    <!--<div style="width: 1000; height: 1000;background-image: url('../../public/img/logo.png')"></div>
    <img src="/public/img/logo.png" alt="" width="1000" height="1000">-->
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
    <form method="post" action="#"  enctype="multipart/form-data"  style="margin-top: 5%;">
    <h1 class="texte">Inscription</h1>

    <div class="row mb-3">
                    <div class="col">
                      <input type="text"  name="Prenom" class="form-control" style="background-color: #eee;" placeholder="Prénom">
                    </div>
                    <div class="col">
                      <input type="text" name="nom" class="form-control"style="background-color: #eee;" placeholder="Nom">
                    </div>
    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="texte" name="login" class="form-control" style="background-color: #eee;" aria-describedby="emailHelp" placeholder="Nom d'utilisateur / Email">
                        <small id="emailHelp" class="form-text text-danger"></small>
                    </div>

     <div class="row mb-3">
                <div class="col">
                    <label for="exampleInputPassword"></label>
                    <input type="password" name="password" class="form-control"  style="background-color: #eee;" placeholder="Mot de passe">
                    <small id="passwordlHelp" class="form-text text-danger"></small>
                </div>
                <div class="col">
                    <label for="exampleInputPassword1"></label>
                    <input type="password" name="password1" class="form-control"  style="background-color: #eee;" placeholder="Confirmer mot de passe">
                    <small id="passwordlHelp" class="form-text text-danger"></small>  
                </div>                 
    </div>
    <!--<div class="mb-3">
     
    </div>-->

                    
                <div class="mb-3">
                    
                    <button type="button" name="btn-submit" class="form-control w-75 p-3" style="background-color: #eee;"  >Choisir une photo de profil</button>
                        <small id="" class="form-text text-danger"></small>
                        <label for="file" >
                            <input id="file" type="file" name="file" class="hide-upload" required/>
                            <!--<i class="fa fa-plus image-plus"></i>
                            <i class="fa fa-lock"></i>-->

    
                        </label>
                          <img class="image" src="<?=WEB_ROUTE."img/avatar.png"?>" alt="avatar">
                </div>
                    <div class="form-groupe">
                        <button type="button" name="btn-submit" class="btn form-control">Je me connecte</button>
                    </div>
                    <div class="pieds"><p class="texte"> Vous avez deja un compte?</p>
                    
                    <a class="lien" href="<?=WEB_ROUTE.'?controlleurs=security&views=connexion'?>">Je me connecte</a>
                    </div>

        
       
    
        
        </form>
        </div>
        </div>
        </div>
    </div>

<style>
 body {
    height:100%;
    
}
.container {
    min-height: 100%;
    height: 100%;
    
}
img {
    margin-left:38%;
    margin-top:35%;


}

h1{
text-align: center;
color: #000;
margin-bottom: 12%;
}
h3{
    text-align: center;
    margin-top: 3%;
    font-size: 30px;
}
 
.left {
background-color: black;
height: 625px;



}
.hide-upload{
  margin-top: -1%;
}
 .mx-auto{
   color: white;


 }
 
.right {
background-color: white;
height: 625px;



}
button:after{
    color: #FE1B00;

}
a:hover{
    color: #FE1B00;
}
ul li a {
    text-decoration: none;
}
.btn{
  background-color: #FE1B00;
  color: #eee;
 
  

}
.lien{
  color: #FE1B00;
  margin-left: 42% ;
  

  
}
.image{
  margin-top: -6%;
}
.texte{
  color: black;
  text-align: center;
  padding: 1%;
  
}
i {
  background-color: white;
  border-radius: 50%;
  border: 1x solid grey;
  padding: 10px;
}



  
  


</style>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!--
<style>
  .image {
    background-image:url(//ROUTE_DIR."public/img/phone.jpg");
  }
  </style>-->

