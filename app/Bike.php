<?php
namespace DemoApp;

class Bike extends Vehicle{

    public  function __constructor($model, $brand, $price, $description)
    {
        parent::__constructor($model, $brand, $price, $description);
    }
}