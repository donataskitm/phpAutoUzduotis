<?php
namespace DemoApp;

class Bike extends Vehicle{

    public  function __construct($model, $brand, $price, $description)
    {
        parent::__construct($model, $brand);
        $this->price = $price;
        $this->description = $description;
    }


}