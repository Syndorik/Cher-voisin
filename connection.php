

  <div id="inscription_modal" class="container modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Inscription</h4>
        </div>
        <div class="modal-body">
          <p><img src="images/logo_share_campus_mini.jpg" alt="logo"></p>
          <form class="form-group" action="index.html" method="post">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control" type="text" name="prenom" id="Prenom" placeholder="Prénom" />
            </div>
            <span id="firstNameMsg" class = "span-warning"></span>

            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control" type="text" name="nom" id = "Nom" placeholder="Nom" />
            </div>
            <span id="lastNameMsg" class = "span-warning"></span>
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

            <div class="input-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" type="password" name="pwd2" id = "pass1" placeholder="Vérification mot de passe" />
            </div>
            <span id="pass1Msg" class = "span-warning"></span>

            <div class="input-group" id="batt">
                <select class="form-control" id ="batiment" name ="bat">
                    <option value= "null">Batiment</option>
                    <option value= "i1">i1</option>
                    <option value= "i2">i2</option>
                    <option value= "i3">i3</option>
                    <option value= "i4">i4</option>
                    <option value= "i5">i5</option>
                    <option value= "i6">i6</option>
                    <option value= "i7">i7</option>
                    <option value= "i8">i8</option>
                    <option value= "i9">i9</option>
                    <option value= "i10">i10</option>
                    <option value= "i11">i11</option>
                    <option value= "i12">i12</option>
                    <option value = "autre">Autre</option>
                </select>
            </div>
            <span id="batMsg" class = "span-warning"></span>


            <div class="input-group" id = "yolo">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input class="form-control" type="text" name="pseudo" id = "chambre" placeholder="Chambre" />
            </div> <!-- end input -->
            <span id="spanchbr" class = "span-warning"></span>


            <span id="sbm"></span>
          </form>
        </div>
        <div class="modal-footer">
          <div class="form-group button">
              <div class="col-md-12 controls">
                   <button type="submit" href="index.php" class="btn btn-primary pull-right" data-dismiss="modal"><i class="glyphicon glyphicon-log-in"></i>  M'inscrire </button>
              </div>
          </div>
        </div>
      </div>

    </div>
  </div><!-- END of modal -->


  <div id="connection_modal" class="container modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connexion</h4>
        </div>
        <div class="modal-body">
          <p><img src="images/logo_share_campus_mini.jpg" alt="logo"></p>
          <form class="form-group" action="index.html" method="post">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input class="form-control" type="text" name="email" id="email_connection" placeholder="Email" />
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" type="password" name="pwd" id ="pass" placeholder="Mot de passe" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="form-group button">
              <div class="col-md-12 controls">
                   <button type="submit" href="index.php" class="btn btn-primary pull-right" data-dismiss="modal"><i class="glyphicon glyphicon-log-in"></i>  Me connecter</button>
              </div>
          </div>
        </div>
      </div>

    </div>
  </div>
