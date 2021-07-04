<?php 


if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&views=connexion');
    
     if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['views'])) {

            if ($_GET['views'] == 'liste_question') {
                require(ROUTE_DIR.'views/admin/liste_question.html.php');
            }elseif ($_GET['views'] == 'creer_question') {
                require(ROUTE_DIR.'views/admin/creer_question.html.php');
            }elseif ($_GET['views'] == 'creer_admin') {
                require(ROUTE_DIR.'views/admin/creer_admin.html.php'); 
            }elseif ($_GET['views'] == 'liste_admin') {
                find_all_admin();
                require(ROUTE_DIR.'views/admin/liste_admin.html.php'); 
            }elseif ($_GET['views'] == 'tableau_bord') {
                require(ROUTE_DIR.'views/admin/tableau_bord.html.php'); 
            }elseif($_GET['views'] == 'liste_joueur') {
                require(ROUTE_DIR.'views/admin/liste_joueur.html.php');
            }
           
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }

    //require_once(ROUTE_DIR.'views/inc/menu.html.php');
    //require_once(ROUTE_DIR.'views/security/page_admin.html.php');

?>