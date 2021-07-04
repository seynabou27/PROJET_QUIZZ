<?php 

if (!est_joueur()) header("location:".WEB_ROUTE.'?controlleurs=security&views=connexion');

     if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['views'])) {
            if ($_GET['views'] == 'jeu') {
            
                require(ROUTE_DIR.'views/joueur/jeu.html.php');
            }elseif($_GET['views'] == 'liste_joueur') {
                require(ROUTE_DIR.'views/admin/liste_joueur.html.php');
            }
           
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }
    //require_once(ROUTE_DIR.'views/inc/menu.html.php');

?>