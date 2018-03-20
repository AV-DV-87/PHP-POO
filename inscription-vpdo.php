<?php
//Connexion à la BDDD
$pdo = new PDO('mysql:host=localhost;dbname=entreprise','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//attention au niveau de la sécurité les ERRMODE peuvent donner des infos à des pirates sur la BDD donc uniquement en dev

//affichage message de retour
$content='';




if($_POST) {

    $date_bdd = implode('-', array_reverse(explode('/', $_POST['date_embauche'])));

    $membre = $pdo->prepare("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)");
    $membre->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $membre->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $membre->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR); //bindParam autre méthode
    $membre->bindValue(':service', $_POST['service'], PDO::PARAM_STR);
    $membre->bindValue(':date_embauche', $date_bdd, PDO::PARAM_STR);
    $membre->bindValue(':salaire', $_POST['salaire'], PDO::PARAM_STR);

    $membre->execute();
    if($resultat->execute()) {
        $content .= '<div class="alert alert-success mt-1">Bienvenue parmis nous ! Vous pouvez vous connecter <a href="connexion.php">ICI</a></div>';
    }
}





?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inscription</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="text-center text-white bg-primary py-1 mt-2">INSCRIPTION</h2>
            <form class="py-3" method="post">
                <?=$content?>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Saisir votre prenom">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir votre nom">
                </div>
                <div class="form-group">
                    <label for="sexe">sexe</label>
                    <select class="form-control" id="sexe" name="sexe" placeholder="Saisir votre sexe">
                        <option value="m">H</option>
                        <option value="f">F</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service">Service</label>
                    <select class="form-control" id="service" name="service" placeholder="Saisir le service">
                        <option>Juridique</option>
                        <option>Administratif</option>
                        <option>Direction</option>
                        <option>Commercial</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date_embauche">Date d'embauche</label>
                    <input type="date" class="form-control" id="date_embauche" name="date_embauche" placeholder="Saisir la date d'embauche">
                </div>
                <div class="form-group">
                    <label for="salaire">Salaire</label>
                    <input type="number" class="form-control" id="salaire" name="salaire" placeholder="Saisir le salaire">
                </div>
                <button type="submit" class="btn btn-primary">Inscription</button>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>