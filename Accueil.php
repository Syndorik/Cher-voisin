<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>

<form action="/Accueil/resultat-formulaire.php" method="post" id="mf">
    <div>
        <label for="Prénom">Prénom : </label>
        <input type="text" name="prenom" id="Prenom"/>
        <span></span>
    </div>
    <div>
        <label for="Nom">Nom : </label>
        <input type="text" name="nom" id = "Nom" />
        <span></span>
    </div>
    <div>
        <label for="Pseudonyme">Pseudonyme : </label>
        <input type="text" name="pseudo" id = "Pseudo" />
        <span></span>
    </div>
    <div>
        <label for="email">E-mail : </label>
        <input type="text" name="email" id="email"/>
        <span></span>
    </div>
    <div>
        <label for="Password">Mot de passe : </label>
        <input type="password" name="pwd" id ="pass" />
        <span></span>
    </div>
    <div>
        <label for="Password">Mot de passe (confirmation): </label>
        <input type="password" name="pwd2" id = "pass1"/>
        <span></span>
    </div>
	<div>
		<label for="batiment">Bâtiment : </label>
		<select id ="batiment" name ="bat">
			<option value= "null">Veuillez sélectionner une valeur</option>
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
		<span></span>
	</div>
	<div id = "yolo">
        <label for="Nch">Numéro de Chambre : </label>
        <input type="text" name="nch" id="chambre"/>
        <span></span>
    </div>
    <span id = 'sbm'></span>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
    <script src = "javascript/form.js"></script>
</form>
</html>
