<?php
            
        if(($_SERVER['REQUEST_METHOD']=='GET')){
            if(isset($_GET['views'])){
                if ($_GET['views']=='connexion'){
                     require_once(ROUTE_DIR.'views/security/connexion.html.php');
                }elseif ($_GET['views']=='inscription'){
                    require_once(ROUTE_DIR.'views/security/inscription.html.php');
                }elseif ($_GET['views']=='deconnexion'){
                    //deconnexion();
                    //require_once(ROUTE_DIR.'views/security/connexion.html.php');
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
                    unset($password['controller']);
                    inscription($_POST);

                }

            }
          }

          function connexion(string $login, string $password): void{
            $arrayErreur=array();
            validation_login ($login,'login', $arrayErreur);
            validation_password ($password, 'password',$arrayErreur );
            
            
            
            
           
        
        }
        
        function inscription(array $data):void{
            extract($data);
            $arrayErreur=array();
            validation_login ($login,'login', $arrayErreur);
            validation_password ($password, 'password',$arrayErreur );
                if ($password!= $password1){
                    $arrayErreur['password1']='Les deux champs doivent etre identique';
        
                }
                    validation_prenom($prenom, 'prenom',$arrayErreur);
                    validation_noms($noms, 'noms',$arrayErreur);
                    validation_dat($datenaiss, 'datenaiss',$arrayErreur);
            
        
                    
                if(form_valid($arrayErreur)){
                    unset ($data['password1']); 
                    $data ['role'] = est_admin()? "ROLE_ADMIN" : "ROLE_JOUEUR" ;
                    add_user($data);
                    if (est_admin()){
                        $data['role'] = "ROLE_ADMIN";
                    }else{
                        $data['role'] = "ROLE_JOUEUR";
                    }
                     header("location:" .WEB_ROUTE.'?controlleurs=security&views=connexion');
        
                    }else{
                        $_SESSION['arrayErreur'] = $arrayErreur;
                             header("location:" .WEB_ROUTE.'?controlleurs=security&views=inscription');
                    }
        }
        
        function deconnexion():void{
        
            unset ($_SESSION['userConnect']);
            header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
            
        }
        
        
        ?>