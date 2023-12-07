<?php

// ICI ON DEFINI LES CARACTERISTIQUEs (proppriétés) DE "panier"
class panier 
{
public $nbProduit; // là on a crée une propriété (public means que c'est accesible en local et en global)
private $nbProduit2; 

public function ajouterArticle($arg)  //  ici c'est une méthode
{// entre les accollade c'est le traitement
    return "L'article a été ajouté $arg \n";
}

protected function retirerArticle($arg) // <--Méthode ( procted est accessible en local et par héritage à la class enfant)
{
    return "L'article a été retiré $arg \n";
}

private function afficheArticle()
    {
        return "Voici les articles \n";
    }

}
/* 
"new" est un mot-clé permettant d'effectuer
une instanciation(objet) . Une classe peut produire plusieurs objet.
Ns pouvons dc effectuer +sieurs instanciation, il suffira de mettre 'new'.
*/

$panier = new panier; // MAINTENANT "panier est créé et plus haut nous avons tous c caractéristiques.

$panier->nbProduit = 5;
echo "Panier $panier->nbProduit produits \n";

//$panier->nbProduit = ajouterArticle;
//echo "L'article a été ajouté $arg \n"
/*echo $panier->ajouterArticle("jean") . "\n";

/*echo $panier->retirerArticle("jean") . "n\";  ICI C la METHODE PROTECTED 
l' echo ne fonctionne pas en-dehors de la classe "panier , 
l'élément est accessible unique dans la classe
POUR la visualiser je dois créer une méthode test dans les propriétés

*/
/*
echo $panier->afficheArticle(). "\n";  methode private, 
cela ne fonctionne pas (erreur)l'élément est visible, accessible seulement dans le panier
*/

echo "****----------******\n";

$panier2 = new panier;
$panier2->nbProduit = 42;

$panier3 = new panier;
$panier->nbProduit = 6;

echo "panier2 $panier2-> produits \n";
echo "panier3 $panier3-> produits \n";

/*
niveau de visibilité :
public : accessible de partout.
proctected : accessible uniquement dans la classe ou elle a été déclaré
et aussi dans les classes héritères.
private : accessible uniquement dans la classe ou elle a été déclarée.
*/

?>