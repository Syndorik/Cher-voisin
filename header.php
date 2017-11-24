<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-center">
    <div class="container-fluid container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="logo"><img src="images/logo_mini.png" id="logo-pic" ></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-center" id="menu-items">
          <li><a href="index.php">Accueil </a></li>
          <li><a href="myObjects.php">Mes objets</a></li>
          <li><a href="objectsBorrowed.php">Objets empruntés</a></li>
          <li class="dropdown"><a class="dropdown-toggle dropdown" data-hover="dropdown" data-target="#" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
              <ul class="dropdown-menu">
                  <li><a href="myAccount.php">Mon compte</a></li>
                  <li><a href="friends.php">Mes amis</a></li>
                  <li><a href="landing_page.php">Déconnexion</a></li>
            </ul>
          </li>
          <li><form class="navbar-form navbar-left">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Rechercher un objet" id="search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form></li>
          <!--<li><a href="Accueil-test.php">Inscription</a></li>
          <li><a href="#">Connexion</a></li>-->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
