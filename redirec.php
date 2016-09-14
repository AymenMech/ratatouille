<?php include 'inc/link.php'; ?>

<div class="container">
  <div class="row">
    <div style="margin-top: 200px;" class="col-md-offset-4 col-md-4">
      <p class="text-justify">Merci, nous avons <mark>bien reçu vos informations et allons traiter votre demande dans les plus brefs délai</mark>.
        Patientez quelques secondes ou clicquez sur le bouton pour être rediriger</p>

    </div>
  </div>
 <a href="index.php"><input type="button"  name="name" class=" center-block btn btn-primary"value="Retournez à l'accueil"> <a/>
</div>


<?php

header('Refresh: 5;  index.php')
 ?>
