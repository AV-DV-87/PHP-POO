<?php

interface Mouvement
{
    public function start();
    public function turnLeft();
    public function turnRight();
}

class Avion implements Mouvement
{
    public function demarrer(){} //Erreur
    public function tourneDroite(){} //Erreur
    public function tourneGauche(){} //Erreur
    //

}

class Bateau implements Mouvement
{
    public function start()
    {

    }
    public function turnRight()
    {

    }
    public function turnLeft()
    {

    }
}

/*----------------------------------------------------------------------------------------
 *
 * -Une interface est une liste de méthodes (abstract) sans contenu qui ^permet de garantir que
 * toutes les classes qui implements l'interface contiendront au moins toutes les méthodes de l'interface
 * avec les mêmes noms. C'est une sorte de lexique, ou de contrat passé entre le dev' maître et les autres
 * développeurs.
 *
 * -une interface n'est pas instanciable
 * -Bateau et avion peuvent par exemple hérité d'une classe Vehicule et implementer l'interface Mouvement
 *
 * -les methodes d'une interface sont forcément public sinon elle ne pourraient pas être redéfinies
 *
 *
 *---------------------------------------------------------------------------------------- */