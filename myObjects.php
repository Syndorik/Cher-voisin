<?php include("header.php");?>

<div class="container table" id="myObjects">
  <table class="table table-hover" align="center">
  <thead>
    <tr>
      <th>Objet</th>
      <th>Actuellement emprunté</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Casserole</td>
      <td>Doe</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td>Casserole</td>
      <td>Doe</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td>John</td>
      <td>Doe</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td>John</td>
      <td>Doe</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td>John</td>
      <td>Doe</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td colspan="2" ><form action="index.html" method="post">
          <div id="newObject" class="input-group button-group">
              <input class="form-control" type="text" name="Object" placeholder="Nouvel objet à prêter" aria-describedby="plus-button">
              <span class="input-group-btn"><div class="btn-group">
                <button type="button" class="btn dropdown-toggle form-control" data-toggle="dropdown">
                Catégorie <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Cuisine</a></li>
                  <li><a href="#">Produits ménagers</a></li>
                  <li><a href="#">Divers</a></li>
                </ul>
              </div></span>
              <span id="plus-button" class="input-group-btn"><button class="btn btn-default form-control" type="button" name="button"><i class="glyphicon glyphicon-plus"></i></button></span>
          </div>
      </form></td>

    </tr>
  </tbody>
</table>
</div><!-- END of container -->

<?php include("footer.php");?>
