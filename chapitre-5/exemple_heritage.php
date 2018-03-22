<?php

class Membre
{
    public $id_membre;
    public $pseudo;
    public $email;

    public function inscription()
    {

        return 'je m\'inscris';

    }

    public function connexion()
    {

        return 'Je me connecte !';

    }

}

//---------------------------------------------
class Admin extends Membre //admin hérite de Membre
{

    //l'Admin à les mêmes actions et les mêmes paramètres que Membre
    public function accesBackOffice()
    {
        return 'J\'accède au Back Office';
    }

}

//-------------------------
$admin = new Admin();

echo $admin->inscription() . '<br>';
echo $admin->connexion() . '<br>';
echo $admin->accesBackOffice() . '<br>';

//on ne réécrit pas le code deux fois et un objet Admin pourra utiliser les méthodes public de Membre