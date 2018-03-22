<?php

//LES METHODES MAGIQUES SONT DES FONCTIONS QUI S'EXECUTENT AUTOMATIQUEMENT EN FONCTION
// D'EVENEMENTS SPECIFIQUES.


class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    public function __construct()
    {
    }

    public function __set($nom, $valeur)
    {
        echo 'Hey oh, jeune Padawan que fais tu? La propriété ' . $nom . ' n\'existe pas.';
    }

    public function __get($nom)
    {
        echo 'La propriété ' . $nom . ' n\'existe pas';
        //c'est plutot en debug va vérifier que l'on appeelle pas une propriété qui n'existe pas
    }
}

$societe = new Societe();

//---__SET
$societe->adresse = "18 rue Geoffroy L'Asnier";
$societe->ville = "Paris";
$societe->cp = "75004";
$societe->pays = "France"; // si pas de propriétés magic SET on aurait pas eu d'erreur

// __SET intervient si on essaie d'attribuer une valeur à une propriété qui n'existe pas (tentative de création
// d'une propriété qui n'existe pas dans la class)
//SECURISATION envoie vers 404 par exemple

//---__GET
echo $societe->telephone;
//


/*
 * D'autres méthodes magiques existent :
 * -__call($nom, $arg) : s'execute lorsqu'on tente d'appeler une fonction qui n'existe pas.
 *
 * -__callStatic($nom, $args) : idem mais pour les méthodes static
 *
 * -__destruct() : s'execute à la fin du script exemple fermeture d'accès à la BDD
 * fermeture de fichier par exemple
 *
 * Liste non exhaustive
 *
 * __isset au isset()
 *
 * __wakeup
 *
 * __sleep
 *
 * __clone
 *
 * __invoke
 */
















































