<?php
namespace DemoApp;

class Motorcycle extends Vehicle{

    private $engine;
    private $power;
    private $maxSpeed;

    public  function __constructor($model, $brand, $price, $description, $engine, $power, $maxSpeed)
    {
        parent::__constructor($model, $brand, $price, $description, $engine, $power, $maxSpeed);

        $this->engine = $engine;
        $this->power = $power;
        $this->maxSpeed = $maxSpeed;


    }
    //seteriai
    public function setEngine($engine) {$this->engine = $engine;}
    public function setPower($power) {$this->power = $power;}
    public function setSpeed($maxSpeed) {$this->maxSpeed = $maxSpeed;}

    //geteriai
    public function getEngine() { return $this->engine;}
    public function getPower(){return $this->power;}
    public function getSpeed(){return $this->maxSpeed;}

}