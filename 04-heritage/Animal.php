<?php
class Animal
{
    protected function deplacement()
    {
        return "Je me déplace. \n";
    }
    public function mange()
    {
        return "Je mange chaque jour";
    }
}

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un Elephant et " . $this->deplacement();
    }
}
class Chat  
{
    public function quiSuisJe()
   {
    return "Je suis un chat. \n";
   }
    

    public function mange()
    {
    return "Je mange comme un chat";
    } 

}



// USE classe Elephant
// 1 - afficher "je mange chaque jour"
// 2 - afficher "Je suis un Elephant et je me deplace"

$elephant = new elephant;
echo $elephant->mange() . "\n"; 
echo $elephant->quiSuisJe() . "\n";



// Use classe Chat
// 1 - afficher "je mange comme un chat
// 2 - afficher "Je suis un chat"


$chat = new Chat;
echo$chat->mange() . "\n";
echo $chat->quiSuisJe();
