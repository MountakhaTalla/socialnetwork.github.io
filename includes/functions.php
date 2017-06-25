<?php
if(!function_exists('not_empty')){
    try{
    function not_empty($fields = []){
        if(count($fields !=0)) {
            foreach ($fields as $key => $field){
               if($_POST[$field]=="" OR trim($_POST[$field] ==FALSE)){
                   
                   return FALSE ;
               }
            }
           
            return TRUE;
        }
    } 
}
catch (Exeption $exec){
    $exec->getTraceAsString()."\n";
    $exec->getMessage();
}
}
if(!function_exists('is_already_in_use')){ 
    function is_already_in_use($field, $value , $table) {
         try { 
        global $db;
        $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
        $q->execute([$value]);
          $count = $q->rowcount();
          $q->closeCursor();
          return $count;
    } catch (Exception $exc) {
        echo $exc->getTraceAsString()."\n";
        echo $exec->getMessage();
    }
}

if(!function_exists('set_flash')){
    function set_flash($message, $type='info'){
             $_SESSION['notification']['message'] = $message;
             $_SESSION['notification']['type'] = $type;
 
    }
}
}
