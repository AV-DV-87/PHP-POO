<?php

//on peut faire u require par fichier nécessaire mais peut devenir très fastidieux
//require ('A.class.php');
//require ('B.class.php');
//require ('C.class.php');
//require ('D.class.php');

//on va require un autoload qui "distribuera" les requires nécessaires
require('autoload.php');


$a = new A;
$b = new B;
$c = new C;
$d = new D;
