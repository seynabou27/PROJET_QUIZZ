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
            }elseif($_GET['views'] == 'confirmation') {
                require(ROUTE_DIR.'views/admin/confirmation.html.php');
            }elseif($_GET['views']=='edit_question') {
                $_SESSION['id']=$_GET['id'];
                  $id=$_SESSION['id'];
                  $user = find_user_by_id($id);
                   $_SESSION['nbr_reponse']=$user['nbr_reponse'];
                   require_once(ROUTE_DIR.'views/admin/creer_question.html.php');
                }elseif ($_GET['views']=='suppression') {
                 $_SESSION['id']=$_GET['id'];
                 $id=$_SESSION['id'];
                   $user=find_user_by_id($id);
                 require_once(ROUTE_DIR.'views/admin/confirmation.html.php');
                }elseif ($_GET['views']=='confirmation') {
                   $_SESSION['id']=$_GET['id'];
                   $id = $_SESSION['id'];
                   $user=find_user_by_id($id);
                    $trouve = supprimer($id);
                    header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question');
                    //exit();
            }
           
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
   /*}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
        if (isset($_POST['action'])) {
            if ($_POST['action']=='creer_question') {
                if (isset($_POST['btn_submit'])) {
                      question($_POST);
                    header('location:'.WEB_ROUTE.'?controlleurs=admin&views=creer_question');
                     exit();
                }elseif (isset($_POST['ajout'])) {
                  $nbrpoint=$_POST['nbr_reponse'];
                  $_SESSION['nbr_reponse']= $nbrpoint;
                 $type=$_POST['type'];
                 $_SESSION['type']=$type;
                 $quest=$_POST['question'];
                 
                 $_SESSION['question']=$quest;
                 $nbrpoint=$_POST['point'];
                 $_SESSION['point']=$nbrpoint;
                 $nombrereponse=$_POST['nbr_response'];
                 $_SESSION['nbr_reponse']=$nombrereponse;
                  header('location:'.WEB_ROUTE.'?controlleurs=admin&views=creer_question');
                  exit();
                }
                   
            }elseif ($_POST['action']=='edit_question') {
             
                  if (isset($_POST['btn_submit'])) {
                        question($_POST);
                        header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question'); 
                        exit();               
                  }elseif (isset($_POST['ajout'])) {
                    $nbrpoint=$_POST['nbr_reponse'];
                    $_SESSION['nbr_reponse']= $nbrpoint;
                    $type=$_POST['type'];
                    $_SESSION['type']=$type;
                    $quest=$_POST['question'];
                    $_SESSION['question']=$quest;
                    $nbr_pts=$_POST['point'];
                    $_SESSION['point']=$nbrpoint;
                    $nombrereponse = $_POST['nbr_reponse'];
                    $_SESSION['nbr_reponse'] = $nombrereponse;
                    $value=$_SESSION['id'];
      
                    header('location:'.WEB_ROUTE.'?controlleurs=admin&views=edit_question&id='.$value);
                    exit();
                  }
                question($_POST);
                header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question'); 
        
    }
     
    }
}*/
//forme iniatiale    
    }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
       
        if (isset($_POST['action'])) {
            if ($_POST['action']== 'creer_question') {
                
                
                if (isset($_POST['btn-submit'])) {
                    
                    //die('test');
                    question($_POST);
                    //header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question');
                    //exit(); 
                }elseif (isset($_POST['ajout'])) {
                    $_SESSION['choice']=$_POST['choice'];
                    $_SESSION['nbr_reponse']=$_POST['nbr_reponse'];
                    $_SESSION['question']=$_POST['question'];
                    $_SESSION['nbr_pts']=$_POST['nbr_pts'];
                    header('location:'.WEB_ROUTE.'?controlleurs=admin&views=creer_question');
                    
               }
            }elseif ($_POST['action']=='edit_question') {
             
                if (isset($_POST['btn_submit'])) {
                      question($_POST);
                      //header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question'); 
                      //exit();               
                }elseif (isset($_POST['ajout'])) {
                  $nbrpoint=$_POST['nbr_reponse'];
                  $_SESSION['nbr_reponse']= $nbrpoint;
                  $type=$_POST['type'];
                  $_SESSION['type']=$type;
                  $quest=$_POST['question'];
                  $_SESSION['question']=$quest;
                  $nbr_pts=$_POST['point'];
                  $_SESSION['point']=$nbrpoint;
                  $nombrereponse = $_POST['nbr_reponse'];
                  $_SESSION['nbr_reponse'] = $nombrereponse;
                  $value=$_SESSION['id'];
    
                  header('location:'.WEB_ROUTE.'?controlleurs=admin&views=edit_question&id='.$value);
                  
                }
            }
        }
    }

    //require_once(ROUTE_DIR.'views/inc/menu.html.php');
    //require_once(ROUTE_DIR.'views/security/page_admin.html.php');
 
function question(array  $data):void{
    extract($data);
    $arrayErreur=array();
    //var_dump($data);
    //die();
    valid_input ((string)$question,'question', $arrayErreur);
   valid_point ($nbr_pts, 'nbr_pts',$arrayErreur );
   valid_nbr_reponse ($nbr_reponse, 'nbr_reponse',$arrayErreur );
   //validation_typereponse ($typereponse, 'typereponse',$arrayErreur );


   if (form_valid($arrayErreur)){
    if (isset($data['id'])) {
       if (est_admin()) {
        modif_question($data);
        header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question');
       }
    }
    
    if (empty($data['id'])) {
       
        add_question($data);
     header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question');
    
    }
     
    
}else {
    $_SESSION['arrayErreur']=$arrayErreur;
    header('location:'.WEB_ROUTE.'?controlleurs=admin&views=creer_question');
}

}
         

            




?>