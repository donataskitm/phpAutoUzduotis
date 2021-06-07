<?php
namespace DemoApp;

class Car extends Vehicle{
    private $engine;
    private $power;
    private $maxSpeed;
    private $seats;
    private $weight;

    public  function __constructor($model, $brand, $price, $weight, $engine, $power, $maxSpeed, $description, $seats)
    {
    parent::__constructor($model, $brand, $price, $description);
    $this->engine = $engine;
    $this->power = $power;
    $this->maxSpeed = $maxSpeed;
    $this->seats = $seats;
    $this->weight = $weight;
    }
    //seteriai
    public function setEngine($engine) {$this->engine = $engine;}
    public function setPower($power) {$this->power = $power;}
    public function setSpeed($maxSpeed) {$this->maxSpeed = $maxSpeed;}
    public function setSeats($seats) {$this->seats = $seats;}
    public function setWeight($weight) {$this->weight = $weight;}

    //geteriai
    public function getEngine() { return $this->engine;}
    public function getPower(){return $this->power;}
    public function getSpeed(){return $this->maxSpeed;}
    public function getSeats(){return $this->seats;}
    public function getWeight(){return $this->weight;}
}
