<?php

class Movie
{
    private $name;
    private $description;
    private $length;
    private $releaseDate;
    
    private function setName($name = ""){
        $this->name = $name;
    }
    
    private function setDescription($description = ""){
        $this->description = $description;
    }
    
    private function setLength($length = ""){
        $this->length = $length;
    }
    
    private function setReleaseDate($releaseDate = ""){
        $this->releaseDate = $releaseDate;
    }
    
    public function __construct($name, $description, $length, $releaseDate){
        $this->setName($name);
        $this->setDescription($description);
        $this->setLength($length);
        $this->setReleaseDate($releaseDate);
    }
    
    public function toString(){
        return "Movie = [name=$this->name description=$this->description length=$this->length releaseDate=$this->releaseDate]";
    } 
    
}

$film1 = new Movie('leon','un film reigolo',2,1998);

echo $film1->toString();

?>