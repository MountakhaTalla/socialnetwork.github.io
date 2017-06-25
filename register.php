
<?php
include ('config/database.php');
include ('includes/functions.php');
include ('includes/constants.php');

if(isset($_POST['register'])){
    if ((not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])))
        {
        $errors = [];
        extract($_POST);
        
        if(mb_strlen($pseudo)<3){
            
            $errors[] ='Pseudo trop court ! Minimum 3 caractères';
        }
        if(mb_strlen($password) <6){
            $errors[] = 'Votre mot de passe est trop court. Minimum 6 caractères !  ';
        }
        if ($password != $password_confirm) {
           $errors[] = 'Les deux mots de passe ne concordent pas !'; 
        }
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[]='Adresse E-mail invalide !';
        }
        
        if(is_already_in_use('pseudo', $pseudo, 'users')){
            $errors[] ='Pseudo déjà utilisé !'; 
        }
        
        if(is_already_in_use('email',$email, 'users')){
            
            $errors[] = 'Adresse E-mail déjà utilisé !'; 
        }
        
        if (count($errors) ==0) {
    
     // sending of a activation email to the user
     $to = $email;
     $subject = WEBSITE_NAME."- Activation de Compte !";
     $token = sha1($pseudo.$email.$password) ;
    
     ob_start();
     require 'templates/mails/activation.tmpl.php';
     $content = ob_get_clean();
     
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     //sensing mail to user
     mail($to, $subject, $content, $headers);
     //inform user for to consulte his box-email
     
     set_flash("Mail d'activation envoyé", 'sucess');
     
     //redirect user from his profil page
        
    }
    
 
}else{
    $errors[] = 'Veuillez SVP remplir tous les champs !';
}
}
?>

<?php require 'views/register.views.php';