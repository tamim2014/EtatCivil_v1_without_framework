// lectureBD.php :  c'est la page qui resulte de la recherche document par le bouton "Liste acte XXX"(panneau CENTRAL de la page d'accueil) 
	 
	// GESTION DES MENU DE LA PAGE lectureBD.php 
	 
        /***************************** script de base qui a ispiré le slide**********************
		*****************************************************************************************************
		*****************************************************************************************************
		$(document).ready(function(){
            $("#flip").click(function(){
                 $("#panel").slideToggle("slow");
            }); 
        });
       *******************************************************************************************************
	   *******************************************************************************************************
	   *******************************************************************************************************/
	   
	   
	   $(document).ready(function(){
		// Affichage du sous menu de gauche(liste des îles) au survol de la souris
            $("#m").mouseover(function(){
                 $("#panel2").show();
				 
            }); 
			/*********ça bouge trop je vais alors conditionne le $("#panel2").hide(); au bouton effacer du sous-menu
			$("#m").mouseout(function(){
                 $("#panel2").hide();
            });
			***************/
		//Faire en sorte qu'en cliquant sur le bouton "Imprimer", le bouton "Afficher" prene sa place et vis vers ça
				$("div#m a#show__").hide();
				$("div#m a#print__").click(function(){
					$("div#m a#show__").show();
					$("div#m a#print__").hide();
				});
				$("div#m a#show__").click(function(){
					$("div#m a#show__").hide();
					$("div#m a#print__").show();
				});
		//au clic sur les items du sous-menu; Afficher le bouton "imprimer"
				$(".island1, .island2, .island3").click(function(){
					$("div#m a#show__").hide();
					$("div#m a#print__").show();
				});
		//au clic sur les items du sous-menu;Afficher(dans la div mnayvawo) la prefecture cliquée 
				
				$(".island1, .island2, .island3").click(function(){
					var prefecture_ = $(this).text();// capter le contenu de l'item .islandX cliqué
					$("#wilaya_").html(prefecture_);// le mettre dans #wilaya
				});
		//ok! Maintenant Faire en sorte qu'en cliquant sur le bouton "Afficher", la 5eme colonne se transforme en "Afficher et nom imprimer" 
			
		// Affichage de la colonne "Imprimer" dans la table du pannau de droite
			
			$(' div.kangalaheMenu a#print__').click(function(e){ 
                  $('#yivawo').load($(this).attr('href'));
                  e.preventDefault();//Très important.Sinon redirection dans une autre page
             });
		// réa-Affichage de la colonne "Afficher" dans la table du pannau de droite
		
		     $(' div.kangalaheMenu a#show__').click(function(e){ 
                  $('#yivawo').load($(this).attr('href'));
                  e.preventDefault();
             });
		
		
		
		// Affichage sous-sous-menu(liste des prefecture) à droite, suite au passage de la souris sur le sous menu de gauche(listes des iles)
		// PRINCIPE:L'affichage d'un sous menu fait disparaitre les autres sous menu	
			$(".sousmenu1 ").hide(); $(".sousmenu2 ").hide(); $(".sousmenu3 ").hide();
			
			$(".island1").mouseover(function(){ 
				$(".sousmenu2 ").hide(); $(".sousmenu3 ").hide();    $(".sousmenu1").show();   
                 $(" .panel3").slideDown(3000); // on peu aussi utiliser fadeIn("slow");  ou fadeIn(3000); 
				 $(".piedmenu").fadeIn(3000);// CELUI-CI ne respecte pas la vitesse d'affichage.Pourquoi? parcequ'on l'a attribué un display:block (et on peut enlever ça sinon il va s'afficher dans la mm ligne que le bouton precedenr)
                
			});
			
			$(".island2").mouseover(function(){
				 $(".sousmenu1 ").hide();  $(".sousmenu3 ").hide();    $(".sousmenu2").show();  
                 $(" .panel3").slideDown(3000); 
				 $(".piedmenu").fadeIn(3000);
                 
			});
			
			$(".island3").mouseover(function(){
				  $(".sousmenu1 ").hide(); $(".sousmenu2 ").hide();    $(".sousmenu3").show();  
                 $(" .panel3").slideDown(3000);  
				 $(".piedmenu").fadeIn(3000);
                 
			});
		// Cacher manuellement les sous-menu en cliquant sur leur pieds de page
		//Cette action sera annoncé par unscript css3(hover:fond blanc+ message) voir lectureBD.css 
		    $(".piedSousMenuDroite").click(function(){
				// La 2ème commande devrait suffir à elle seule. Mais bizaremment son 1er argument et ignoré alors je l'ai appliqué séparement 
                // ça fait redondance mais bon ... g pas le choix!
				$(".sousmenu1 , .sousmenu2 , .sousmenu3 ").fadeOut("slow" ); 
				 $(".sousmenu1 , .sousmenu2 , .sousmenu3 ").fadeOut("slow",$("#panel2").show()  );
				 
				 $("#panel2").hide();// Fermeture du slide( contenant les 3 îles) au panneau de gauche
			});
			
			/****** aucun effet
			$("#print__").mouseover(function(){
				$("#print__").css("background-color","black");
			});
			 Aucun effet non plus
		    $(".piedMenuGauche").mouseover(function(){
				$(".piedMenuGauche").css("background-color","black");
			});
			*********************/
			

        });

 

//§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§
//---------------Page: lectureBD2.php(suite à une recherche sur le panneau gauche de la page d'accueil)---------------------------------------
//§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§

		 
		 
		  
// lectureBD2.php :  c'est la page qui resulte de la recherche document par le moteur de recherche(panneau de gauche de la page d'accueil)
        // instance XMLHttpRequest  for all browsers_f°perso
		function instanceXMLHttpRequest() {
                if (window.XMLHttpRequest) {
                     // code for IE7+, Firefox, Chrome, Opera, Safari
                     xmlhttp = new XMLHttpRequest();
                } else {
                     // code for IE6, IE5
                     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
		}
      // Cette fonction répond au clic sur le lien "Afficher"
	   function showActe(str) { // SUITE AU CLIC SUR LE LIEN "afficher"
            if (str == "") { 
			     document.getElementById("yivawo").innerHTML = ""; return; 
			} else { 

				instanceXMLHttpRequest();
				xmlhttp.open("GET","afficherdanspanel.php?n="+str,true); //"inc/lecture/afficherdanspanel.php?n="+str
                xmlhttp.send();
                xmlhttp.onreadystatechange = function() { 
				    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
					     document.getElementById("yivawo").innerHTML = xmlhttp.responseText;
						 /*
						  var reponseSERVEUR = xmlhttp.responseText;
						  var affichageDansDiv = document.getElementById("yivawo").innerHTML;
						  affichageDansDiv = reponseSERVEUR;
						 */ 
						}
					};
           
            }
        }
// Cette fonction répond au bouton"Zoom" ou au bouton "Affiche plein écran"
    function popup_lectureBD2()
        {    
           //window.open("http://google.fr/", "Autrepage", "toolbar=1, location=1, directories=1, status=1, scrollbars=1, resizable=1, copyhistory=1");
		     window.open("afficherdanspop.php", 'Popup', 'scrollbars=1, Menubar=1, resizable=1,height=409,width=918 ,  top=258, left=175 '); return false;          
		}
		

