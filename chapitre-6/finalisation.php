<?php

final class Application
{
    public function run()
    {
        return 'Lancement de l\'application!';
    }
}

//class Extension extends Application //ERREUR impossible d'hériter d'une classe finale

class Application2
{
    final public function run2()
    {
        return 'Lancement de l\'application !';
    }
}

class Extension2 extends Application2
{
    //plus de surcharge ou définition possible sur la fonction run2() car
    //elle est finale
    //public function run2(){} // Erreur on peut redefinir ni recharger

}




/*----------------------------------------------------------------------------------------
 *  -Une class finale ne peut PAS être héritée
 * -Les méthodes d'une classe finale sont forcément finale par définition
 * -une classe finale peut être instanciée
 *
 * -une fonction finale peut être présent dans une class normale
 * -une méthode finale ne peut pas être surchargée ou redéfinie
 *
 *---------------------------------------------------------------------------------------- */
