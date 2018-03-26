<?php

        // Ouverture d'une connexion à la base etudiant
        $myPdo = new PDO('mysql:host=localhost;dbname=formation','objis','objis');

        // Préparation de la requête d'insertion
        $pdoStat = $myPdo->prepare('INSERT INTO etudiant VALUES (null, :niveau, :domaine, :nom, :prenom, :sexe, :dateNaiss, :lieuNaiss, :paysNaiss, :paysResid, :adresse, :phone, :mail, :statut)');

        // On lie chaque marqeur à une valeur
        $pdoStat->bindValue(':niveau', $_POST['niveau'], PDO::PARAM_STR);
        $pdoStat->bindValue(':domaine', $_POST['domaine'], PDO::PARAM_STR);
        $pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
        $pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
        $pdoStat->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR);
        $pdoStat->bindValue(':dateNaiss', $_POST['date'], PDO::PARAM_STR);
        $pdoStat->bindValue(':lieuNaiss', $_POST['lieu'], PDO::PARAM_STR);
        $pdoStat->bindValue(':paysNaiss', $_POST['nationalite'], PDO::PARAM_STR);
        $pdoStat->bindValue(':paysResid', $_POST['pays'], PDO::PARAM_STR);
        $pdoStat->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
        $pdoStat->bindValue(':phone', $_POST['tel'], PDO::PARAM_STR);
        $pdoStat->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);
        $pdoStat->bindValue(':statut', $_POST['situation'], PDO::PARAM_STR);

        //  Exécution de la requête préparée
        $insertIsOk = $pdoStat->execute();

        if($insertIsOk){
            $message = 'Inscription reussie !';
        }else{
             $message = 'Echec de l\'inscription !';
        }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/forms.css">
    <title>Livrable7 by isWane</title>
  </head>
  <body onload="desactiveSpan()">
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow col-10 offset-1">
        <img src="images/logosmall.PNG" srcset="images/logosmall.PNG" width="100" height="92" alt="Objis Logo" retina_logo_url="" class="fusion-standard-logo" />
        <nav class="navbar navbar-light my-2 my-md-0 mr-md-3 col-6" >
            <center>
                <a type="btn btn-info" class="btn btn-info" href="index.html">Accueil</a>
                <a type="btn btn-info" class="btn btn-info" href="#">Clients</a>
                <a type="btn btn-info" class="btn btn-info" href="#">Tutos</a>
                <a type="btn btn-info" class="btn btn-info" href="#">Catalogue</a>
                <a type="btn btn-info" class="btn btn-info" href="#">#10000Codeurs</a>
            </center>
        </nav>
        <form class="form-inline my-2 my-lg-0 col-4 offset-1">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button type="button" class="btn btn-info">Search</button>
         </form> 
      
    </div><br>
    <div class="container col-10 offset-1">
    <h1>Votre inscription a été enregistré avec succès !</h1>
    <h2>Merci de passer à la sécretariat pour confirmer votre inscription.</h2>
    <h3>Nous allons vous faire aimez Java !</h3>    
    </div>

      <footer class="container font-weight-bold pt-4 my-md-5 pt-md-5 col-10 offset-1 border-top">
        <div class="row">
           <div class="col-12 col-md">
            <h3>Objis</h3>
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
              <p>Adresse<br />
                    241 rue DUGUESCLIN,<br />
                    69003 Lyon</p>
              <a style="padding: 0;border-bottom: none" href="mailto:laye1wane@gmail.com">laye1wane@gmail.com</a>
          </div>
          <div class="col-6 col-md">
            <h5 class="widget-title">Liens les plus visités</h5>
            <ul id="menu-university-main-menu-1" class="list-unstyled">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-13135"><a href="index.html">Accueil</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13235"><a href="#">Clients</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13236"><a href="#">200 Tutos</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13237"><a href="#">Catalogue</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13239"><a href="#">#10000Codeurs</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15236"><a href="#">Nous Contacter</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5 class="widget-title">FORMATIONS JAVA 1</h5>
            <ul class="list-unstyled">
                <li>Formation <a class="spip_in" href="#">JAVA</a></li>
                <li>Formation <a class="spip_out" href="#">VULGARISATION JAVA</a></li>
                <li>Formation <a class="spip_in" href="#">’Performance Java’</a></li>
                <li>Formation <a class="spip_in" href="#">architecture JAVA</a></li>
                <li>Formation java <a class="spip_in" href="#">MAVEN</a></li>
                <li>Formation Java <a class="spip_in" href="#">STRUTS 2</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5 class="widget-title">FORMATIONS JAVA 2</h5>
                <ul class="list-unstyled">
                    <li>Formation <a class="spip_in" href="#">Javascript &amp; JQuery</a></li>
                    <li>Formation <a class="spip_in" href="#">java SPRING</a></li>
                    <li>Formation java <a class="spip_in" href="#">Fuse ESB</a></li>
                    <li>Formation java <a class="spip_in" href="#">ANDROID</a></li>
                    <li>Formation java <a class="spip_in" href="#">JBoss</a></li>
                    <li>Formation <a class="spip_in" href="#">JAVA Entreprise (JEE)</a></li>
                </ul>
          </div>
        </div>
      </footer>
      
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/forms.js"></script>
  </body>
</html>