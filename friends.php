<?php include("header.php");?>

<div class="container table" id="myObjects">
  <div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
    <table class="table table-hover" align="center">
    <thead>
      <tr>
        <th>My friends</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Thomas</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>Casserole</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>John</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>Doe</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td>Loic</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td><form action="index.html" method="post">
            <div id="newObject" class="input-group button-group">
                <input class="form-control" type="text" name="Object" placeholder="Ajoute un ami !" aria-describedby="plus-button">
                <span id="plus-button" class="input-group-btn"><button class="btn btn-default form-control" type="button" name="button"><i class="glyphicon glyphicon-plus"></i></button></span>
            </div>
        </form></td>
      </tr>
    </tbody>
  </table>
  </div>

</div><!-- END of container -->

<?php include("footer.php");?>
