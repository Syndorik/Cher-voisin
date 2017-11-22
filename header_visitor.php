<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <!--<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">-->
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
          <li><a href="index.php">Accueil <span class="sr-only">(current)</span></a></li>
          <li><a href="#fonctionnalities">Fonctionnalités</a></li>
          <li><a href="#try">Test sur ton campus !</a></li>
          <li><a href="Accueil_test.php">Inscription</a></li>
          <li><a href="#" id="connection_button" data-toggle="modal" data-target="#connection_modal">Connexion</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  <div id="connection_modal" class="container modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connexion</h4>
        </div>
        <div class="modal-body">
          <p><img src="images/logo_share_campus_mini.jpg" alt="logo"></p>
          <form class="form-group" action="index.html" method="post">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input class="form-control" type="text" name="email" id="email_connection" placeholder="Email" />
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" type="password" name="pwd" id ="pass" placeholder="Mot de passe" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="form-group button">
              <div class="col-md-12 controls">
                   <button type="submit" href="#" class="btn btn-primary pull-right" data-dismiss="modal"><i class="glyphicon glyphicon-log-in"></i>  Me connecter</button>
              </div>
          </div>
        </div>
      </div>

    </div>
  </div>
