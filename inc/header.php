<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

    <title>
    <?php echo $title; ?>
    </title>

  </head>
  <body>
<header>
  <nav>
    <div class="navbar navbar-inverse navbar-fixed-top" style="">
      <div class="container-fluid">

        <div class="logotitre"><a class="navbar-brand" href="index.php">
          <img class ="logo" alt="Brand" src="http://s15.postimg.org/i36mh5kuj/logo3.png">
        </a>
        <h1>Ratatouille</h1>
        </div>

        <button class="navbar-toggle" data-toggle ="collapse" data-target = ".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class=" collapse navbar-collapse navHeaderCollapse menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="menuTitle"><a class="menulien" href="index.php">Accueil</a></li>
            <li class="menuTitle"><a class="menulien" href="restaurant.php">Nos restaurants</a></li>
            <li class="menuTitle"><a class="menulien" href="about.php">Qui sommes-nous ?</a></li>
            <li class="menuTitle"><a class="menulien" href="franchise.php">Franchise</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
