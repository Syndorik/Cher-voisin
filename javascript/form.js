
var nom = document.getElementById('Nom');
var prenom = document.getElementById('Prenom');
var pseudo = document.getElementById('Pseudo');
var email = document.getElementById('email');
var pass = document.getElementById('pass');
var passconf = document.getElementById('pass1');

var batiment = document.getElementById('batiment');
var chambre = document.getElementById('chambre');
var divchambre = document.getElementById('yolo');
var sbm = document.getElementById('sbm');
var mf = document.getElementById('mf');


function verifLastName(name,ev){
	if(name.value.length>1){
		document.getElementById("lastNameMsg").innerHTML  = "";
	}
	else{
		warning = "Il doit y avoir au moins 2 caractères";
		document.getElementById("lastNameMsg").innerHTML = warning;
		ev.preventDefault();
	}
}

function verifFirstName(name,ev){
	if(name.value.length>1){
		document.getElementById("firstNameMsg").innerHTML = "";
	}
	else{
		warning = "Il doit y avoir au moins 2 caractères";
		document.getElementById("firstNameMsg").innerHTML = warning;
		ev.preventDefault();
	}
}

function verifadd(name,ev){
	if(name.value.length>3){
		document.getElementById("addMsg").innerHTML  = "";

	}
	else{
		warning = "Veuillez rentrer une adresse correcte";
		document.getElementById("addMsg").innerHTML = warning;
		ev.preventDefault();
	}
}


function verifpseudo(pseudo,ev){
	if(pseudo.value.length>6){
		document.getElementById("pseudoMsg").innerHTML  = "";

	}
	else{
		warning = "Il doit y avoir au moins 6 caractères";
		document.getElementById("pseudoMsg").innerHTML = warning;
		ev.preventDefault();
	}
}


function verifpass(pass1,pass2,ev){

	if(pass1.value === pass2.value && pass1.value.length>8){
		document.getElementById("passMsg").innerHTML  = "";
		document.getElementById("pass1Msg").innerHTML  = "";
	}
	else if(pass1.value !== pass2.value){
		warning = "Les mots de passe doivent correspondre";
		document.getElementById("pass1Msg").innerHTML  = warning;
		ev.preventDefault();
	}
	else if (pass1.value === pass2.value && pass1.value.length< 8){
		warning = "Le mot de passe doit contenir au moins 7 caractères";
		document.getElementById("pass1Msg").innerHTML  = warning;
		ev.preventDefault();
	}
}

function existin(txt,letter){
	txt1 = txt.value.split('');
	b = 0;
	for(var i =0; i< txt1.length; i++){
		if(txt1[i] === letter){
			b =1;
		}
	}
	return b;
}

function verifmail(mail,ev){
	if(existin(mail,"@")){
		document.getElementById("emailMsg").innerHTML  = "";
	}
	else{
		warning = "Veuillez rentrez une adresse mail correct";
		document.getElementById("emailMsg").innerHTML  = warning;
		ev.preventDefault();
	}
}

function verifbat(batiment,ev){
	dvch = document.getElementById('yolo');
	if(batiment.value == "null"){
		warning = "Veuillez choisir votre bâtiment";
		document.getElementById("batMsg").innerHTML  = warning;
		ev.preventDefault();
	}
	else if(batiment.value == "autre"){
		dvch.parentNode.removeChild(dvch);
	}
	else{
		document.getElementById("batMsg").innerHTML  = "";
	}
}

function recreate(){
	dch = document.createElement('div');
	dch.id = 'yolo';
	inpp = document.createElement('input');
	inpp.type= 'text';
	inpp.name = 'nch';
	inpp.id = 'chambre';
	inpp.placeholder = "Numéro de chambre";
	spp = document.createElement('span');
	dch.appendChild(inpp);
	dch.appendChild(spp);
	return(dch);
}

function autreBat(batiment){
	if(batiment.value === "autre"){
		addr = document.createElement('input');
	    addr.id = 'addr';
	    addr.type = 'text';
	    addr.name = 'addr';
	    addr.placeholder = "Adresse"
	    batiment.parentNode.appendChild(addr);
	    spip = document.createElement('span');
	    spip.id = "spip";
	    batiment.parentNode.appendChild(spip);
	    inp = document.getElementById('addr');
    	inp.addEventListener('blur',function(e){
        	verifadd(inp,e);
      	})
      	batiment.addEventListener('blur',function(e){
      		verinp = document.getElementById('addr');
      		if(batiment.value !== "autre"){
      			if(typeof(verinp)!= 'undefined' && verinp != null){
        			batiment.parentNode.removeChild(inp);
        			batiment.parentNode.removeChild(spip);
        			mf.insertBefore(recreate(),sbm);
        		}
        	}
      	})
	}
}

function verifch(chambre,e){
	if(isNaN(parseInt(chambre.value))){
		warning = "Veuillez rentrer votre numéro de chambre";
		chambre.nextElementSibling.innerHTML= warning;
		e.preventDefault();
	}
	else{
		chambre.nextElementSibling.innerHTML = "";
	}
}

var cch = chambre;
var verinp = 0;
var dvch = 0;


mf.addEventListener('submit',function(e){
	cch = document.getElementById('chambre');
	verifLastName(nom,e);
	verifFirstName(prenom,e);
	verifpseudo(pseudo,e);
	verifpass(pass,passconf,e);
	verifmail(email,e);
	verifbat(batiment,e);
	if(typeof(cch)!= 'undefined' && cch != null){
		verifch(chambre,e)
	}
});

chambre.addEventListener('blur',function(e){
	verifch(chambre,e);
	autreBat(batiment);
})

batiment.addEventListener('blur',function(e){
	verifbat(batiment,e);
	autreBat(batiment);
})

email.addEventListener('blur',function(e){
	verifmail(email,e);
})

nom.addEventListener('blur', function(e){
	verifLastName(nom,e);
})

prenom.addEventListener('blur',function(e){
	verifFirstName(prenom,e);
})

pseudo.addEventListener('blur',function(e){
	verifpseudo(pseudo,e);
})

passconf.addEventListener('blur',function(e){
	verifpass(pass,passconf,e);
})

pass.addEventListener('blur',function(e){
	if(pass.value.length< 8){
		warning = "Le mot de pass doit contenir au moins 7 caractères";
		document.getElementById("passMsg").innerHTML = warning;
		e.preventDefault();
	}
	else{
		document.getElementById("passMsg").innerHTML  = "";
	}
})
/*
*/
