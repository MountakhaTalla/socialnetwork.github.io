<?php 
$title= "Accueil";
    include 'includes/constants.php';
    include 'partials/_header.php';
     
 ?>
      
<div id="main-contain">
    <div class="container jumbotron" >

      <div class="starter-template">
       <h1><?php echo  WEBSITE_NAME .'?'?></h1> 
        <p class="lead"><?php echo  WEBSITE_NAME ?> est un réseau social pour dévelppeurs.<br>
            Il est simple d'utilisation, rapide et efficace.<br>
            Le réseau social <?php echo  WEBSITE_NAME ?> a  crée dans le but de faciliter<br>
            une meilleure communication entre les développeurs du monde entier.<br>
            Ainsi, il se veut et se réclame un espace d'échanges, de partage, d'entraide<br>
            entre dévéloppeurs dun meme pays ou de horizons divers.<br>
            Alors, vous etes développeur ou vous aspirez à l'etre, rejoignez vite <a href="register.php"><?php echo  WEBSITE_NAME ?>,</a><br> 
            le réseau qui fidélise le Monde du développement et la planète des développeurs. </p>
        <p><a href="register.php"><button href= "register.php" class="btn btn-primary btn btn-lg">Je crées un compte Boom</button></a></p>
      </div>

        
    </div>
</di>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
<?php include 'partials/_footer.php';