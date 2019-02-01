//1.LIAISON DES LISTE DEROULANTS LORS DE LA SAISIE


var xhr=null;
// instance XMLHttpRequest  for all browsers_f°perso

function instanceAJAX() {
                if (window.XMLHttpRequest) {
                     // code for IE7+, Firefox, Chrome, Opera, Safari
                     xhr = new XMLHttpRequest();
                } else {
                     // code for IE6, IE5
                     xhr = new ActiveXObject("Microsoft.XMLHTTP");
                } /*else{ 
                    alert("Votre navigateur n'est pas compatible avec AJAX..."); 
                }*/
		}

/* ACCES AU SERVEUR(pour lire les fichier .txt)*/
function changement(prefecture){//list1 
	var index = prefecture.selectedIndex;//Identifie l'option selectionnée par l'utilisateur dans le 1er menu
	var valeur = prefecture[index].text;// retourne le texte de l'option (<option>texte</option>) càd OS ou Naviateur ou Programmation
	var liste_elements = document.getElementsByTagName("select"); // [ou document.formulaires.elements] tous les options du formulaires
	var list2elements = liste_elements["centretatcivil"];// list2, Seulements les options de la 2ème liste déroulante.
	url ="SERVEUR/centre/"+valeur + ".txt";//  OS.txt ou Naviateur.txt ou Programmation.txt


	if (valeur != "") {

		instanceAJAX();// instance XMLHttpRequest for IE7+, Firefox, Chrome, Opera, Safari // code for IE6, IE5
					   
						//Connection[au serveur ]   
						xhr.open("GET",url,true); 
						// Envoi
						xhr.send(null); 
		//Réception de la réponse du serveur [xmlhttp.responseText] et affichage 
		if(xhr) {// On s'assure que l'objet xhr a bien été créé
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4 && xhr.status == 200){
					var list2reponse = xhr.responseText;
					contenulist2(list2reponse, list2elements);
				}
			}
		 
		}
	}
}

// Construction du 2ème menu déroulant
function contenulist2(list2reponse, list2elements) {
	var list2options = list2reponse.split("*");
	//list2elements.length = 1;
	list2elements.length = list2options.length;
	for (i=1; i < list2elements.length; i++) {
		list2elements[i].text = list2options[i];
	}
}

/*********************

//2. CAPTURE DU CONTENU DE CHAMPS  Acte N° >> transmission de sa valeur à la page affiche2.php(l'acte) >>> Affichage dans un pop
		//au clic sur les items du sous-menu;Afficher(dans la div mnayvawo) la prefecture cliquée 
$(document).ready(function(){
		$("#c1").submit(function(){
			//var prefecture_ = $(this).text();// capter le contenu de l'item .islandX cliqué
			//$("#wilaya_").html(prefecture_);// le mettre dans #wilaya
			 actesaisi= $(this).text(); // recuperer le texte saisie
			//location.href='page1.php?matricule=' + actesaisie;
			//Comment transmettre actesaie à un url?
			
		});
});
*******************/