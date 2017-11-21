<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
  <body id="welcome-body">
      <div class="container">
          <div class="row" id="first-row">
              <div class="col-md-12" id="panel-parent">
                  <div class="panel panel-default " >
                      <div class="panel-heading">
                          <div class="panel-title text-center">Connecte toi !</div>
                      </div>
                      <div class="panel-body">
                          <div class="col-md-12" id="logo_col">
                              <p id="logo_p"><img class="img-responsive" id="logo" src="images/logo.png" alt="logo" height="80%" ></p>

                              <form action="/Accueil/resultat-formulaire.php" method="post" id="mff">
                                  <div class="col-md-12" id = "mf">
                                      <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                          <input class="form-control" type="text" name="email" id="email" placeholder="Email" />
                                      </div>
                                      <span id="emailMsg" class = "span-warning"></span>

                                      <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input class="form-control" type="password" name="pwd" id ="pass" placeholder="Mot de passe" />
                                      </div>
                                      <span id="passMsg" class = "span-warning"></span>

                                      <span id="sbm"></span>

                                      <div class="form-group button">
                                          <div class="col-md-12 controls">
                                               <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Se connecter</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>

                          </div>

                      </div>
                  </div>

              </div>
          </div>


          </div>
      </div>

      <script src = "javascript/form.js"></script>

</body>
</html>
