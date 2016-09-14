<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>
    <?php echo $titre; ?>
    </title>

  </head>
  <body>
<header>
 

<!-- barre de navigation / navbar menu ____________________________________ 
  <nav class="navbar navbar-default" style="height:75px;">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toogle" data-toogle = "collapse" data-target = ".navHeaderCollapse"></button>
        <a class="navbar-brand" href="index.php">
          <img alt="Brand" src="images/Logo.png" style="height:50px; width:50px; top : 25px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#">Nos restaurants</a></li>
          <li><a href="about.php">Qui sommes-nous ?</a></li>
          <li><a href="franchise.php">Franchise</a></li>
          <li><a href=""></a></li>
        </ul> 
     </div>
    </div>
  </nav>
  -->
  <nav>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="containerHead">
        <a class="navbar-brand" href="index.php">
          <img class ="logo" alt="Brand" src="images/Logo.png" ;">
        </a>
        <button class="navbar-toggle" data-toggle ="collapse" data-target = ".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse navHeaderCollapse menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="menuTitle"><a href="index.php">Accueil</a></li>
            <li class="menuTitle"><a href="#">Nos restaurants</a></li>
            <li class="menuTitle"><a href="about.php">Qui sommes-nous ?</a></li>
            <li class="menuTitle"><a href="franchise.php">Franchise</a></li>
          </ul> 


        </div>
      </div>
    </div>

  </nav>

</header>
