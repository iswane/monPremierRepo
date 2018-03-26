function validationFormulaire(){
	var niveau, domaine, nom, prenom, date, lieu, nationalite, adresse, paysNaissance, paysResidence, email, sexe, situation;
	
	niveau = document.getElementById('niveau').value;
    domaine = document.getElementById('domaine').value;
	nom = document.getElementById('nom').value;
	prenom = document.getElementById('prenom').value;
	date = document.getElementById('date').value;
    lieu = document.getElementById('lieu').value;
    tel = document.getElementById('tel').value;
	adresse = document.getElementById('adresse').value;
	pays = document.getElementById('pays').value;
    nationalite = document.getElementById('nationalite').value;
    email = document.getElementById('email').value;
	
    var valeurSexe = document.getElementsByName('sexe');
	for(i=0; i<valeurSexe.length; i++){
		if(valeurSexe[i].checked){
			sexe = valeurSexe[i].value;
		}
	}
    
    var valeurSituation = document.getElementsByName('situation');
	for(i=0; i<valeurSituation.length; i++){
		if(valeurSituation[i].checked){
			situation = valeurSituation[i].value;
		}
	}
	
	if(validationNiveau() == true && validationDomaine() == true && validationNom() == true && validationPrenom() == true && validationDate() == true && validationLieu() == true && validationNationalite() == true && validationPaysResidence() == true && validationSexe() == true && validationSituation() == true){
		      alert('formulaire envoyer avec succès !');
                return false;
		}else{
			alert('Veuillez respecter les contraintes de saisies !');
            return false;
		}
	
}

function desactiveSpan(){
	
	var small = document.getElementsByTagName('small');
	
	var smallsLenght = small.length;
	for(i=0; i<smallsLenght; i++){
		small[i].style.display = 'none';
	}
}



function getSpan(element){ // Cette méthode renvoie l'élément span correspondant à l'input.
	
	while (element = element.nextSibling){ // C'est pour parcourir les éléments restants du document html.
		if(element.className === 'allSpans'){
			return element;
		}
	}
	
	return false;
}

function validationNiveau(){
	var elementNiveau = document.getElementById('niveau');
	var niveau = document.getElementById('niveau');
	var isCorrect = false;
	
	spanCorres = getSpan(elementNiveau).style;
	if(niveau.options[niveau.selectedIndex].value != 'none'){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}

function validationDomaine(){
	var elementDomaine = document.getElementById('domaine');
	var domaine = document.getElementById('domaine');
	var isCorrect = false;
	
	spanCorres = getSpan(elementDomaine).style;
	if(domaine.options[domaine.selectedIndex].value != 'none'){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}

function validationNom(){
	var elementNom = document.getElementById('nom');
	var nom = document.getElementById('nom').value;
	var isCorrect = false;
	
	spanCorres = getSpan(elementNom).style;
	if(nom.length >= 2){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}

function validationPrenom(){
	var elementPrenom = document.getElementById('prenom');
	var prenom = document.getElementById('prenom').value;
	var isCorrect = false;
	
	spanCorres = getSpan(elementPrenom).style;
	if(prenom.length >= 2){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}

function validationDate(){
	var elementDate = document.getElementById('date');
	var date = document.getElementById('date').value;
	var isCorrect = false;
	
	spanCorres = getSpan(elementDate).style;
	if(date.length > 0){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}

function validationLieu(){
	var elementLieu = document.getElementById('lieu');
	var lieu = document.getElementById('lieu').value;
	var isCorrect = false;
	
	spanCorres = getSpan(elementLieu).style;
	if(lieu.length > 0){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}

function validationNationalite(){
	var elementNationalite = document.getElementById('nationalite');
	var nationalite = document.getElementById('nationalite');
	var isCorrect = false;
	
	spanCorres = getSpan(elementNationalite).style;
	if(nationalite.options[nationalite.selectedIndex].value != 'none'){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}
function validationPaysRésidence(){
	var elementPays = document.getElementById('pays');
	var pays = document.getElementById('pays');
	var isCorrect = false;
	
	spanCorres = getSpan(elementPays).style;
	if(pays.options[pays.selectedIndex].value != 'none'){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}

function validationSexe(){
	var elementSexe = document.getElementsByName('sexe');
	var sexe = document.getElementsByName('sexe');
	var isCorrect = false;
	
	spanCorres = getSpan(elementSexe).style;
	if(sexe[0].checked || sexe[1].checked){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}

function validationSituation(){
	var elementSituation = document.getElementsByName('situation');
	var situation = document.getElementsByName('situation');
	var isCorrect = false;
	
	spanCorres = getSpan(elementSituation).style;
	if(situation[0].checked || situation[1].checked){
		spanCorres.display = 'none';
		isCorrect = true;
	}else{
		spanCorres.display = 'inline-block';
	}
	return isCorrect;
}
