<?php
 //require_once('controlleurs/security.php');

 //URL = http://localhost:8000/URI

// URI= controlleur= nom_controlleur&views=nom_page

if (isset ($_REQUEST['controlleurs'])){

    if ($_REQUEST['controlleurs']=='security') {
        
         require_once(ROUTE_DIR.'controlleurs/security.php');
    }elseif ($_REQUEST['controlleurs']=='admin'){
         require_once (ROUTE_DIR.'controlleurs/admin.php');
    }elseif ($_REQUEST['controlleurs']=='joueur'){
     
         require_once (ROUTE_DIR.'controlleurs/joueur.php');
    }else {
         require_once(ROUTE_DIR.'views/security/connexion.html.php');
    }

}else{
     require_once (ROUTE_DIR.'views/security/connexion.html.php');
}


?>