<?php include("header.php");?>

<div class="container" id="myObjects-container">
  <section>
    <h1>Ajouter un nouvel objet à prêter</h1>
    <form class="" action="index.html" method="post">
      <div id="newObject" class="input-group button-group">
          <input class="form-control" type="text" name="Object" placeholder="Nouvel objet à prêter" aria-describedby="plus-button">
          <span class="input-group-btn"><div class="btn-group">
            <button type="button" class="btn-category btn dropdown-toggle form-control" data-toggle="dropdown">
            Catégorie <span class="caret fa-3x"></span></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Cuisine</a></li>
              <li><a href="#">Produits ménagers</a></li>
              <li><a href="#">Divers</a></li>
            </ul>
          </div></span>
          <span id="plus-button" class="input-group-btn"><button class="btn btn-default form-control" type="button" name="button"><i class="glyphicon glyphicon-plus"></i></button></span>
      </div>
    </form>
  </section>

  <section id="myObjects">
    <h1>Mes objets</h1>
    <div class="objects-container">

      <div class="object-borrowed">
        <div class="object-left" >
          <strong>Assiettes</strong>
        </div>
        <div class="buttons-right">
          <button class="btn btn-info btn-lg" type="button" name="button"><i class="glyphicon glyphicon-cog"></i></button>
          <button class="btn btn-success btn-lg" type="button" name="button">Disponible</button>
        </div>
      </div>

      <div class="objects-container">
        <div class="object-borrowed">
          <div class="object-left" >
            <strong>Casserole</strong>
          </div>
          <div class="buttons-right">
            <button class="btn btn-info btn-lg" type="button" name="button"><i class="glyphicon glyphicon-cog"></i></button>
            <button class="btn btn-success btn-lg" type="button" name="button">Disponible</button>
          </div>
        </div>
      </div>

      <div class="objects-container">
        <div class="object-borrowed">
          <div class="object-left" >
            <strong>Appareil à raclette</strong>
          </div>
          <div class="buttons-right">
            <button class="btn btn-info btn-lg" type="button" name="button"><i class="glyphicon glyphicon-cog"></i></button>
            <button class="btn btn-success btn-lg" type="button" name="button">Disponible</button>
          </div>
        </div>
      </div>

      <div class="objects-container">
        <div class="object-borrowed">
          <div class="object-left" >
            <strong>Moule</strong>
          </div>
          <div class="buttons-right">
            <button class="btn btn-info btn-lg" type="button" name="button"><i class="glyphicon glyphicon-cog"></i></button>
            <button class="btn btn-danger btn-lg" type="button" name="button">Emprunté</button>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>


<?php include("footer.php");?>
