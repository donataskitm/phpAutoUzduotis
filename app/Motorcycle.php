<?php
namespace DemoApp;

class Motorcycle extends Vehicle{

    private $engine;

    public  function __construct($model, $brand, $price, $description, $engine, $power, $speed)
    {
        parent::__construct($model, $brand);

        $this->engine = $engine;
        $this->power = $power;
        $this->speed = $speed;
        $this->price = $price;
        $this->description = $description;
    }
    //seteriai
    public function setEngine($engine) {$this->engine = $engine;}
    public function setPower($power) {$this->power = $power;}
    public function setSpeed($speed) {$this->speed = $speed;}



    //geteriai
    public function getEngine() { return $this->engine;}
    public function getPower(){return $this->power;}
    public function getSpeed(){return $this->speed;}


}