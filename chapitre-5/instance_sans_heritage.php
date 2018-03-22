<?php

class A
{
    public function direBonjour()
    {
        return 'Bonjour';
    }
}

class B
{

}

class C extends B
{

    public $maVariable; //contient un objet de la classe A

    //la création d'un objet de class C va créer une variable contenant un objet A
    public function __construct()
    {
        $this->maVariable = new A;
    }

}

$c = new C;

//instance sans heritage
echo $c->maVariable->direBonjour();

/*----------------------------------------------------------------------------------------
 *
 * TODO : nous avons un objet A à l'intérieur de l'objet C. Instance sans héritage a pour principal
 * avantage de d'hérite d'une classe mère d'un côté tout  en récupérant les éléments d'une autre classe
 * = CONTOURNEMENT DE L'HERITAGE MUTLIPLE IMPOSSIBLE
 *Permet de déploiement d'application (objet C déploie un objet A qui déploie un objet E....
 *
 *---------------------------------------------------------------------------------------- */