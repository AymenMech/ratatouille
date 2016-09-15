<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>
    <?php echo $titre; ?>
    </title>

  </head>
  <body>
<header>
  <nav>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="logotitre"><a class="navbar-brand" href="index.php">
          <img class ="logo" alt="Brand" src="http://s13.postimg.org/baefyh91j/logo2.png">
        </a>
        <h1>Ratatouille</h1>
        </div>
        <button class="navbar-toggle" data-toggle ="collapse" data-target = ".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse navHeaderCollapse menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="menuTitle"><a href="index.php">Accueil</a></li>
            <li class="menuTitle"><a href="restaurant.php">Nos restaurants</a></li>
            <li class="menuTitle"><a href="about.php">Qui sommes-nous ?</a></li>
            <li class="menuTitle"><a href="franchise.php">Franchise</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
