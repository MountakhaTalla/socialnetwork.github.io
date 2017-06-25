<?php $title = "Inscription";
    include 'partials/_header.php';
    include 'partials/_flash.php';
    
    ?>

      <div class="container">
          <div class="lead">
          <h1>Devenez membre dès à présent !</h1>
          
          <?php include('partials/_errors.php')?>
          
          <form method="post" class="well col-md-6  " autocomplete="off">
              <div class="form-group">
                  <label for="lastname" class="label-control">Nom:</label>
                  <input class="form-control" type="text" name="name" value=""  id="lastname" placeholder=" Veuillez entrer votre nom" required="required"/>
              </div>
              
               <div class="form-group">
                  <label for="mail" class="label-control">Email:</label>
                  <input class="form-control" type="email" name="email" value=""  id="mail" placeholder="Veuillez entrer votre adresse E-mail"required="required"/>
              </div>
               <div class="form-group">
                  <label for="pseudo" class="label-control">Pseudo:</label>
                  <input class="form-control" type="text" name="pseudo" value=""  id="pseudo" placeholder="Veuillez indiquer votre pseudo" required="required"/>
              </div>
              
               <div class="form-group">
                  <label for="password" class="label-control">Mot de passe:</label>
                  <input class="form-control" type="password" name="password" value="" placeholder="Votre mor de passe" id="password" required="required"/>
              </div>
               <div class="form-group">
                  <label for="password_confirm" class="label-control">confirmez votre mot de passe:</label>
                  <input class="form-control" type="password" name="password_confirm" value=""  placeholder="Mot de passe de confirmation" id="password_confirm" required="required"/>
              </div>
              <input type="submit" value="Inscription" name="register" class="btn btn-primary btn-lg "  />
           
          </form>
          </div>
      </div>
   <script src="js/bootstrap.min.js"></script>
<?php   include 'partials/_footer.php';
    
 