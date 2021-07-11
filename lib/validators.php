<?php
//fonction de validation
function est_vide( $valeur):bool{
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

    function validation_Prenom(string $valeur , string $key,array &$arrayErreur){
        if(est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire'; 
        }
    }

    function validation_nom(string $valeur , string $key,array &$arrayErreur){
        if(est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire'; 
        }
    }

    /*function validation_dat(string $valeur , string $key,array &$arrayErreur){
        if(est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire'; 
        }
    }*/

   
    
    

    /*unction validation_nombrereponse(string $valeur , string $key,array &$arrayErreur){
       if (est_vide($valeur)) {
           $arrayErreur[$key]= 'Le champs est obligatoire';
       }elseif ($valeur<=0){
        $arrayErreur[$key]= 'Saisir un nombre positif';

       }
    }

    function validation_typereponse( $valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire';
        }
    }
    function valid_input( $valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]='Le champ est obligatoire';
        }
    }

    function validation_nbrpoint( $valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire';
        }elseif($valeur<=0){
            $arrayErreur[$key]= 'Saisir un nombre positif';
        }
    }

    function validation_nombrereponse($valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'Le champs est obligatoire';
        }elseif ($valeur<=0){
         $arrayErreur[$key]= 'Saisir un nombre positif';
 
        }
     }*/

     function valid_input($valeur,string $key,array &$arrayErreur){
        if (empty($valeur)) {
            $arrayErreur[$key] = "Ce champ est obligatoire ";
        }
    }
    
    function valid_point($valeur,string $key,array &$arrayErreur){
        if (empty($valeur)) {
            $arrayErreur[$key] = "Ce champ est obligatoire ";
        }elseif ($valeur<=0) {
            $arrayErreur[$key] = "Veillez saisir un nombre positif";
        }
    }
    
    
    function valid_nbr_reponse($valeur,string $key,array &$arrayErreur){
        if (empty($valeur)) {
            $arrayErreur[$key] = "Ce champ est obligatoire ";
        }elseif ($valeur<=0) {
            $arrayErreur[$key] = "Veillez saisir un nombre positif";
        }
    }
    function validation_typereponse($valeur , string $key,array &$arrayErreur){
        if (est_vide($valeur)) {
            $arrayErreur[$key]= 'le champs est obligatoire';
        }
    }

    function nombrePageTotal($array, $nombreElement): int {
        $nombrePage = 0;
        $longueurArray = count($array);
        if ($longueurArray % $nombreElement == 0) {
            $nombrePage = $longueurArray / $nombreElement;
        } else {
            $nombrePage = ($longueurArray / $nombreElement) + 1;
        }
        return $nombrePage;
    }

function get_element_to_display($array, int $page, int $nombreElement): array {
    $arrayElement = [];
    $indiceDepart = ($page*$nombreElement) - $nombreElement;
    $limitElement = $page * $nombreElement;
    for ($i = $indiceDepart; $i < $limitElement; $i++) {
        if ($i >= count($array)) {
            return $arrayElement;
        } else {
            $arrayElement[] = $array[$i];
        }
    }
    return $arrayElement;
}
?>



