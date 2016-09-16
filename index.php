
<?php
$title= "Accueil";
include"inc/header.php";
?>

    <div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">

      <a href="franchise.php" ><img src="images/slide1.jpg" alt="image presentation caroussel" /></a>
      <div class="carousel-caption">

        <h3>Cuisine et tradition</h3>
        <p>Local, bio et bon !</p>
      </div>
    </div>
    <div class="item">
      <a href="restaurant.php"><img src="images/slide2.jpg" alt="image presentation caroussel"/></a>
      <div class="carousel-caption">

        <h3>Ouverture d'un nouvel établissement !</h3>
        <p>Découvez ce restaurant à Toulouse</p>
      </div>
    </div>
    <div class="item">

      <a href="restaurant.php"><img src="images/slide3.jpg" alt="image presentation caroussel"/></a>
      <div class="carousel-caption">

        <h3>Ouverture d'un nouvel établissement !</h3>
        <p>Découvez ce restaurant à Lyon</p>
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>


<div class="bloc-index container">
    <div class="col-md-12 text-center">
      <div class="row">
      <h2>Bienvenue</h2>
      <p class="margin-bloc">Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générate</p>
      </div>
        <!--___________bloc 1___________ -->
    </div>

    <div class="bloc1 col-md-4">
      <div class="margin-bloc">
        <img class="img-responsive" src="img/resto4.jpg" alt="restaurant">

      </div>
      <div class="margin-bloc">
      <p>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.</p>
      </div>
    </div>
        <!--______________     bloc3       ________ -->

    <div class="bloc1 col-md-4">
      <div class="margin-bloc">
        <img  class="img-responsive" src="img/resto2.jpg" alt="restaurant">

      </div>
      <div class="margin-bloc">
      <p>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.</p>
      </div>
    </div>
    <!--______________     bloc3       ________ -->

    <div class="bloc1 col-md-4 ">
      <div class="margin-bloc">
        <img class="img-responsive" src="img/resto6.jpg" alt="restaurant">

      </div>
      <div class="margin-bloc">
      <p>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.</p>
      </div>
    </div>
</div>
<?php include"inc/footer.php";
?>
