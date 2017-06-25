<?php
if(isset($errors) && count($errors) !=0){
echo '<div class="alert alert-danger alert-dismissible" role="alert">';
echo  '<button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">&times;</button>';
      foreach($errors as $key => $error){
            echo $error.'<br>'; 
}}
      echo '</div>';
       