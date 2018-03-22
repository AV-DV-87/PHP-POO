<?php

//création d'un autoload en procédural

function inclusion_automatique($nom_de_classe)
{

    require($nom_de_classe . '.class.php');
    //require A.class.php

    //-------
    echo 'On passe dans l\'autoload<br>';
    echo 'L\'autoload fait : require('.$nom_de_classe.'.class.php)';

}
//attention antislash en local et slash en server donc reecriture à faire





//------------------------------------------------------------
spl_autoload_register('inclusion_automatique');

//------------------------------------------------------------
/*
 *
 * spl_autoload_register();
 * -s'execute dès que le server voit passer un 'new'
 * -Cette fonction va executer une fonction...la fonction passée en argument
 * - Va apporter à notre fonction le ou les mots qui se trouve après le mot 'new'
 *
 * $a = new A;
 * SPL AR lance inclusion_automatique('A'); donc le nom de la classe est récupéré
 *
 * */
















































