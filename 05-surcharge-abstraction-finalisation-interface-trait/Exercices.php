<?php
/*1.	Faire en sorte de ne pas avoir d'objet Vehicule. 
// Il faut utiliser abstract  et la fonction final public function demarrer()

2. 	Obligation pour la Renault et la Peugeot de posséder la même méthode demarrer() qu'un Véhicule de base . // extends + final

Il faut créer 2 class renault et peugeot

3.	Obligation pour la Renault de déclarer un carburant diesel et pour la Peugeot de déclarer un carburant essence (exemple: return 'diesel'; -ou- return 'essence';). // abstract
il faut créer 2 méthode cad 2 fonction public
4.	La Renault doit effectuer 30 tests de + qu'un véhicule de base. // redefinition + surcharge

5.	La Peugeot doit effectuer 70 tests de + qu'un véhicule de base. // redefinition + surcharge

6.	Effectuer les affichages nécessaire. // echo



abstract class vehicule
/*{}
    abstract public function Carburant(); 
    abstract public function test(100); 



final class vehiculedebase extends vehicule
{
    public function démarrer()
    {
        if($vehicule, $vehicule2) return "la même façon de démarrer \n";
       
    }
}


$vehicule = new renault;
echo $vehicule->carburant(diesel);

$vehicule2 = new peugeot;
echo $vehicule->carburant(essence);


$test = parent::test();
if($test <=60) return "$test est correct \n";
else return "$test n'est pas correct \n";

$test = parent::test();
if($test <=100) return "$test est correct \n";
else return "$test n'est pas correct \n";
*/
 /*CORRECTION*/ 

?>

<?php

abstract class Vehicule
{
	final public function demarrer()
	{
		return 'je demarre';
	}
	abstract public function carburant();
	public function nombreDeTestObligatoire()
	{
		return 100;
	}
}
//-----------------------
class Peugeot extends Vehicule
{
	public function carburant()
	{
		return 'essence';
	}
	public function nombreDeTestObligatoire()
	{
		return parent::nombreDeTestObligatoire() + 70;
	}
}
//-----------------------
class Renault extends Vehicule
{
	public function carburant()
	{
		return 'diesel';
	}
	public function nombreDeTestObligatoire()
	{
		return parent::nombreDeTestObligatoire() + 30;
	}
}
//----------------------------------------
$peugeot = new Peugeot;
echo 'Peugeot> ' . $peugeot->demarrer() . "\n";
echo 'Peugeot> ' . $peugeot->carburant() . "\n";
echo 'Peugeot> ' . $peugeot->nombreDeTestObligatoire() . "\n";

$renault = new Renault;
echo 'Renault> ' . $renault->demarrer() . "\n";
echo 'Renault> ' . $renault->carburant() . "\n";
echo 'Renault> ' . $renault->nombreDeTestObligatoire() . "\n";
?>