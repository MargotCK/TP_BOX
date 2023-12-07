<?php

class A   
{
    public function calcul()
    {
        return 10;
    }
}

class B extends A   
{
    public function calcul() // redefinition de ma méthode de calcul.
    {
        /* 
        Surcharge(override).
        parent ::
        fonctionne pour appeler une méthode d'une classe parent 
        LORS d'une surcharge (afin d'éviter qu'elle ne s'appelle elle-même)
        car elle redéfinie..
        */

        $nb = parent::calcul();
        if($nb <=10) return "$nb est inférieur ou égal a 10 \n";
        else return "$nb est supérieur à 10 \n";

    }
    
    public function autreCalcul()
    {
        parent::calcul();
        /*
        Il est possible d'utiliser le mot clé parent 
        même si la méthode n'est pas redéfinie.
        */
    }
}

$objet = new B
echo $objet->calcul();