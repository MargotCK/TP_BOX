<?php

function inclusionAutomatique($nomDeLaClasse)
{
    require_once($nomDeLaClasse . '.class.php');
    echo"On passe dans inclusionAutomatique ! \n";
    echo" require($nomDeLaClasse.class.php) \n";
}

spl_autoload_register('inclusionAutomatique');
/*
spl_autoload_register

cette méthode (magique) permet d'executer une fonction 
lorsque l'interpréteur(le script) voit passer le mot 'new' ds le code.

Le nom suivi de 'new' est récupéré et automatiquement 
transmis à la fonction inclusionAutomatique.
*/


?>