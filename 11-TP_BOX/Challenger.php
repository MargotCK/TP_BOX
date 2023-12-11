<?php


/*Créez une classe Ippo. Cette classe doit avoir 4 propriétés (name, stamina, speed, strength). Chacune de ces propriétés doit avoir un getter et un setter. 
Un constructeur est attendu pour initialiser les setters. Ensuite, créez un objet de cette classe 
et fournissez à votre constructeur les valeurs suivantes :

- Challenger pour le name
- 2076 pour la stamina (la stamina représente les points de vie du boxeur)
- 9 pour le speed (speed représente la vitesse)
- 172 pour la strength (strength représente la force du boxeur)*/

class Challenger
{
    
public $_name;
public $_stamina;
public $_speed;
public $_strenght;

public function __construct($name, $stamina, $speed, $strenght)
{
    $this->setName($name);
    $this->setStamina($stamina);
    $this->setSpeed($speed);
    $this->setStrenght($strenght);
}

public function setName($name)
{$this->_name = $name;}

public function setStamina($stamina)
{ $this->_stamina = $stamina;}

public function setSpeed($speed)
{$this->_speed = $speed;}

public function setStrenght($strenght)
{$this->_strenght = $strenght;}

public function getName()
{return $this->_name;}

public function getStamina()
{return $this->_stamina;}

public function getSpeed()
{return $this->_speed;}

public function getStrenght()
{return $this->_strenght;}

}

$challenger = new Challenger("Popi",'2076','9','172');


?>