<?php

class Homme
{

    private $prenom;
    private $nom;

    //SETTER qui va gérer la sécurité des données récupérées avant de pouvoir les attribués à une prop appelés en dehors
    public function setPrenom($arg)
    {
        if (is_string($arg) && strlen($arg) > 5 && strlen($arg) <= 30) {
            $this->prenom = $arg;
            return true;
        } else {
            return false;
            echo 'Erreur dans le prénom';
        }
    }
    // le GETTER qui permet de récupérer la valeur d'un paramètre privé en dehors de la class après contrôle
    //par le SETTER
    public function getPrenom()
    {
        return $this->prenom;
    }

}

//-----------
$homme = new Homme();

$homme->setPrenom('Arnaud');

echo 'Bonjour ' . $homme->getPrenom() . '!';

/*COMMENTAIRE
Pourquoi faire des getter et des setter?
    -le php est un language qui ne type pas ses variables. Donc
    mettre une visibilité private aux propriétés, et créer les setters pour vérifier l'intégrité des données
    est une BONNE contrainte.

    -Tout les personnes intervenant sur le code devra obligatoirement passer par le SETTER

    SETTER : affecter une valeur
    GETTER : récupérer une valeur
    On aura autant de SETTER / GETTER que de propriétés private

    $this représente l'objet en cours de manipulation
*/

