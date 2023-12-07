<?php

/*1 - Créez une classe qui doit contenir trois propriétés privées (nom, prenom, age).

2 - Chaque propriété doit avoir son getter et setter

3 - Vérifier si la donnée est bien une chaîne de caractères dans le setter, Si c'est le cas, affectez la valeur sinon, renvoyez un booléen FALSE.

4 - Ajoutez un constructeur qui se chargera d'initialiser les valeurs des propriétés grâce aux setters.

5 - Ensuite, afficher les données en appelant vos getters.*/



/****** 1 - Créez une classe qui doit contenir trois propriétés privées (nom, prenom, age).******/
class user
{
    private $nom;
    private $prenom;
    private $age;

public function __construct($nvNom, $nvPrenom, $nvAge)
{
    $this->setterNom($nvNom);  
    $this->setterNom($nvPrenom);
    $this->setterAge($nvAge);
}

/****** 2 - Chaque propriété doit avoir son getter et setter******/

    public function setterNom($nvNom)
    {
        if(is_string($nvNom)){$this->nom = $nvNom;}
        else {return false;}
    }


    public function getterNom()
    {
      return $this->nom;
    }
   
    public function setterPrenom($nvPrenom)
    {
      
    
        if(is_string($nvPrenom)){ $this->nom = $nvPrenom; }
        else {return false;}
    }


    public function getterPrenom()
    {
      return $this->prenom;
    }
   
    public function setterAge($nvAge)
    {
        
    if(is_int($nvAge)) {$this->nom = $nvAge;}
        else {return false; }
    }


    public function getterAge()
    {
      return $this->age;
    }
   
}
/****** 3 - Vérifier si la donnée est bien une chaîne de caractères dans le setter, 
            Si c'est le cas, affectez la valeur sinon, renvoyez un booléen FALSE.   ******/

   /* public function setterNom($nvNom)
    {
    if(is_string($nvNom))
        {
        $this->nom = $nvNom;
        return true;
        }
    else
        {
        return false;
        }
    }

    public function setterPrenom($nvPrenom)
    {
    if(is_string($nvPrenom))
        {
        $this->nom = $nvPrenom;
        return true;
        }
    else
        {
        return false;
        }
    }
    public function setterAge($nvAge)
    {
    if(is_string($nvAge))
        {
        $this->nom = $nvAge;
        return true;
        }
    else
        {
        return false;
        }
    } */

/****** 4 - Ajoutez un constructeur qui se chargera d'initialiser les valeurs des propriétés grâce aux setters.******/

/*public function __construct($nvNom, $nvPrenom, $nvAge)
  {
    $this->setterNom($nvNom);
    $this->setterPrenom($nvPrenom);
    $this->setterPrenom($nvAge);
  }*/



$user = new user("Comuce", "Nadia", 46);


/******5 - Ensuite, afficher les données en appelant vos getters.*******/


echo "Nom :" . $user->getterNom() . "\n";
echo"Prenom :" .  $user->getterPrenom() . "\n";
echo "Age:" . $user->getterAge() . "\n";

?>