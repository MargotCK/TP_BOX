<?php

/*Création de la classe :

Créez une classe Livraison avec les propriétés privées suivantes : adresse, dateLivraison, et statut.

Constructeur ->

Ajoutez un constructeur à la classe Livraison qui prend en paramètre l'adresse et la dateLivraison. 
Le statut doit être optionnel et par défaut égal à "En attente".

Méthodes Getter et Setter ->

Ajoutez des méthodes getter et setter pour chaque propriété de la classe. 
Vérifiez le type de données dans les setters (par exemple, l'adresse doit être une chaîne de caractères).

Méthode livrer ->

Ajoutez une méthode livrer qui met à jour le statut de la livraison à "Livré".

Instanciation et Affichage ->

Instanciez la classe Livraison avec des valeurs d'adresse et de date de livraison.
Affichez les informations de la livraison en utilisant les méthodes getter.

Mise à jour du statut ->

Appelez la méthode livrer pour simuler la livraison de la commande.
Affichez le nouveau statut de livraison en utilisant la méthode getter.

N'oubliez pas d'inclure des instructions spécifiques pour l'affichage des données à différentes étapes de l'exercice, 
telles que "Affichez les informations de la livraison après l'instanciation" et "Affichez les informations mises à jour après 
l'appel de la méthode livrer".*/ 


class Livraison
{
private $adresse;
private $dateLivraison;
private $statut;

"optionnel=enAttente" function __construct($nvAdresse, $nvDateLivraison)
{
    $this->setAdresse($nvAdresse);  
    $this->setDateLivraison($nvDateLivraison);
  
}
public function getAdresse()
{
    retur $this->_adresse;
}

public function setAdresse($nvAdresse)
{
    if(is_string($nvAdresse)){$this->adresse = $nvAdresse;}
    else {return false;}
}


public function getAdresse()
{
  return $this->adresse;
}

















}

?>
