<?php

namespace DemoApp;

class Vehicle
//Reikia	sukurti	bazinę	transporto	priemonės	klasę,	kuri	turėtų	bendras	savybes,	tinkamas	tiek
//automobiliui,	tiek	motociklui,	tiek	dviračiui;
{
    private $model;
    private $brand;
    private $price;
    private $description;

    public function __construct($model, $brand, $price, $description)
    {
        $this->model = $model;
        $this->brand = $brand;
        $this->price = $price;
        $this->description = $description;
    }

//Sukurti	konstruktorių,	kurio	pagalba	būtų	galima	iš	karto	nurodyti	modelį	ir	markę
    public function __construct1($model, $brand)
    {//jei klases viduj, jis visda kvieciamas ir butini perduoti paarametrai
        $this->model = $model;
        $this->brand = $brand;
    }

    //seteriai
    public function setModel($model) {$this->model = $model;}
    public function setBrand($brand) {$this->brand = $brand;}
    public function setPrice($price) {$this->price = $price;}
    public function setDescription($description) {$this->description= $description;}

//geteriai
    public function getModel(){return $this->model;}
    public function getBrand(){return $this->brand;}
    public function getPrice(){return $this->price;}
    public function getDescription(){return $this->description;}

    public function getModelBrand()
{
    return [
        $this->model,
        $this->brand
    ];

}
    public function setModelBrand($model, $brand)
    {
            $this->model=$model;
            $this->brand=$brand;
    }




}