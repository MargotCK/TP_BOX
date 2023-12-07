<?php

abstract class Joueur
{
    public functionseConnecter()
    {

        return $ this->EtreMajeur();
    }
    abstract public function EtreMajeur(); //les methodes abstraites n'ont pas de contenu = pas d'accolades (no body).
    abstract public function Devise (); //les methodes abstraites n'ont pas de contenu = pas d'accolades (no body).
}

class JoueurFr extends Joueur
{
    public function EtreMajeur()
    {
        return 18;
    }
    public function Devise()
    {
        return "€";
    }
}
class JoueurUs extends Joueur
{
    public function EtreMajeur()
    {
        return 21;
    }
    public function Devise()
    {
        return "$";
    }
}
/***********************
  - Une classe abstraite n'est pas instanciable.
  - Les methodes abstraites n'ont pas de contenu.
  - Lorsque l'on hérite de méthodes abstraites, nous sommes obligés de les redéfinir.
  - Pour définir des méthodes abstaites, il est nécessaire que la classe qui les contient soit abstraite.
  - Une classe abstraite peut contenir des méthodes normales.
  - Une classe abstraite est une classe dont l’implémentation n’est pas complète et qui n’est pas instanciable. 
  - Elle sert de base à d’autres classes dérivées (héritées)
********************/