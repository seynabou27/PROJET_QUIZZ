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

function add_user(array $user){
    // 1 lire contenu du fichier
    $json = file_get_contents(FILE_USERS);
    
    // 2 convertir contenu en tableau
    $arrayuser = json_decode($json, true);
    // 3 ajouter new user
    $arrayuser[] = $user;
    // convertir le tableau en json
    $json =json_encode($arrayuser);
    file_put_contents(FILE_USERS, $json); 
}
function find_all_users(){
    $json = file_get_contents(FILE_USERS);

    // 2 convertir le json en tableau
    return json_decode($json ,true);
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
    $arrayuser = find_all_users();
    foreach ($arrayuser as $key => $user_old) {
        if ($user_old['id']==$user_new['id']) {
            $arrayuser[$key] = $user_new;
        }
    }
    ajout_fichier($arrayuser);
}
function ajout_fichier(array $array){
    //convertir le tableau en json
    $json = json_encode($array);
    file_get_contents(FILE_USERS, $json);
}
function find_user_by_id(string $id): array {
    $arrayuser = find_all_users();
    foreach ($arrayuser as $user) {
        if ($user['id']==$id) {
            return  $user;
        }
        return [];
    }
}
function supprimer(string $id):bool{
    $arrayuser = find_all_users();
    $user = array();
    return true;
}




?>