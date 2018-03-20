<?php
/*Design pattern : modèle de conception :
 * réponse trouvée par d'autres développeurs à une question que beaucoup se posent.
 *--------------------------------------------------------------------------------- */
//singleton : c'est la réponse à la question suivante : comment créer une classe
//qui ne soit instanciable qu'une seule et unique fois (exemple : connexion BDD)

class Singleton
{
    private static $instance = NULL; //propriété qui appartient à la classe
    //et qui contiendra un objet de cette même classe après le premier et donc unique appel du getter

    private function __construct(){} //vérrouille la création de l'objet
    private function __clone() {} //fonction private, donc clonage impossible

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self; //équivaut à new Singleton
        }
        return self::$instance;
    }
    //souvent utilisé pour la connexion en BDD
}


// impossible de créer une instance
$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

echo '<pre>';
var_dump($singleton);
var_dump($singleton2);
echo '</pre>'; //donnent des références identiques car renvoi l'objet de sa première utilisation