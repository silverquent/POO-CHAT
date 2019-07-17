<?php 

class Cat {

private $nom ;
private $couleur;
private $image ;
const fatigue_MAX= 100;
const fatigue_MIN = 0;
private $fatigue;


public function __construct($nom ,$couleur , $image){
    $this->nom= $nom;
    $this->couleur= $couleur;
    $this->image= $image;    
    
    
  }


  public function marcher()
  {

    if ($this->fatigue < self::fatigue_MAX){
return $this->fatigue +=20;
    }
    else {
        return $this->fatigue=self::fatigue_MIN;
    }

    
  }



}
