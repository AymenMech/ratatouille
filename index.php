
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
      <a href="franchise.php" ><img src="images/slide1.jpg" alt="" /></a>
      <div class="carousel-caption">
        <h3>Cuisine et tradition</h3>
        <p>Local, bio et bon !</p>
      </div>
    </div>
    <div class="item">
      <a href="restaurant.php"><img src="images/slide2.jpg" /></a>
      <div class="carousel-caption">
        <h3>Ouverture d'un nouvel établissement !</h3>
        <p>Découvez ce restaurant à Toulouse</p>
      </div>
    </div>
    <div class="item">
      <a href="restaurant.php"><img src="images/slide3.jpg" /></a>
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

<?php include"inc/footer.php";
?>
