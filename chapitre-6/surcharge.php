<?php

//surcharge permet de modifier le comportement d'une méthode héritée, et d'y apporter des traitements supplémentaires
//(n'est pas une REDEFINITION)

class A
{
    public function calcul()
    {
        return 10;
    }
}

class B extends A
{
    public function calcul(){
        //faire en sorte que la fonction retourne 15
        // $this->calcul()+5; récursif car fait appel au calcul() de B et pas de A
        //return self::calcul() + 5 fait appel à un élément static donc pas ok
        return parent::calcul()+5; //opérateur parent qui récupère le comportement de calcul() de A en la modifiant
    }
}

$b=new B;
echo $b ->calcul();

/*----------------------------------------------------------------------------------------
 *
 * La notion de surcharge est importante, car elle permet d'aller plus loin dans les traitements
 * d'une fonction héritée. Par exemple quand on utilise un CMS, on ne doit pas toucher aux focntions
 * du coeur... mais on peut hériter de certaines classes, et apporter des modifications aux méthodes.
 *
 * Mot clé parent:: "fait référence aux traitements de la méthode originale déclarée dans la classe mère / parente"
 *
 *---------------------------------------------------------------------------------------- */