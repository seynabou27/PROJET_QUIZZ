<?php
//fonction de validation
function est_vide(string $valeur):bool{
    return empty($valeur);
}

function est_entier($valeur):bool{
    $entier = (int) $valeur;
    return is_int($entier);

}

function est_numerique($valeur):bool{
    $entier = (int) $valeur;
    return is_int($entier);

}
function form_valid($arrayErreur):bool{
    if (count($arrayErreur)==0){
        return true;

    }

    return false;

}



function est_email($valeur):bool{
    if(filter_var($valeur,FILTER_VALIDATE_EMAIL)){
        return true;
    
    }else{
        return false;
    }
}


function verif_taille(string $valeur, int $min=6 , int $max=10):bool{
    
            return strlen($valeur) > $min || strlen($valeur) < $max;
}
    function validation_login(string $valeur , string $key, array &$arrayErreur):void{
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire';
        }elseif (!est_email($valeur)) {
            $arrayErreur[$key]= 'saisir un email valide (exemple123@gmail.com)';
        }
    }

    function validation_password(string $valeur, string $key,array &$arrayErreur ,int $min=6 , int $max=10):void{
        if (!verif_taille($valeur)) {
            $arrayErreur[$key]= 'la taille est compris entre '.$min  .$max;
        }elseif (est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire'; 
        }
      
    }

    function validation_prenom(string $valeur , string $key,array &$arrayErreur){
        if(est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire'; 
        }
    }

    function validation_noms(string $valeur , string $key,array &$arrayErreur){
        if(est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire'; 
        }
    }

    function validation_dat(string $valeur , string $key,array &$arrayErreur){
        if(est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire'; 
        }
    }


    
?>

