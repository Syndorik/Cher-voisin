<?php include("header.php");?>

<div class="container" id="welcome_container">
  <h1>Bienvenue sur ton share campus !</h1>
  <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
  [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat…</p>

  <section id="object_section">
    <h4>Pour commencer à emprunter, il faut savoir prêter !</h4>
    <p>Indique au moins deux objets de ton choix que tu pourrais prêter.</p>
    <div id="object_list">

      <form id="object_form" action="index.html" method="post">
        <div class="align-items">
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Casserole
            </label>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Poêle
            </label>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Aspirateur
            </label>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Fer à repasser
            </label>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Moule à gateaux
            </label>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Rouleau à patisserie
            </label>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Fouet
            </label>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Casserole
            </label>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
                Casserole
            </label>
          </div>
        </div>

        <div class="input-group button-group">
            <input class="form-control" type="text" name="" placeholder="Nouvel objet à prêter" aria-describedby="plus-button">
            <span class="input-group-btn"><button class="btn btn-default form-control" type="button" name="button"><i class="glyphicon glyphicon-plus"></i></button></span>
        </div>
        <div class="input-group button-group">
            <input class="form-control" type="text" name="Object" placeholder="Nouvel objet à prêter" aria-describedby="plus-button">
            <?php // TODO: ajoute catégorie ?>
            <span class="input-group-btn"><button class="btn btn-default form-control" type="button" name="button"><i class="glyphicon glyphicon-plus"></i></button></span>
        </div>
        <div class="input-group">
          <button class="btn btn-success" type="button" name="button">Valider</button>
        </div>
      </form>
    </div>
  </section>
</div>
<?php // TODO: rajouter boutons pour pouvoir mettre autant d'objets qu'on veut ?>
<?php include("footer.php");?>
