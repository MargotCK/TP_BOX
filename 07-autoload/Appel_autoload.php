<?php

//voici une méthode pour importer les fichiers A, B, C, D

/*require_once ('A.class.php');

require_once ('B.class.php');

require_once ('C.class.php');

require_once ('D.class.php');
*/


/*
Une autre méthode pour importer plusieurs fichier en une fois, facilement, et rapidement =dynamiquement.
POUR CELA ON UTILISE require_once ('autoload.php') autoload est le nom du fichier où l'on a mis en place la méthode dynamique.

*/

require_once('autoload.php');
//---------INSTANCES-------

$A = new A;
$B = new B;
$C = new C;
$D = new D;
