<?php

final class Application
{
    public function lancementApplication()
    {
        return"L'appli se lance comme cela ";
    }
}

$app = new Application;
echo $app->lancementApplication();
/*
Erreur 
on ne peut pas hériter d'une classe finale!

*/ 

class Application2
{
    final public function lancementApplication()
    {
        return"L'appli se lance comme cela ";
    }
}
class Extension2 extends Application2
{
   /* public function lancementApplication()
    
}
/*
 - une classe finale ne peut pas être hériter
- une méthode finale permet d'éviter qu'elle soit redéfinie ou surcharger
- l'intérêt de mettre le mot-clé "final sur une méthode est de vérouller
 toutes sous -classe de la redéfinir.
 - final c'est l'inversercse d'abstrait car on ne peut le redéfinir ni le mettre en extends.
 -elle empêche les héritages.
 - elle n'est pas modifiable.
 -on peut l'appelé à partir d'un objet 
 mais on ne peut pas la redéfinir ds 1 classe car elle est non mofiable.
 */



