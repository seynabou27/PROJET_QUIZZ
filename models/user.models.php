<?php

function find_login_password(string $login, string $password){
    // 1 lire le contenu du fichier
    $json = file_get_contents(ROUTE_DIR.'data/user.data.json');

    // 2 convertir le json en tableau
    $arrayuser = json_decode($json ,true);
    foreach ($arrayuser as $user) {
        if($user['login']==$login && $user['password']==$password){

        return $user;
    }
    }
    return[];
}
function find_question_id( $id):array{
    $json =file_get_contents(FILE_QUESTION);
    $arrayUser = json_decode($json , true);
    foreach($arrayUser as $user ){
      if ($user ['id'] == $id){
        return $user;
      }
    }
    return[];
  }
function add_user(array $user){
    // 1 lire contenu du fichier
    $json = file_get_contents(FILE_USERS);
    $user['id']= uniqid();
    // 2 convertir contenu en tableau
    $arrayuser = json_decode($json, true);
    // 3 ajouter new user
    $arrayuser[] = $user;
    // convertir le tableau en json
    $json =json_encode($arrayuser);
    file_put_contents(FILE_USERS, $json); 
}

function add_question(array $user){
    // 1 lire contenu du fichier
    $json = file_get_contents(FILE_QUESTION);
    $user['id']= uniqid();
    // 2 convertir contenu en tableau
    $arrayuser = json_decode($json, true);
    // 3 ajouter new user
    $arrayuser[] = $user;
    // convertir le tableau en json
    $json =json_encode($arrayuser);
    file_put_contents(FILE_QUESTION, $json); 
}

function find_all_users(){
    $json = file_get_contents(FILE_USERS);

    // 2 convertir le json en tableau
    return json_decode($json ,true);
}

function find_all_admin(){
   $arrayuser =find_all_users();
    foreach ($arrayuser as $user){
        if ($user['role']="ROLE_ADMIN"){
            $useradmin[] =$user;
            
        }
       
    }
    return $useradmin;

    
}
function login_exist(string $login ,$arrayuser):bool{
    $arrayuser = find_all_users();
    foreach ($arrayuser as $user) {
        if ($user['login']==$login){
            return true;
        }
    }
    return false;
}
function modif_user(array $user_new){
    $json = file_get_contents(FILE_USERS);
    $arrayuser = json_decode($json ,true);
    foreach ($arrayuser as $key => $user_old) {
        if ($user_old['id']==$user_new['id']) {
            $arrayuser[$key] = $user_new;
        }
    }
    $json = json_encode($arrayuser);
    file_put_contents(FILE_USERS, $json);
}

function ajout_fichier(array $array){
    //convertir le tableau en json
    $json = json_encode($array);
    file_put_contents(FILE_QUESTION, $json);
}
function find_user_by_id(string $id): array {
    $arrayuser = find_all_users();
    foreach ($arrayuser as $user) {
        if ($user['id']==$id) {
            return  $user;
        }
    }
    return [];
}
function supprimer_ques(string  $id):bool{
    $json =file_get_contents(FILE_QUESTION);
    // 2 convertir le json en tableau
    $arrayQuestion = json_decode($json,true); 
    $tab = [];
    $ok = false;
      foreach( $arrayQuestion as $question){
          if ($question['id'] == $id) {
            $ok = true;
          }else{
            $tab [] = $question;
          }
      }
      if($ok){
        $json = json_encode($tab);
        file_put_contents(FILE_QUESTION, $json);
      }
      return $ok;
}
function modif_question(array $user_bien){
    $json = file_get_contents(FILE_QUESTION);
    $arrayuser = json_decode($json ,true);
    foreach ($arrayuser as $key => $user_vrai) {
        if ($user_vrai['id']==$user_bien['id']) {
            $arrayuser[$key] = $user_bien;
        }
    }
    $json = json_encode($arrayuser);
    file_put_contents(FILE_QUESTION, $json);
}




?>