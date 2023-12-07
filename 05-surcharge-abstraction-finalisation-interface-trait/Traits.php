<?php






/*Créer deux  traits (TPanier&TMembre)

Trouver le moyen de créer un trait. 

1 - Dans TPanier créer une propriété "nbProduit" qui sera égale à 1 et une méthode affichageProduits qui return "Affichage des produits". ensuite pour le deuxième trait (TMembre) ajouter une méthode affichageMembres qui return "affichage des membres !)

2 - Créer une class Site et trouver le moyen de faire hérité vos deux traits à cette class.

3 - Instancier votre class (site), puis afficher le nombre de produit et ce que return vos méthodes affichageProduits et affichageMembre, en passant par l'objet de la class instancier.
*/

trait TPanier
{
    public $nbProduit = 1;
    public function affichageProduits()
    {
        return " Affichage des produits";
    }
}

trait TMembre
{
    public function affichageMembres()
    {
        return " Affichage des membres";
    }
}
class Site
{
    USE TPanier;
    USE TMembre;
}

$Site = new Site;

echo $Site->affichageProduits();
echo $Site->affichageMembres();
echo $Site->nbProduit . "\n";
/*
- UN TRAIT N'EST PAS INSTANCIABLE.
- LES TRAITS ONT ETE INVENT2S POUR REPOUSSER LES LIMITES DE L'HERITAGE.
-> UN TRAIT EST UN REGROUPEMENT DE METHODE ET DE PROPRIETES POUVANT ETRE IMPORTE 
   AU SEIN D'1 CLASSE.
-> UNE CLASSE NE PEUT HERITER QUE D'1 SEULE CLASSE
-> EN REVANCHE 1 CLASSE PEUT IMPORTER +SIEURS TRAITS A LA FS SIMILR A UN HERITAGE

/* 
  - UN TRAIT N'EST PAS INSTANCIABLE 
  - LES TRAITS ON ETE INVENTES POUR REPOUSSER LES LIMITES DE L'HERITAGE.

  -> UN TRAIT EST UN REGROUPEMENT DE METHODE ET DE PROPRIETE POUVANT ETRE IMPORTE AU SEIN D'UNE CLASE.
  -> UNE CLASSE NE PEUT HERITER QUE D'UNE SEULE CLASSE A LA FOIS.
  -> EN REVANCHE, UNE CLASSE PEUT IMPORTER PLUSIEURS TRAITS A LA FOIS (SIMILAIRE A UN HERITAGE).
*/


*/
?>