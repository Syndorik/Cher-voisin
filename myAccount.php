<?php include("header.php");?>
<div class="container" id="account_container">

    <h1 class="text-center">Mon compte</h1>
    <section class="private-info well">
      <div class="private-info-item">
        <h2>Infos personnelles</h2>
        <div class="data">
          <ul>
            <li>Prénom : Alexandre</li>
            <li>Nom : Allani</li>
            <li>Email : alexandre.allani@telecom-bretagne.eu</li>
            <li>Campus : IMT Brest</li>
            <li>Batiment : i11</li>
            <li>Chambre : 9</li>
            <li><a href="#">Modifier</a></li>
          </ul>
        </div>
      </div>
      <div class="private-info-item">
        <h2>Jetons</h2>
        <div class="private-info-token">
          <h4>18</h4>
          <p><img src="" alt=""></p>
        </div>
      </div>

    </section><!--  END of information section -->
    <section class="titles">
      <div>
        <h2>Mes badges</h2>
        <div class="badges-item">
          <p class="badge-pic"><img src="" alt=""></p>
          <p>Super prêteur</p>
        </div>
        <div class="badges-item">
          <p class="badge-pic"><img src="" alt=""></p>
          <p>Super prêteur</p>
        </div>
        <div class="badges-item">
          <p class="badge-pic"><img src="" alt=""></p>
          <p>Grand gourou</p>
        </div>
      </div>
      <div class="">
        <h2>Progression</h2>
        <div class="progress-bar-container">
          <p>Prochain titre prêteur</p>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
            aria-valuemin="0" aria-valuemax="100" style="width:40%">
              Plus que 4 prêts à faire !
            </div>
          </div>
        </div>
        <div class="progress-bar-container">
          <p>Prochain titre emprunteur</p>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
            aria-valuemin="0" aria-valuemax="100" style="width:60%">
              Plus que 3 emprunts à faire !
            </div>
          </div>
        </div>
        <div class="progress-bar-container">
          <p>Prochain titre prêteur</p>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
            aria-valuemin="0" aria-valuemax="100" style="width:80%">
              Plus que 2 parrainages !
            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="marks well">
      <div >
        <h2>Ma note</h2>
        <div class="marks-item">
          <h4>3/5</h4>
          <div >
            <span class="fa fa-star fa-2x checked"></span>
            <span class="fa fa-star fa-2x checked"></span>
            <span class="fa fa-star fa-2x checked"></span>
            <span class="fa fa-star fa-2x"></span>
            <span class="fa fa-star fa-2x"></span>
          </div>
        </div>
      </div>
      <div class="">
        <h2>Mes dernières reviews</h2>
        <div class="reviews">
          <div class="reviews-item">
            <h4>Benji <span><h6>Note donnée : 4</h6></span></h4>
            <p>Ton appareil à raclette m'a vraiment sauvé la vie Alex merci !</p>
          </div>
          <div class="reviews-item">
            <header>
              Paulo, note donnée : 4
            </header>
            <p>Ton moule à gateau est vraiment génial ! Encore merci !</p>
          </div>
        </div>
      </div>
    </section>
    <section class="historic">
      <h2>Historique</h2>
      <div class="historic-item">

      </div>
    </section>
</div><!-- END of container -->
<?php include("footer.php");?>
