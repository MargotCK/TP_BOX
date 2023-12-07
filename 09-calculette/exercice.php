<?php

/*Dans un dossier 09-calculette

Exercice 1 - Classe "Calculette

Écrivez une classe nommée "Calculette" qui accepte 2 arguments lors de l'instanciation : 
number1 et number2 et qui les renseignent en tant que propriété, avec des getter et setter.

La classe devra également être composée de ces 4 méthodes (qui n'auront pas d'arguments) :

additionner() : renvoie l'addition de nombre1 et nombre2
soustraire() : ...
multiplier() : ...
diviser() : ...

Exemple d'utilisation :

$calc = new Calculette(5, 7);
calc->additionner(); // doit afficher 12
Assurez-vous également que lors du changement d'un des nombre, ce dernier soit un Number. 
Sinon, levez une erreur :

Exemple :
calc->setNumber1("6"); // doit afficher une erreur "Ceci n'est pas un nombre!"
L'utilisation d'un setter pour vérifier la valeur entrante vous sera utile 😉*/



class Calculette
{
private $nb1;
private $nb2;

public function __construct($arg1,$arg2)
{
$this->nb1=$arg1;
$this->nb2=$arg2;
}
public function additionner() 
{
    return $this->nb1 + $this->nb2;
}
public function soustraire() 
{
    return $this->nb1 - $this->nb2;
}

public function multiplier()
 {
    return $this->nb1 * $this->nb2;
}
 
public function diviser()
{
    return $this->nb1 / $this->nb2;
}

}



$calculette = new Calculette(10, 2);
echo $calculette->additionner() . "\n";
echo $calculette->soustraire() . "\n";
echo $calculette->multiplier() . "\n";
echo $calculette->diviser() ."\n";
