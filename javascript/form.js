
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


function verifname(name,ev){
	if(name.value.length>1){
		name.nextElementSibling.innerHTML = "";

	}
	else{
		warning = "Il doit y avoir au moins 2 caractères";
		name.nextElementSibling.innerHTML = warning;
		ev.preventDefault();
	}
}

function verifadd(name,ev){
	if(name.value.length>3){
		name.nextElementSibling.innerHTML = "";

	}
	else{
		warning = "Veuillez rentrer une adresse correcte";
		name.nextElementSibling.innerHTML = warning;
		ev.preventDefault();
	}
}


function verifpseudo(pseudo,ev){
	if(pseudo.value.length>6){
		pseudo.nextElementSibling.innerHTML = "";

	}
	else{
		warning = "Il doit y avoir au moins 6 caractères";
		pseudo.nextElementSibling.innerHTML = warning;
		ev.preventDefault();
	}
}


function verifpass(pass1,pass2,ev){

	if(pass1.value === pass2.value && pass1.value.length>8){
		pass2.nextElementSibling.innerHTML = "";
		pass1.nextElementSibling.innerHTML = "";
	}
	else if(pass1.value !== pass2.value){
		warning = "Les mots de pass doivent correspondre";
		pass2.nextElementSibling.innerHTML = warning;
		ev.preventDefault();
	}
	else if (pass1.value === pass2.value && pass1.value.length< 8){
		warning = "Le mot de pass est trop court";
		pass1.nextElementSibling.innerHTML = warning;
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
		email.nextElementSibling.innerHTML = "";
	}
	else{
		warning = "Veuillez rentrez une adresse mail correct";
		email.nextElementSibling.innerHTML = warning;
		ev.preventDefault();
	}
}

function verifbat(batiment,ev){
	dvch = document.getElementById('yolo');
	if(batiment.value == "null"){
		warning = "Veuillez choisir votre bâtiment";
		batiment.nextElementSibling.innerHTML = warning;
		ev.preventDefault();
	}
	else if(batiment.value == "autre"){
		dvch.parentNode.removeChild(dvch);
	}
	else{
		batiment.nextElementSibling.innerHTML = "";
	}
}

function recreate(){
	dch = document.createElement('div');
	dch.id = 'yolo';
	lbl = document.createElement('label');
	lbl.for = "Nch";
	txt1 = document.createTextNode("Numéro de chambre");
	inpp = document.createElement('input');
	inpp.type= 'text';
	inpp.name = 'nch';
	inpp.id = 'chambre';
	spp = document.createElement('span');
	lbl.appendChild(txt1);
	dch.appendChild(lbl);
	dch.appendChild(inpp);
	dch.appendChild(spp);
	return(dch);
}

function autreBat(batiment){
	if(batiment.value === "autre"){
		batiment.parentNode.appendChild(document.createTextNode('Adresse :'));
		addr = document.createElement('input');
	    addr.id = 'addr';
	    addr.type = 'text';
	    addr.name = 'addr';
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
        			batiment.parentNode.removeChild(batiment.parentNode.lastChild);
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
	verifname(nom,e);
	verifname(prenom,e);
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
	verifname(nom,e);
})

prenom.addEventListener('blur',function(e){
	verifname(prenom,e);
})

pseudo.addEventListener('blur',function(e){
	verifpseudo(pseudo,e);
})

passconf.addEventListener('blur',function(e){
	verifpass(pass,passconf,e);
})

pass.addEventListener('blur',function(e){
	if(pass.value.length< 8){
		warning = "Le mot de pass est trop court";
		pass1.nextElementSibling.innerHTML = warning;
		e.preventDefault();
	}
	else{
		pass1.nextElementSibling.innerHTML = "";
	}
})
/*
*/