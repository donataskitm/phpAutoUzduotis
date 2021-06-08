<?php
namespace DemoApp;

class Car extends Vehicle{
    private $engine;

    public  function __construct($model, $brand, $price, $description, $weight, $engine, $power, $speed,  $seats)
    {
    parent::__construct($model, $brand);
    $this->engine = $engine;
    $this->power = $power;
    $this->speed = $speed;
    $this->seats = $seats;
    $this->weight = $weight;
    $this->price = $price;
    $this->description = $description;
    }
    //seteriai
    public function setEngine($engine) {$this->engine = $engine;}
    public function setPower($power) {$this->power = $power;}
    public function setSpeed($speed) {$this->speed = $speed;}
    public function setSeats($seats) {$this->seats = $seats;}
    public function setWeight($weight) {$this->weight = $weight;}

    //geteriai
    public function getEngine() { return $this->engine;}
    public function getPower(){return $this->power;}
    public function getSpeed(){return $this->speed;}
    public function getSeats(){return $this->seats;}
    public function getWeight(){return $this->weight;}
}