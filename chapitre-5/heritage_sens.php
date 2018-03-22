<?php

class A
{
    public function test()
    {
        return 'test';

    }

    protected function test4()
    {
        return 'test4';
    }
}

class B extends A
{
    public function test2()
    {
        return 'test2';
    }
}

class C extends B
{
    public function test3()
    {
        return 'test3';
    }
}

//-------
$c = new C();
echo $c->test() . '<br>'; //méthode de A accessible par C (héritage indirect)
echo $c->test2() . '<br>'; //méthode de B accesible par C (héritage direct)
echo $c->test3() . '<br>';//méthode de C accessible par C

//Array avec les héritages on voit que test3() est consulté en premier puis les héritages dans l'ordre
echo '<pre>';var_dump(get_class_methods($c));echo '</pre>';

//transitivité : si C hérite de B et que B hérite de A, alors C hérite de A.
//de même pour les protected

/*----------------------------------------------------------------------------------------
 *
 * Les méthodes protected de A sont accessible dans C même si l'héritage est indirect.
 * L'héritage est non réfléxif : Class D extends D une classe ne peut hérité d'elle même
 * Non SYMETRIQUE : ce n'est pas parceque E extends F que F va extends E
 * SANS CYCLE : si E extends F, il est impossible que F extends E
 * PAS MULTIPLE : Class N extends, M, P ==> pas possible en php il faut établir un héritage
 * INFINI : nombre infini d'héritier pour une même classe
 *
 *---------------------------------------------------------------------------------------- */
