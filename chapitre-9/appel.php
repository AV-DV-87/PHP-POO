<?php
//Les NAMESPACES sont des tiroirs virtuels
//---appel
//---espace1
//---espace2
//Comment compartimenter l'utilisation des classes au sein des différents fichiers?
//

namespace General;

//préciser que l'on utliser d'autre namespace car ils son en dehors du namespace défini dans ce fichier
use PDO;
use espace1;
use espace2;

require('espace1.php');
require('espace2.php');

//url virtuel pour permettre de naviguer jusqu'au name space
$c = new namespace\espace1\A();

echo $c->test() . '<hr>';

$d = new namespace\espace2\A();
echo $d->test2() . '<hr>';


/*----------------------------------------------------------------------------------------
 * -utilisé par utilisateur ou par fonctionnalité
 * -fait partie de l'architecture à definir
 * -utile pour les applications vastes et organisées (framework a ses propres namespace)
 * -plusieurs fichiers peuvent faire partie du même namespace (tri/rangement)
 * -les namespaces permettent de déclarer des espaces virtuels afin de mieux organiser
 * nos fichiers, et aussi mieux gérer le travail collaboratif
 *
 * REGLES UTILISATION
 * -On appelle une class avec son nom complet : $a = new Espace1\A
 * -Pour pouboir utiliser les classes d'un autre namespace ou de l'espace global de PHP
 * (PDO par exemple), on doit au choix :
 *          -Définir le chemin complet
 *          -importer les classes et les namespaces avec l'instruction "use"
 *
 *---------------------------------------------------------------------------------------- */