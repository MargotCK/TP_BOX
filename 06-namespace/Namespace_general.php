<?php

namespace General;

require_once("namespace_commerce.php");

// importe les namespace Commerce1, Commerce2, Commerce3 du fichier inclus.
USE Commerce1, Commerce2, Commerce3;

//affiche le nom du namespace actuel.
echo __NAMESPACE__ . "\n";

// on crée un nouvel objet en instance de la classe 'command' du namespace 'commerce1'.
$command = new Commerce1\Command;
$produit = new Commerce2\Produit;
$produit2 = new Commerce3\Produit;
$command2 = new Commerce3\Command;

echo $command->nbCommande . "\n";
echo $produit->nbProduit . "\n";
echo $produit2->nbProduit . "\n";
echo $command2->nbCommande . "\n";
