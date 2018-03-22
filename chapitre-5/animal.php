<?php


class Animal
{

    protected function deplacement()
    {
        return 'Je me déplace';
    }

    public function manger()
    {
        return 'je mange';
    }
}

//--------------------
class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return 'Je suis un Elephant, et ' . $this->deplacement() . ' !<br>';
    }
}


class Chat extends Animal
{
    public function quiSuisJe()
    {
        return 'Je suis un Elephant, et ' . $this->deplacement() . ' !<br>';
    }

    //redéfinition de fonction pour l'adapter à cette class
    public function manger()
    {
        return 'je mange peu';
    }

}

//---------------------------------------------------------
$eleph = new Elephant;
echo $eleph -> manger() . '<br>';
echo $eleph -> quiSuisJe() .'<br>';

$chat = new Chat();
echo $chat -> manger() . '<br>';
echo $chat -> quiSuisJe() .'<br>';

/*----------------------------------------------------------------------------------------
 * L'héritage est un des fondements de la programmation orienté objet (tous les langages).
 * Lorsq'une classe hérite d'une autre classe, elle importe tout le code. Les éléments sont appelés $this à l'intérieur
 * la class.
 *
 * Redéfinition de fonction : une classe enfant ou héritière peut modifier entièrement une fonction
 * dont elle a hérité = REDEFINITION (vs la SURCHARGE qui conserve une partie)
 *
 * L'interpréteur va d'abord regarder si la méthode existe dans la classe qui l'éxécute puis dans la classe mère.
 *
 *---------------------------------------------------------------------------------------- */