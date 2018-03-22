<?php

abstract class Joueur
{
    public function seConnecter()
    {
        //pour accéder ce site il faut être majeur
        return $this -> etreMajeur();

    }
    abstract public function etreMajeur(); //pas de corps dans la fonction abstraite
}

//les developpeur FR et US vont être obligé de redéfinir cette fonction pour lui donné une valeur de retour

class JoueurFr extends Joueur
{
    public function etreMajeur()
    {
        return 18;// TODO: Implement etreMajeur() method.
    }
}

class JoueurUs extends Joueur
{
    public function etreMajeur()
    {
        return 21;// TODO: Implement etreMajeur() method.
    }
}

//------------------------------------------------

$joueurFR = new JoueurFr();
echo $joueurFR->seConnecter() .'<br>';

$joueurUs = new JoueurUs();
echo $joueurUs->seConnecter() .'<br>';



/*----------------------------------------------------------------------------------------
 *
 * -une classe abstraite ne peut être instanciée
 * -les méthodes abstraites n'ont pas de contenu (pas de corps)
 * -pour déclarer une méthode abstraite, il faut être dans une class abstraite
 * -Une class abastraite peut aussi contenir des méthodes "normales"
 *
 * Le développeur qui écrit la classe abstraite est souvent au coeur de l'application...
 * (LEAD)
 *
 *---------------------------------------------------------------------------------------- */