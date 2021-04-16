<?php

require_once './Cat.php';

class WildCat extends Cat {
    
    public $color;
    
    public function __construct($name, $age, $color) {
        parent::__construct($name, $age); // super
        $this->color = $color;
    }
    
    public function show() {
        parent::show();
        echo ", Color: $this->color<br>";
    }   
    
}
