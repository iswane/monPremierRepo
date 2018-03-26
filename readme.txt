		
			
			******************************
		**** Description du site web     ****
			******************************
	
	Ce site web est un exemple de site d'université ou d'école de formation. Il présente différentes formations
	qu'une école ou université propose. Avec une description de chaque formation.
 	Il a comme contenu une page d'accueil avec différentes options proposées à savoir une entête avec barre de 
	navigation, du contenu au milieu avec des photos et du texte et enfin le pied de page.
	La fonctionnalité phare de ce site est un formulaire d'inscription qui est accessible en haut à gauche
	de la barre de navigation.
	Le formulaire a pour principale objectif de permettre aux étudiants de postuler pour une formation en ligne
	pour avoir un gain de temps	avant de se présenter à la secrétariat pour compléter les formalités. 

	NB: Pour accéder au service d'inscription, on clique sur le bouton 'Inscription' qui se trouve en haut à gauche de
	la barre de navigation.

			*********************************
		****    Prérequis avant exécution	 *****
			*********************************
		
	Il faut mettre en place un serveur web local sur son ordinateur.
	Vous pouvez soit installer WAMPSERVER ou XAMPP.
	Nous dans nôtre cas nous allons utiliser XAMPP qui est beaucoup plus facile à utiliser.
	
	Pour l'installation merci de suivre les étapes suivantes:

	- Rendez-vous sur le site officiel de apachefriends : https://www.apachefriends.org/fr/index.html
	- Dans la zone de droite de la barre de navigation vous cliquez sur ’Télécharger’
	- Il vous propose différentes versions, vous choisissez la dernière version disponible
	- Et cliquez sur ’Télécharger(32)’. Le téléchargement commence.
	NB: Il n'existe que la version 32bits pour Windows.
	
	A la fin du téléchargement vous disposez d'un fichier exécutable.
	- Double cliquez sur le fichier téléchargé. L’assistant d’installation se lance
	- Cliquez sur le bouton ’Next’ de la première fenêtre qui va s'affiché
	- Pour la fenêtre qui suit vous décocher tous les autres composants à part MYSQL et phpMyAdmin
	- Ensuite acceptez les options par défaut et cliquez sur Next tout au long de l'installation
	- Vous arrivez à l’écran de fin d’installation, qui vous précise que l’installation s’est bien déroulée 
	- Cliquez sur Close: L’installation de Xampp est terminée. 
	
			*************************************
		**** Création et importation de la base	 *****
			*************************************
			
	Après cette étape vous aller devoir créer une base de donnée et importer la base du site qui se trouve sur
	le dossier 'LivrableWeb\src\schema'.
	
	- Assurer vous que les services Mysql et Apache sont démarrés en faisant comme ceci: double cliquez sur 
	'xampp_start' qui se trouve sur le dossier 'c:\xampp' de votre répertoire d'installation de xampp.
	Cliquez sur 'start' pour Apache et 'start' sur MySQL et attendez pour voir si les labels Apache et MySQL 
	sont en verts. Le fait qu'il soit en vert montre que xampp est démarré.
	- Ouvrir un navigateur et saisissez à la barre d'adresse 'http://localhost/phpmyadmin/' pour accéder à la page
	phpMyAdmin.
	- Cliquez sur 'Nouvelle base de données' qui se trouve à gauche de l'écran, renseignez comme nom de la base
	'formation' puis cliquez sur 'créer' et la base 'formation' est créée.
	- Après création de la base, cliquez sur 'Importer' puis cliquez sur 'Choisir un fichier', une fenêtre va s'ouvrir
	et là vous allez sur le 'LivrableWeb\src\schema', sélectionnez le fichier 'formation.sql' et cliquez sur 'ouvrir'.
	- Ensuite vous cliquez sur 'Exécuter' qui se trouve en bas de la page.
	La base de donnée du site est disponible, vous pouvez maintenant utiliser toutes les fonctionnalités du site web.
	Il ne vous reste plus qu'à déployer votre site sur le serveur web local.
	

			 *****************************************************
		***** 	Déploiement du site web sur le serveur web local  ****
			 *****************************************************

	Veuillez suivre les indications suivantes:
		
	1) En premier lieu, il faut d'abord décompresser le dossier 'LivrableWeb\livrable7', ensuite vous copiez le dossier 
	'livrable7' décompressé et le placer dans le dossier d'installation de vôtre Xampp dans 'C:\xampp\htdocs'.

	2) Assurer vous que les services Mysql et Apache sont démarrés en faisant comme ceci: double cliquez sur 
	'xampp_start' qui se trouve sur le dossier 'C:\xampp'. Cliquez sur 'start' pour Apache et 'start' sur MySQL et attendez
	pour voir si les labels Apache et MySQL sont en verts. Le fait qu'il soit en vert montre que xampp est démarré.

	3) Ouvrir un navigateur et saisissez à la barre d'adresse 'http://localhost/Livrable7/index.html' pour accéder
	sur le site.
	
	Vous pouvez maintenant utiliser toutes les fonctionnalités disponible de vôtre site web.
	
	
			 **************************************
		***** Respect des contraintes de livraison *****
			 **************************************
	1) Formulaire HTML5         => src\Formulaire.html et src\index.html
	2) Feuille de style CSS		=> src\css\forms.css	
	3) Programmation javaScript	=> src\js\forms.js
	4) Code PHP5				=> src\formulaire.php
	5) Base de donnée MySQL		=> schema\formation.sql
	6) Framework Bootstrap		=> les répertoires src\css et src\js		
			
