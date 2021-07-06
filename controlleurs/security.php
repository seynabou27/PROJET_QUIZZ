<?php
            
        if(($_SERVER['REQUEST_METHOD']=='GET')){
            if(isset($_GET['views'])){
                if ($_GET['views']=='connexion'){
                     require_once(ROUTE_DIR.'views/security/connexion.html.php');
                }elseif ($_GET['views']=='inscription'){
                    require_once(ROUTE_DIR.'views/security/inscription.html.php');
                }elseif ($_GET['views']=='deconnexion'){
                    deconnexion();
                    require_once(ROUTE_DIR.'views/security/connexion.html.php');
                

                }elseif($_GET['views']=='edit'){
                    $_SESSION['id'] =$_GET['id'];
                    $id = $_SESSION['id'];
                    $user = find_user_by_id($id);
                    require_once(ROUTE_DIR. 'views/admin/creer_admin.html.php');
                }
            }else{
              require_once(ROUTE_DIR.'views/security/connexion.html.php');

            }
        }elseif($_SERVER['REQUEST_METHOD'] =='POST'){
            if (isset($_POST['action'])) {
                if ($_POST['action']== 'connexion') {
            
                    connexion($_POST['login'],$_POST['password']);
                }elseif ($_POST['action'] == 'inscription'){
                    unset($_POST['controller']);
                    unset($_POST['action']);
                    //unset($password['controller']);
                    
                    inscription($_POST);

                    //header('location:'.WEB_ROUTE.'?controlleurs=admin&views=connexion');

                }elseif ($_POST['action']== 'edit'){
                    inscription($_POST);
                    header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_admin');
                }

            }
            
            
        }    
 
function connexion(string $login, string $password): void{
    $arrayErreur=array();
    validation_login ($login,'login', $arrayErreur);
    validation_password ($password, 'password',$arrayErreur );
    
    if(form_valid($arrayErreur)){
        //appel du model
        $user= find_login_password($login, $password);
    if (count($user)==0){
        $arrayErreur['erreurConnexion']="login ou password incorrect";
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
    }else{
        $_SESSION['userConnect']=$user;
        if($user['role']=='ROLE_ADMIN'){
            header('location:'.WEB_ROUTE.'?controlleurs=admin&views=liste_question');

        }elseif($user['role']=='ROLE_JOUEUR'){
           
            header('location:'.WEB_ROUTE.'?controlleurs=joueur&views=jeu');
            
        }
    }
   
    
    
    }else{
        $_SESSION['arrayErreur']=$arrayErreur;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
        
    }
   

}


function inscription(array $data):void{
    extract($data);
    $arrayErreur=array();
    validation_login ($login,'login', $arrayErreur);
    validation_password ($password, 'password',$arrayErreur );
        if ($password!= $password1){
            $arrayErreur['password1']='Les deux champs doivent etre identique';

        }
            validation_Prenom($Prenom, 'Prenom',$arrayErreur);
            validation_nom($nom, 'nom',$arrayErreur);
            /*validation_dat($datenaiss, 'datenaiss',$arrayErreur);*/
    

            
        if(form_valid($arrayErreur)){
            unset ($data['password1']); 
            $data ['role'] = est_admin()? "ROLE_ADMIN": "ROLE_JOUEUR"  ;
            if (isset($data['id']) && $data['id'] != ""){
                
                

                if (est_admin()) {
                   
                    modif_user($data);
                    header("location:" .WEB_ROUTE.'?controlleurs=admin&views=liste_admin');
    
                }
            }else{
                
                add_user($data);
                if (est_admin()) {
                    header("location:" .WEB_ROUTE.'?controlleurs=admin&views=liste_admin');
                    
                }else
           
                header("location:" .WEB_ROUTE.'?controlleurs=security&views=connexion');
            }
    
           
        
            

            
            

            }else{
                if (est_admin()) {
                    $_SESSION['arrayErreur'] = $arrayErreur;
                    header("location:" .WEB_ROUTE.'?controlleurs=admin&views=creer_admin');
                
      
                }else{
                    $_SESSION['arrayErreur'] = $arrayErreur;
                    header("location:" .WEB_ROUTE.'?controlleurs=security&views=inscription');
                }
                }
                
            
            
}




function deconnexion():void{

    unset ($_SESSION['userConnect']);
    header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
    
}

?>