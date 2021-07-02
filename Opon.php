<?php
// Princípio aberto-fechado

interface Shape {
    public function area();
    //interface Shape simples que tenha o método area e será implementada por todas as outras formas.
    //Desta forma, usaremos apenas um método para calcular a soma e se precisarmos adicionar uma nova forma,
    //ele apenas implementará a interface Forma.
}

class Rectangle implements Shape {
  
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area() {
        return $this->width * $this->height;
    }
}

class Square implements Shape {
  
    private $length;
    
    public function __construct($length) {
        $this->length = $length;
    }
    
    public function area() {
        return pow($this->length, 2);
    }
}


class AreaCalculator {
    //classe AreaCalculator que faz apenas uma soma de cada área da forma.
  
    protected $shapes;
    
    public function __construct($shapes = array()) {
        $this->shapes = $shapes;
    }
    
    public function sum() {
        $area = [];
        
        foreach($this->shapes as $shape) {
            $area[] = $shape->area();
        }
    
        return array_sum($area);
    }
}