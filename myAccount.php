<?php include("header.php");?>
<div class="container-fluid">
    <h1 class="text-center">Mon compte</h1>
    <div class="row well" id="info-row">
        <h2>Infos</h2>
        <div class="col-md-2">
            <h4>Mes données</h4>
            <ul>
                <li>Pseudo : </li>
                <li>Prénom :</li>
                <li>Nom :</li>
                <li>Mail :</li>
                <li>Batiment :</li>
                <li>Chambre :</li>
            </ul>
        </div>
        <div class="col-md-2">
            <h4>Jetons</h4>
        </div>

        <div class="col-md-2">
            <h4>Ma note</h4>
        </div>
        <div class="col-md-3">
            <h4>Mes titres</h4>
        </div>
        <div class="col-md-3">
            <h4>Plus qu'à</h4>
            <p><ul>
                <li>Preter x objets avant de devenir ?</li>
                <li>Emprunter x objets avant de devenir ?</li>
                <li>Parrainer x personnes avant de devenir gourou !</li>
            </ul></p>
        </div>
    </div><!-- END of row -->
    <div class="row well" id="godfather-row">
      <h1>Parraine un de tes voisins et reçoit !</h1>
      <form  action="index.html" method="post">
        <div class="col-md-4 col-s-12 input-group input-group-btn">
          <input type="email" name=="godchild" class="form-control">
          <span id="plus-button" class="input-group-btn"><button class="btn btn-default form-control" type="button" name="button"><i class="glyphicon glyphicon-send"></i></button></span>
        </div>

      </form>

      </div>
    </div>

</div>

<?php include("footer.php");?>
