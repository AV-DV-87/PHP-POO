<?php

class Panier{

    //En POO variable = propriété et function = méthode

    public $nbProduit; //cette propriété est public et n'a pas de valeur
    public function ajouterProduit(){
        //traitement de la méthode
        return 'L\'Article a été ajouté';
    }

    protected function retirerProduit(){
        return 'L\'article a été supprimé du panier';
    }

    private function afficherPanier(){
        return 'Voici les articles dans le panier !';
    }
    //------------
}

$panier1 = new Panier;
//créé un nouvel objet Panier qui n'a pas d'argument donc pas de () une INSTANCE

//structure de panier1
echo '<pre>';

var_dump($panier1);

echo 'Voici les method de l\'objet panier';
//obtenir les methods que contient la class (seulement les publics)
var_dump(get_class_methods($panier1));

echo '</pre>';

$panier1 -> nbProduit = 5;
//affectation de la valeur 5 dans la propriété nbProduit de Panier1
// la -> permet d'accéder à un élément de la class que ce soit une méthode ou une propriété
echo 'il y a '.$panier1->nbProduit.' produit(s) dans votre panier<br/>';
echo'Panier : '.$panier1 -> ajouterProduit().'<br/>';

$panier2 = new Panier();

echo '<pre>';
echo 'les valeurs attribuées à Panier 1 n\'ont pas modifiées les valeurs des propriétés de la Class';
//il est toujours null
var_dump($panier2);
echo '</pre>';

/*ERREUR on ne peut pas accéder à une méthode protégée ou privée en dehors de la class';
echo'Panier : '.$panier1 -> retirerProduit().'<br/>';*/

/*NEW est un mot clé qui permet de créer un objet issu d'une classe.
On parle d'instanciation.
Niveaux de visibilité : public: accessible de partout interieur et exterieur de la classe
-protected: Accessible à l'interieur de la classe et des classes héritières
-private: accessible uniquement dans la classe où l'élément est déclaré
On peut créer plusieurs objets issus d'une même classe.*/