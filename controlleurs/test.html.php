<tbody>
    <?php //foreach ($arrayuser as $key => $value): ?>
         <?php //if  ($data ['role'] = est_joueur())  : ?>
     <tr>
         <td>
           
         </td>
        
         <td>200pts</td>
     </tr>
     <?php //endif ?>
     <?php //endforeach ?>
 </tbody>

 <?php 


/*require_once(ROUTE_DIR.'views/inc/header.html.php');
require_once(ROUTE_DIR.'views/inc/menu1.html.php');
require_once(ROUTE_DIR.'views/inc/barre.html.php');

if (isset($_SESSION['arrayError'])) {
  $arrayError=$_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}

$type=$_SESSION['type'];
$quest=$_SESSION['question'];
$nbrP=$_SESSION['point'];
$nbrR=$_SESSION['nbrres'];


?>



<div class="container">
    <div class="row p-0">
        <div class="col-md-4">
            <?php require_once(ROUTE_DIR.'views/inc/menu.html.php')?>
        </div>
        <div class="col-md-8 ">
        <div class="container border border-light rounded">
        <div>
           <p class="text-center"><?=isset($question['id'])?'MODIFIER VOTRE QUESTION':'PARAMETRER VOTRE QUESTION' ?></p>
       </div>
       <div class="container border border-danger cont">
       <form  class="form"  action="<?=WEB_ROUTE?>" method="POST">
       <input type="hidden" name="controlleurs" value="admin">
        <input type="hidden" name="action" value="<?= isset($question['id'])?'modification':'creer.question';?>"/>
        <input type="hidden" name="id" value="<?=isset($question['id']) ? $question['id']:"" ;?>"/>

    <div class="form-group">
        <div class="d-flex">
        <label for="" class="mt-4">Questions</label>
        <input type="text" class="form-control inputs mt-4" name="question" id="" aria-describedby="helpId" placeholder="" 
        value="<?= isset($quest)? $quest:(isset($question['id']) ? $question['question']:"") ;?>">
       </div>
        <small id="helpId" class="form-text text-danger erreur">
          <?php echo isset($arrayError['question']) ? $arrayError['question']: '';?>
        </small>
      </div>
      <div class="form-group ">
        <div class="d-flex">
        <label for="">Nbr de Point</label>
        <input type="number" class="form-control input" name="point" id="" aria-describedby="helpId" placeholder="" 
        value="<?= isset($nbrP)? $nbrP : (isset($question['id']) ? $question['point']:'') ;?>">
        </div>
        <small id="helpId" class="form-text text-danger erreur">
              <?php echo isset($arrayError['point']) ? $arrayError['point']: '';?>
        </small>
      </div>
      <div class="form-group ">
        <div class="d-flex">
        <label for="">Type de Reponse</label>
        <select class="form-control inpute" name="type" id="" >
         <option value="erreur" >Donner le type de la reponse</option>
          <option value="text" <?=isset($type)? $type:(isset($question['type']) && $question['type']=='text')? 'selected' :'';?> >Text</option>
          <option value="radio" <?= isset($type)? $type : (isset($question['type'])&& $question['type']=='radio')? 'selected' :'';?>>Simple</option>
          <option value="checkbox" <?= isset($type)? $type :isset($question['type']) && $question['type']=='checkbox'? 'selected' :'';?>>Choix multiple</option>
        </select>
        </div>
        <small id="helpId" class="form-text text-danger erreur">
              <?php echo isset($arrayError['point']) ? $arrayError['point']: '';?>
        </small>
      </div>
    
      <div class="form-group">
        <div class="d-flex">
      <label for="">Nbr de Reponse</label>
        <input type="number" class="form-control inputes" name="nbrres" id="" aria-describedby="helpId" placeholder="" value="<?= isset($nbrR)? $nbrR :(isset($question['id']) ? $question['nbrres']:"" );?>">
         <button type="submit"  name="plus" class="btn btn-danger plus">+</button> 
         </div>
         <small id="helpId" class="form-text text-danger erreur">
              <?php echo isset($arrayError['nbrres']) ? $arrayError['nbrres']: '';?>
        </small> 
        </div>
        
        <?php $inputPlus=$_SESSION['nbrres']; ?>
        <?php for($i=0;$i<$inputPlus;$i++): ?>
          <div class="form-group d-flex">
          <label for="">Reponse<?=$i?></label>
            <input type="text" class="form-control inpu" name="reponse[]" id="" aria-describedby="helpId" placeholder="" value="<?= isset($question['reponse'][$i])? $question['reponse'][$i] :''?>">
            <small id="helpId" class="form-text text-danger">
            </small>
            <?php if($type=='radio' || $question['type']=='radio') :?>
              <input type="radio" class="form-control ml-4"  style="width: 3%;" name="bonnereponse" id="" aria-describedby="helpId" placeholder="" value="<?= isset($question['radio'])? $question['radio'] :'reponse'.$i;?>"  <?php echo isset($question['bonnereponse']) && $question['bonnereponse']=='reponse'.$i? 'checked': '';?>> 
              <?php  elseif($type=='checkbox' || $question['type']=='checkbox'):?>
                <input type="checkbox" class="form-control ml-4" style="width: 3%;" name="bonnereponses<?=$i?>" id="" aria-describedby="helpId" placeholder="" value="<?= isset($question['checkbox'])? $question['checkbox'] :'reponse'.$i;?>"<?php echo isset($question['bonnereponses'.$i]) ? 'checked': '';?>> 
            <?php endif ?>
        </div>
          <?php endfor ?>



        <?php
          if (isset($_SESSION['nbrres'])) {
            unset($_SESSION['nbrres']);
          }

          if (isset($_SESSION['type'])) {
            unset($_SESSION['type']);
          }

          if (isset($_SESSION['question'])) {
            unset($_SESSION['question']);
          }

          if (isset($_SESSION['point'])) {
            unset($_SESSION['point']);
          }

          if (isset($_SESSION['nbrres'])) {
            unset($_SESSION['nbrres']);
          }

          ?>
        
       
      <button type="submit" class="btn btn-danger enregistrer"  name="btn_submit"><?=isset($question['id'])?'Modifier':'Enregistrer' ?></button>
      </form>
        </div>
        
   </div>
            
        </div>
    </div>
</div>

<?php require_once(ROUTE_DIR.'views/inc/footer.html.php')?>

<style>
    .row{
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: 0;
        margin-left: 0;
    }
    .container {
    margin-top: 1%;
    margin-left: 0%;
}

.bg-primary{
height: 100px;
}

.bg-success{
    height: 50px;
}

.bg-warning{
    height: 506px;
    width: 848px;
}
.cont{
    margin-left: -1%;
}

.images{

     margin-top: -21%;
        width: 25px;
        height: 25px;
      margin-left: 65%;
}

.supprimer{
        margin-left: 50%;
        width: 25px;
        height: 25px;
        margin-top: -6%;
}

.radio{
  width: 25px;
  height: 25px;
  margin-left: 56%;
  margin-top: -9%;
}



.enregistrer{
  margin-top: 3%;
  margin-left: 65%;
  padding-top: 2%;
}

.input{
  margin-left: 4%;
}

.inputs{
  margin-left: 10%;
}

.inpute{
  margin-left: 4%;
  margin-right: 19%;
}

.inputes{
  margin-left: 6%;
}


.inpu{
  margin-left: 12%;
}

.plus{
  margin-left: 5%;
  height:40px ;
}

.erreur{
  margin-left: 26%;
 
}


.rest{
  margin-left: 24%;
}


.inpu{
  margin-left: 14%;
}

.plus{
  margin-left: 5%;
}


.reste{
  margin-left: 80%;
  margin-top: -6%;
}

</style>

<?php 
 if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&view=connexion');

 if ($_SERVER['REQUEST_METHOD']=='GET') {
     if (isset($_GET['view'])) {
        if ($_GET['view']=='liste.question') {
          extract(pagination(find_all_questions(),$_GET['page']));
            require(ROUTE_DIR.'views/admin/liste.question.html.php');
           }elseif ($_GET['view']=='creer.question') {
            require(ROUTE_DIR.'views/admin/creer.question.html.php');
           }elseif ($_GET['view']=='liste.admin') {
           extract(pagination(find_all_admins(),$_GET['page']));
            require(ROUTE_DIR.'views/admin/liste.admin.html.php');
           }elseif ($_GET['view']=='liste.joueur') {
            extract(pagination(find_all_joueurs(),$_GET['page']));
            require(ROUTE_DIR.'views/admin/liste.joueur.html.php');
           }elseif ($_GET['view']=='tableau.bord') {
            require(ROUTE_DIR.'views/admin/tableau.bord.html.php');
           }elseif($_GET['view']=='modification') {
            $_SESSION['id']=$_GET['id'];
              $id=$_SESSION['id'];
               $question=recuperer_id($id);
               $_SESSION['nbrres']=$question['nbrres'];

             
               require_once(ROUTE_DIR.'views/admin/creer.question.html.php');
           }elseif ($_GET['view']=='supprimer') {
            $_SESSION['id']=$_GET['id'];
            $id=$_SESSION['id'];
              $question=recuperer_id($id);
            require_once(ROUTE_DIR.'views/admin/confirmation.html.php');
           }elseif ($_GET['view']=='confirme') {
              $_SESSION['id']=$_GET['id'];
              $id = $_SESSION['id'];
              $question=recuperer_id($id);
               $ok = supprimer_question($id);
               header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
               exit();
           }
     }else {
         require_once(ROUTE_DIR.'views/security/connexion.html.php');
     }
 }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action']=='creer.question') {
            if (isset($_POST['btn_submit'])) {
                  question($_POST);
                header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer.question');
                 exit();
            }elseif (isset($_POST['plus'])) {
              $nbr_pts=$_POST['nbrres'];
              $_SESSION['nbrres']= $nbr_pts;
             $type=$_POST['type'];
             $_SESSION['type']=$type;
             $quest=$_POST['question'];
             
             $_SESSION['question']=$quest;
             $nbrP=$_POST['point'];
             $_SESSION['point']=$nbrP;
             $nbrR=$_POST['nbrres'];
             $_SESSION['nbrres']=$nbrR;
              header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer.question');
              exit();
            }
               
      }elseif ($_POST['action']=='modification') {
       
            if (isset($_POST['btn_submit'])) {
                  question($_POST);
                  header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question'); 
                  exit();               
            }elseif (isset($_POST['plus'])) {
              $nbr_pts=$_POST['nbrres'];
              $_SESSION['nbrres']= $nbr_pts;
              $type=$_POST['type'];
              $_SESSION['type']=$type;
              $quest=$_POST['question'];
              $_SESSION['question']=$quest;
              $nbrP=$_POST['point'];
              $_SESSION['point']=$nbrP;
              $nbrR = $_POST['nbrres'];
              $_SESSION['nbrres'] = $nbrR;
              $value=$_SESSION['id'];

              header('location:'.WEB_ROUTE.'?controlleurs=admin&view=modification&id='.$value);
              exit();
            }
            question($_POST);
           header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question'); 
    
}
 }
}


 function question(array $data): void{
    $arrayError=array();
    extract($data);
    valid_input($question,'question',$arrayError);
    valid_point($point,'point',$arrayError);
    valid_nbr_reponse($nbrres,'nbrres',$arrayError);
    valid_type_reponse($type,'type',$arrayError);
   

    if (form_valid($arrayError)){
        if (isset($data['id'])) {
           if (est_admin()) {
            modif_question($data);
            header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
           }
        }
        if (empty($data['id'])) {
            add_question($data);
         header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
        exit();
        }
         
        
    }else {
        $_SESSION['arrayError']=$arrayError;
        header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer.question');
    }
}

function pagination($data,$position){
  
  $nbrPage =0;
  $page=1;
  $suivant=1;
  $nbrElement = NOMBRE_PAR_PAGE;
 $precednt=0;



if (!isset($position)) {
  $page=1;
   $_SESSION['user_admin'] =  $data;
   $nbrPage = nombre_page_total( $_SESSION['user_admin'], $nbrElement);
   $list_user= paginer( $_SESSION['user_admin'],$page,  $nbrElement);
 
}

  if (isset($position)) {
      $page=$position;
   $suivant=$page+1;
   $precednt=$page-1;
       if (isset($_SESSION['user_admin'])) {
           $_SESSION['user_admin'] =  $data;
           $nbrPage = nombre_page_total( $_SESSION['user_admin'],  $nbrElement);
           $list_user= paginer( $_SESSION['user_admin'],$page,  $nbrElement);
          }

   }
   return[

     'precednt'=> $precednt,
     'suivant'=>$suivant,
     'nbrPage'=>$nbrPage,
     'data'=>$list_user,
  
  ];

}


?>