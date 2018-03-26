		
			
			******************************
		**** Description du site web     ****
			******************************
	
	Ce site web est un exemple de site d'universit� ou d'�cole de formation. Il pr�sente diff�rentes formations
	qu'une �cole ou universit� propose. Avec une description de chaque formation.
 	Il a comme contenu une page d'accueil avec diff�rentes options propos�es � savoir une ent�te avec barre de 
	navigation, du contenu au milieu avec des photos et du texte et enfin le pied de page.
	La fonctionnalit� phare de ce site est un formulaire d'inscription qui est accessible en haut � gauche
	de la barre de navigation.
	Le formulaire a pour principale objectif de permettre aux �tudiants de postuler pour une formation en ligne
	pour avoir un gain de temps	avant de se pr�senter � la secr�tariat pour compl�ter les formalit�s. 

	NB: Pour acc�der au service d'inscription, on clique sur le bouton 'Inscription' qui se trouve en haut � gauche de
	la barre de navigation.

			*********************************
		****    Pr�requis avant ex�cution	 *****
			*********************************
		
	Il faut mettre en place un serveur web local sur son ordinateur.
	Vous pouvez soit installer WAMPSERVER ou XAMPP.
	Nous dans n�tre cas nous allons utiliser XAMPP qui est beaucoup plus facile � utiliser.
	
	Pour l'installation merci de suivre les �tapes suivantes:

	- Rendez-vous sur le site officiel de apachefriends : https://www.apachefriends.org/fr/index.html
	- Dans la zone de droite de la barre de navigation vous cliquez sur �T�l�charger�
	- Il vous propose diff�rentes versions, vous choisissez la derni�re version disponible
	- Et cliquez sur �T�l�charger(32)�. Le t�l�chargement commence.
	NB: Il n'existe que la version 32bits pour Windows.
	
	A la fin du t�l�chargement vous disposez d'un fichier ex�cutable.
	- Double cliquez sur le fichier t�l�charg�. L�assistant d�installation se lance
	- Cliquez sur le bouton �Next� de la premi�re fen�tre qui va s'affich�
	- Pour la fen�tre qui suit vous d�cocher tous les autres composants � part MYSQL et phpMyAdmin
	- Ensuite acceptez les options par d�faut et cliquez sur Next tout au long de l'installation
	- Vous arrivez � l��cran de fin d�installation, qui vous pr�cise que l�installation s�est bien d�roul�e 
	- Cliquez sur Close: L�installation de Xampp est termin�e. 
	
			*************************************
		**** Cr�ation et importation de la base	 *****
			*************************************
			
	Apr�s cette �tape vous aller devoir cr�er une base de donn�e et importer la base du site qui se trouve sur
	le dossier 'LivrableWeb\src\schema'.
	
	- Assurer vous que les services Mysql et Apache sont d�marr�s en faisant comme ceci: double cliquez sur 
	'xampp_start' qui se trouve sur le dossier 'c:\xampp' de votre r�pertoire d'installation de xampp.
	Cliquez sur 'start' pour Apache et 'start' sur MySQL et attendez pour voir si les labels Apache et MySQL 
	sont en verts. Le fait qu'il soit en vert montre que xampp est d�marr�.
	- Ouvrir un navigateur et saisissez � la barre d'adresse 'http://localhost/phpmyadmin/' pour acc�der � la page
	phpMyAdmin.
	- Cliquez sur 'Nouvelle base de donn�es' qui se trouve � gauche de l'�cran, renseignez comme nom de la base
	'formation' puis cliquez sur 'cr�er' et la base 'formation' est cr��e.
	- Apr�s cr�ation de la base, cliquez sur 'Importer' puis cliquez sur 'Choisir un fichier', une fen�tre va s'ouvrir
	et l� vous allez sur le 'LivrableWeb\src\schema', s�lectionnez le fichier 'formation.sql' et cliquez sur 'ouvrir'.
	- Ensuite vous cliquez sur 'Ex�cuter' qui se trouve en bas de la page.
	La base de donn�e du site est disponible, vous pouvez maintenant utiliser toutes les fonctionnalit�s du site web.
	Il ne vous reste plus qu'� d�ployer votre site sur le serveur web local.
	

			 *****************************************************
		***** 	D�ploiement du site web sur le serveur web local  ****
			 *****************************************************

	Veuillez suivre les indications suivantes:
		
	1) En premier lieu, il faut d'abord d�compresser le dossier 'LivrableWeb\livrable7', ensuite vous copiez le dossier 
	'livrable7' d�compress� et le placer dans le dossier d'installation de v�tre Xampp dans 'C:\xampp\htdocs'.

	2) Assurer vous que les services Mysql et Apache sont d�marr�s en faisant comme ceci: double cliquez sur 
	'xampp_start' qui se trouve sur le dossier 'C:\xampp'. Cliquez sur 'start' pour Apache et 'start' sur MySQL et attendez
	pour voir si les labels Apache et MySQL sont en verts. Le fait qu'il soit en vert montre que xampp est d�marr�.

	3) Ouvrir un navigateur et saisissez � la barre d'adresse 'http://localhost/Livrable7/index.html' pour acc�der
	sur le site.
	
	Vous pouvez maintenant utiliser toutes les fonctionnalit�s disponible de v�tre site web.
	
	
			 **************************************
		***** Respect des contraintes de livraison *****
			 **************************************
	1) Formulaire HTML5         => src\Formulaire.html et src\index.html
	2) Feuille de style CSS		=> src\css\forms.css	
	3) Programmation javaScript	=> src\js\forms.js
	4) Code PHP5				=> src\formulaire.php
	5) Base de donn�e MySQL		=> schema\formation.sql
	6) Framework Bootstrap		=> les r�pertoires src\css et src\js		
			
