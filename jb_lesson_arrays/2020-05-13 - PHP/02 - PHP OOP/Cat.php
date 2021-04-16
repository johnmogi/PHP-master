<?php

class Cat {
    public $name = "---";
    private $age = 0;
    public static $fileName = "cats.txt";
    private static $counter = 0;
    const numOfLegs = 4;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->setAge($age);
        Cat::$counter++;
    }
    
    public static function getCounter() {
        return Cat::$counter;
    }
    
    public function getAge() {
        return $this->age;
    }
    public function setAge($value) {
        if($value >= 0 && $value <= 30) {
            $this->age = $value;
        }
    }
    public function show() {
        echo "Name: $this->name, Age: $this->age";
    }
    
    public static function displayFileName() {
        echo "File Name: " . Cat::$fileName . "<br>";
        echo "File Name: " . self::$fileName . "<br>";
        echo "File Name: " . static::$fileName . "<br>";
    }
}
