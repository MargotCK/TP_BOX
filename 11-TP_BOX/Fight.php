<?php
/*3 -> Créer une classe Fight (Dans un fichier Fight.php)

-> Importez le fichier "Ippo" et le fichier "challenger" dans Fight.php

-> Dans la classe "Fight", créez une méthode "fighting" qui doit prendre deux paramètres. 
Le premier paramètre représente l'objet que vous avez instancié de la classe Ippo, 
et le second l'objet que vous avez instancié de la classe Challenger.

Dans cette méthode, mettez en place un système de rounds (10 rounds max) où les personnages s'affrontent tour par tour. 
Le personnage le plus rapide frappe en premier.

À chaque tour, la stamina doit être réduite par la force de celui qui frappe. 
Par exemple : $staminaIppo = $ippo->stamina - $challenger->strength.

Affichez à chaque round la stamina restante de chaque personnage.

Quand la stamina de l'un des deux personnages tombe à zéro, le combat est terminé.

Ajoutez la probabilité d'effectuer un coup critique (strength multiplié par 2).*/
?>

<?php 
    require_once('Ippo.php');
    require_once('Challenger.php');

class Fight
{ 

    
public function fighting($ippo, $challenger)
{
    for ($i=0; $i <=10; $i++) 
    {
        echo "stamina  ($i) \n";
    
    }
}
}
$fight = new Fight;
$fight->fighting($ippo, $challenger);

?>