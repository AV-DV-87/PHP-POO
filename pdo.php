<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 21/03/2018
 * Time: 14:21
 */

//connexion à la BDD
//$pdo = new PDO ('mysql:host=localhost;dbname=entreprise','root', '');

//erreur de requete volontaire
//$resultat = $pdo -> query("ifrohgfirehgireg");
//pas d'erreur visible à l'écran

//nouvelle connexion
//$pdo = new PDO ('mysql:host=localhost;dbname=entreprise','root', '',
//    array(//options du PDO ou modif des options par défaut
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
//        // mettre seulement en dev, le connexion coté prod n'aura pas cette connexion
//
//    ));


//utilisation des exceptions
$pdo = new PDO ('mysql:host=localhost;dbname=entreprise', 'root', '',
    array(//options du PDO ou modif des options par défaut
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        // mettre seulement en dev, le connexion coté prod n'aura pas cette connexion

    ));

//code à tester
try {
    $resultat = $pdo->query("ihgirhgirhgr");
} //récupère les erreurs et les mets en forme
catch (PDOException $e) {
    echo '<div style="color: white; background:red; padding:10px">';
    echo 'Erreur SQL: <br>';
    echo 'Code : ' . $e->getCode() . '<br>';
    echo 'Message : ' . $e->getMessage() . '<br>';
    echo 'Fichier : ' . $e->getFile() . '<br>';
    echo 'Ligne : ' . $e->getLine() . '<br>';
    echo '</div>';

    $f = fopen('error.txt', 'a');

    $ligne = 'Erreur SQL : ' . date('d/m/Y') . '--' . 'code : ' . $e->getCode() . '-' . '192.168.03.15';

    fwrite($f, $ligne . "\r\n");


}

//MARQUEUR ?
$prenom = 'Amandine';
$nom = 'TOTO';

//---Methode 1
$resultat = $pdo->prepare("SELECT * FROM employes WHERE prenom = :prenom and nom =:nom");
$resultat->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$resultat->bindValue(':nom', $nom, PDO::PARAM_STR);
$resultat->execute();

//---Methode 2
$resultat = $pdo->prepare("SELECT * FROM employes WHERE prenom = :prenom and nom =:nom");
//marqueur nominatif donc pas d'ordre
$resultat->execute(array(
    'nom' => $nom,
    'prenom' => $prenom
));

//---Methode 3 avec marqueur NON NOMINATIF
//rend les requêtes dynamiques

$resultat = $pdo->prepare("SELECT * FROM employes WHERE prenom = ? and nom = ?");
//marqueur nominatif donc pas d'ordre
$resultat->execute(array(
    $nom,
    $prenom
));




