<?php include("header.php");?>
  <div class="container" id="index-container">
    <?php // TODO: ajouter progress section ?>
    <section class="news-section" id="objects_season">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="30000">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/fondue.png" class="responsive" alt="library pic 1" style="width:100%;">
          </div>

          <div class="item">
            <img src="images/fondue.jpg" alt="library pic 2" style="width:100%;">
          </div>

          <div class="item">
            <img src="images/fondue.jpg" alt="library pic 3" style="width:100%">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
  
    <section class="news-section single-item" id="cooking-section">
      <h4>Derniers ajouts dans la catégorie Cuisine</h4>
      <div class="objects-container-display">
        <div class="object-display">
          Appareil à fondue
        </div>
        <div class="object-display">
          Moule
        </div>
        <div class="object-display">
          Poêle
        </div>

      </div>
    </section><!-- END of cooking section -->
    <section class="news-section single-item" >
      <h4>Derniers ajouts dans la catégorie Produits ménagers</h4>
      <div class="objects-container-display">
        <div class="object-display">
          Aspirateur
        </div>
        <div class="object-display">
          Fer à repasser
        </div>
        <div class="object-display">
          Balai
        </div>
      </div>
    </section>

    <section class="news-section single-item">
      <h4>Derniers objets empruntés</h4>
    </section>
    <section class="news-section single-item">
      <h4>Derniers titres acquis</h4>
    </section>

  </div>
<<?php include ("footer.php"); ?>
