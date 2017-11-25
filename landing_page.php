<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">-->
</head>
<body>
  <?php include("connection.php");?>
  <nav class="navbar navbar-default navbar-fixed-top navbar-right" id="header_landing">
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
        <ul class="nav navbar-nav navbar-right" id="menu-items">
          <li><a href="#slideshow">Accueil</a></li>
          <li><a href="#test_row">Besoin d'un objet ?</a></li>
          <li><a href="#tokens">Fonctionnalités</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#"  id="inscription_button" data-toggle="modal" data-target="#inscription_modal">Inscription</a></li>
          <li><a href="#" id="connection_button" data-toggle="modal" data-target="#connection_modal">Connexion</a></li>

          <!--<li><a href="Accueil-test.php">Inscription</a></li>
          <li><a href="#">Connexion</a></li>-->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav><!-- END of header -->

  <div class="container" id="landing_container">

    <section id="slideshow">
      <div class="group-centered">
        <h1 class="margin_auto">SHARE CAMPUS</h1>
        <h2 class="margin_auto">Prêter et emprunter en toute simplicité</h2>
        <button class="margin_auto" type="button" name="button">Rejoins la communauté !</button>
      </div>
    </section><!-- END of slideshow section -->

    <section id="description_row">
      <div>
        <h2>Venez gagner du temps, de l'argent et de l'espace</h2>
        <h2>Autrement dit facilitez-vous la vie</h2>
        <h4 align="center">Share Campus est la plateforme de prêt de bien entre étudiants d'un même campush</h4>
        <div class="inner-section" id="description_container">
          <div class="description_item">
            <div class="img-square">
              <p><img src="" alt="logo_hands"></p>
            </div>
            <h4>Prêter</h4>
            <h5>Rend service</h5>
            <p>Mets à disposition des objets, aide tes voisins et surtout empoche des tokens pour profiter toi aussi des services proposés. Tu en auras forcément besoin un jour !</p>
          </div>
          <div class="description_item">
            <div class="img-square">
              <p><img src="" alt="logo_hands"></p>
            </div>
            <h4>Emprunter</h4>
            <h5>A charge de revanche</h5>
            <p>Profite de la gentillesse de tes voisins pour leur
              emprunter un de leurs objets.
              Pense tout de même à rendre la pareille.</p>
          </div>
          <div class="description_item">
            <div class="img-square">
              <p><img src="" alt="logo_hands"></p>
            </div>
            <h4>Simplicité</h4>
            <h5>Ne te prends plus la tête</h5>
            <p>Une plateforme complète te permettant d'économiser du temps (plus besoin de faire du porte à porte), de l'argent et de l'espace (n'achetez plus d'objets inutiles et encombrants)</p>
          </div>
        </div><!-- END of description-container -->
      </div>
    </section><!-- END of description_section -->

    <section id="test_row">
      <div>
        <h2>Test notre plateforme !</h2>
        <h4>Déjà plein de campus avec de nombreux objets prêtés !</h4>
      </div>
      <div>
        <div id="test_container">
          <form action="index.html" method="post">
            <div id="select_div">
              <select class="form-control" id ="batiment" name ="bat">
                  <option value= "null">Campus</option>
                  <option value= "brest">IMT Brest</option>
                  <option value= "nantes">IMT Nantes</option>
                  <option value= "enib">ENIB</option>
              </select>
            </div>
            <div class="input-group" >
              <input class="form-control" type="text" name="" value="" placeholder="Cherche un objet !">
              <span class="input-group-btn"><button type="button" name="button" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button></span>
            </div>
          </form>
          <p>Ton campus n'apparaît pas dans la liste ? Clique <a href="#">ici</a></p>
        </div>
      </div>
    </section><!-- END of test_section-->

    <section class="fonctionnalities" id="tokens">
      <div class="row-container">
        <p><img src="" alt="money"></p>
        <div>
          <h2>Système de crédit</h2>
          <h4>Pour inciter les voisins à prêter</h4>
          <p>Dès que tu prêteras un objet ou rendras un service, tu recevras des crédits qui te permettront par la suite d'emprunter à ton tour.</p>
        </div>
      </div>
    </section><!-- END of credit section -->

    <section class="well fonctionnalities" id="trust">
      <div class="row-container">
        <div>
          <h2>Système de niveaux et de notations</h2>
          <h4>pour établir la confiance et rendre l'expérience amusante</h4>
          <p>Après chaque emprunt, le prêteur pourra te noter afin que les autres sachent que tu es quelqu'un de confiance ! De plus, ton niveau montreras au autres que tu es quelqu'un d'expérimenté et qui n'hésite pas à rendre la pareil !</p>
        </div>
        <p><img src="" alt="mark"></p>
      </div>
    </section><!-- END of trust section -->

    <section class="fonctionnalities" id="friends">
      <div class="row-container">
        <p><img src="" alt="network"></p>
        <div>
          <h2>Réseaux d'amis</h2>
          <h4>pour faciliter les échanges</h4>
          <p>Même si celui à qui tu prêtes ne te rend pas directement la pareil, qui sait, il est peut-être amis avec quelqu'un qui lui pourra t'aider ! Les recherches sont donc basées sur tes amis ainsi que les amis de tes amis pour encore une fois inciter à échanger !</p>
        </div>
      </div>
    </section><!-- END of friends section -->

    <section class="well" id="inscription_section">
      <h2>Connecte-toi ton share campus !</h2>
      <h4>Rejoins le mouvement !</h4>
      <button type="button" name="button">Je m'inscris</button>
    </section>

    <section id="contact">
      <h2>Contacte nous !</h2>
      <p>La plateforme n'est pas présente sur ton campus et tu aimerais qu'elle le soit ? Tu as des questions concernant l'application ? N'hésite pas !</p>
      <form action="mailto:s3-projet-39@mlistes.telecom-bretagne.eu" method="post">
        <input class="form-control" type="email" name="" value="" placeholder="Ton email">
        <input class="form-control" type="text" name="" value="" placeholder="Objet" id="email_object">
        <input class="form-control" type="text" name="" value="" placeholder="Ton message" id="email_content">
        <button class="btn btn-default" type="send" name="button">Envoyer</button>
      </form>
    </section>
  </div>

  <section id="footer-wrapper">
    <div id="footer">
      <div id="footer-content" class="row container">
          <div id="footer-content-2">
            <div id="pages" class="col-sm-4">
              <ul>
                <li><a href="#slideshow">Accueil</a></li>
                <li><a href="#test_row">Besoin d'un objet ?</a></li>
                <li><a href="#tokens">Fonctionnalités</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#"  id="inscription_button" data-toggle="modal" data-target="#inscription_modal">Inscription</a></li>
                <li><a href="#" id="connection_button" data-toggle="modal" data-target="#connection_modal">Connexion</a></li>
              </ul>
            </div>
            <div id="acknowledgments" class="col-sm-4">
              <h3>Nos partenaires</h3>
              <ul>
                <li>Carrefour</li>
                <li>Intermarché</li>
                <li>Tefal</li>
              </ul>
            </div>
            <div id="social-media">
              <h3>Où nous contacter ?</h3>
              <a href="https://www.facebook.com/ShareCampus/"><img src="images/facebook.png" title="Notre page Facebook"></a>
              <a href="#"><img src="images/twitter.png" title="Twitter"></a>
            </div>
          </div>
      </div><!-- END of row -->
      <div id="copyrights">
        <p>Copyrights © 2017 ~ Share Campus ~ <a href="#" target="_blank">acknowledgements</a></p>
      </div>
    </div>
  </section><!-- END of footer -->

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
