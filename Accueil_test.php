<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Bootstrap template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <div class="panel-title text-center">Inscription</div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <p><img id="logo" src="images/logo1_mini.png" alt="logo" height="110%" width="110%"></p>
                            </div>

                            <div class="col-md-6">
                                <form action="/Accueil/resultat-formulaire.php" method="post">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" name="prenom" placeholder="Prénom"/>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" name="nom" placeholder="Nom" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" name="pseudo" placeholder="Pseudo" />
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input type="text" name="email" placeholder="Email" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input type="password" name="pwd" placeholder="Mot de passe"/>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input type="password" name="pwd2" placeholder="Vérification mot de passe" />
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 controls">
                                                 <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> S'inscrire</button>
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

  </body>
</html>
