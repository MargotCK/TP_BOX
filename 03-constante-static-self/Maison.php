<?php

class Maison
{
    private static $nbPiece = 7;
    private static $espaceTerrain = "500m²";
    Const HAUTEUR = "10m";

    public $color = "red";
    private $nbPorte = 10;

    public static function getNbPiece()
    {
        return self::$nbPiece;
    }

    public static function getNbPorte()
    {
        return self::$nbPiece;
    }

}

echo Maison::getNbPiece() . "\n";
echo Maison::getNbPorte() . "\n";
echo Maison::HAUTEUR. "\n";

Maison::$espaceTerrain = "100m²";

$maison = new Maison;
$maison->getNbPorte();

$maison2 = new Maison;
$maison2->color = "Yellow";
/* 
STATIC :
indique qu'un élément (une propriété) 
appartient à la classe et non à l'objet, il est variable.

Une propriété statique peut tout à fait changer de valeur au court du temps.
Parcqt sa valeur sera partagée par tous les objets de la classe

CONST:
indique qu'un élément (une propriété) 
appartient à la classe et non à l'objet, deplus il est non variable

Pour accéder à ce qui appartient à la classe il suffit de faire un echo de la classe et pas une instanciaition.
On peut l'appeler en dehors de la classe ou à l'int de la clasees

SELF
est utilisé qd on est à l'int pour récupérer tout ce qui appartient à la classe

->
qd in veut récupérer un élément de la classe  on utilisse
->$
qd on est à l'intérieur on utilise  this ->

class::
on utlise :: pour récupérer un élément de la classe qd on est à l'extérieur.
$objet-> : pour récupérer un élément de l'objet  qd on est à l'extérieur.

  Opérateur :
        $objet->element d'un objet à l'éxtérieur de la classe.
        $this->element d'un objet à l'interieur de la classe.

        class::element d'une classe à l'exterieur de la calsse.
        self::element d'une classe à l'interieur de la classe.



*/


?>