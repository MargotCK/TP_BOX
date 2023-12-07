<?php

// class Etudiant
// {}
//     private $prenom;

//     public function__construct($argc)
//     {
//     echo "Instanciation..., nous avons reçu l'information suivante :$arg \n";
// $this->setPrenom($arg);    
// }

//     public function setPrenom($arg)
//     {
//     if(is_string($arg)) {
//       $this->prenom = $arg;
//     } 

//     public function getPrenom()
//         {
//           return $this->prenom;
//         } 

// Le nom d'une classe commence toujours pas une Majuscule.
class Etudiant
{
    private $prenom;

    /* 
      __construct : méthode appelée automatiquement lors de l'instanciation.
      On ne peut pas déclarer deux constructeurs en PHP;
    */
    public function __construct($arg)
    {
      echo "Instanciation..., nous avons reçu l'information suivante : $arg \n";
      $this->setPrenom($arg);
    }

    public function setPrenom($arg)
    {
      if(is_string($arg)) {
        $this->prenom = $arg;
      } 
    }

    public function getPrenom()
    {
      return $this->prenom;
    }
}
$etudiant = new Etudiant("Fabio");
echo $etudiant->getPrenom();

/*  __ constructeur : méthode appelée automatiquement 
    nous mettons un argument après le nom de la classe 
    qui attérit directement dans le constructeur __
    Autrement dit il s'exécute automatiquement lorsqu'on instancie la class.
ATTENTION
    Au sein d'1 m^me class on ne peut pas déclarer plusieurs constructeur, 
    on ne peut en déclarer qu'1.
    */







?>