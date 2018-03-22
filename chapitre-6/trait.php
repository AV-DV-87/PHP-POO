<?php

//attention les traits ne fonctionnent que depuis php 5.4

trait TPanier
{
    public $nbProduit = 1;

    public function affichageProduits()
    {
        return 'Affichage des produits';

    }

}

//-------------
trait TMembre
{
    public function affichageMembre()
    {
        return 'Affichage des membres';
    }
}

class Site
{
    use TPanier, TMembre;
    //on importe tout le code contenu dans les traits TPanier et TMembre
}

$site = new Site;
echo $site->affichageProduits() . '<br>';
echo $site->affichageMembre() . '<br>';

/*----------------------------------------------------------------------------------------
 *
 * -Les traits ont été inventés pour compenser l'héritage non multiple de php
 * -Une classe peut hériter d'une seule classe mais importer plusieurs trait
 * -un trait peut importer un ou des traits
 *
 *---------------------------------------------------------------------------------------- */
