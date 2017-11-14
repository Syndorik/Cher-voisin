<?php include("header.php");?>

<div class="container table-responsive">
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
      <td><form action="index.html" method="post">
          <div class="input-group button-group">

              <input class="form-control" type="text" name="Object" placeholder="Nouvel objet à prêter" aria-describedby="plus-button">
              <span id="plus-button" class="input-group-btn"><button class="btn btn-default form-control" type="button" name="button"><i class="glyphicon glyphicon-plus"></i></button></span>
          </div>
      </form></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div><!-- END of container -->

<?php include("footer.php");?>
