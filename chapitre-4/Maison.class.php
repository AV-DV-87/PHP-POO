<?php

class Maison
{
    public $couleur = 'blanc'; //à l'objet
    public static $espaceTerrain = '500m2';//à la classe
    private $nbPorte = 10;//à l'objet
    private static $nbPiece = 7;//à la classe
    const HAUTEUR = '10m';//à la classe (public static)

    public function getNbPorte()  //à l'objet
    {
        return $this->nbPorte; //utilisation d'un private à l'intérieur de la classe
    }

    public static function getNbPiece() //à la classe
    {
        return self::$nbPiece; //un terme de notre choix à la place de self
    }


}

//------------


$maison = new Maison;

//espace terrain appartient à la classe en fixe
//il ne peut être redéfini par une nouvelle classe et peut être appelé sans créer d'instance
echo Maison::$espaceTerrain . '<br>';
//echo Maison::$nbPiece . '<br>'; //Static oui mais c'est pas possible car toujours private

echo $maison->couleur . '<br>'; //ok accès possible car public
//echo $maison->espaceTerrain . '<br>'; ERREUR on ne peut accéder à un élément static donc

//echo $maison -> nbPorte; //pas possible car visibilité privé donc pas possible à l'exterieur => GETTER donc
echo $maison->getNbPorte();

echo Maison::getNbPiece() . '<br>';
echo Maison::HAUTEUR . '<br>';

/*-------------------------------------------------------------------
 *
 * Les différents opérateurs:
 *          $objet-> = élément d'un objet à l'exterieur de la class
 *          $this->  = élément d'un objet à l'intérieur de la class
 *          Class::  = élément d'une classe à l'extérieur de la classe
 *          self ::  = élément d'une classe à l'intérieur de la classe
 * CHEMINENMENT
 * Est ce que c'est statique?
 *      oui : à l'intérieur ou à l'exterieur de la classe?
 *            ->intérieur : self::
 *            ->exterieur : Class::
 *      non à l'intérieur ou à l'extérieur de la class?
 *            ->intérieur : $this ->
 *            ->exterieur : $objet ->
 *
 * CONSTANTE appartient à la classe et ne peut pas être modifiée = public static sans modification
 *
 *------------------------------------------------------------------- */