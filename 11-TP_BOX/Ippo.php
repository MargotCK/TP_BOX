<?php
/* 
1 -> Class Ippo (dans un fichier Ippo.php)
Créez une classe Ippo. Cette classe doit avoir 4 publiques propriétés (name, stamina, speed, strength). 
Chacune de ces propriétés doit avoir un getter et un setter. 
Un constructeur est attendu pour initialiser les setters. 
Ensuite, créez un objet de cette classe et fournissez à votre constructeur les valeurs suivantes :

- Ippo pour le name
- 20762 pour la stamina (la stamina représente les points de vie du boxeur)
- 90 pour le speed (speed représente la vitesse)
- 1721 pour la strength (strength représente la force du boxeur)
*/

class Ippo
{
public $_name; 
public $_stamina; 
public $_speed; 
public $_strength;

public function __construct($name ='Ippo', $stamina ='20762', $speed ='90', $strength ='1721')
{
    $this->setName($name);
    $this->setStamina($stamina);
    $this->setSpeed($speed);
    $this->setStrenght($strength);
 
}

public function setName($name)
{
if( is_string($name))
{$this->_name = $name;}
else
{ return false;}
}

public function getName()
{
return $this->_name;
}


public function setStamina($stamina)
{
if( is_string($stamina))
{$this->_stamina = $stamina;}
else
{ return false;}
}

public function getStamina()
{
return $this->_stamina;
}


public function setSpeed($speed)
{
if( is_string($speed))
{$this->_speed = $speed;}
else
{ return false;}
}

public function getSpeed()
{
return $this->_speed;
}


public function setStrenght($strength)
{
if( is_string($strength))
{$this->_strenght = $strength;}
else
{ return false;}
}

public function getStrenght()
{
return $this->_strenght;
}

}

$Ippo = new ippo();






























?>