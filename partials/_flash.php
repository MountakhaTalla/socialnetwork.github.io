
        <?php if(isset($_SESSION['notification']['message']) && isset($_SESSION['notification']['type'])): ?>
<div class="container">
<div class="alert alert-<?= $_SESSION['notification']['type'];?>"></div>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
<h4><?= $_SESSION['notification']['message']?></h4>
</div>
<?php session_destroy();
$_SESSION['notification'] = [];?>
         <?php endif;
  