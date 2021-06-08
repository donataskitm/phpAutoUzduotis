<?php

namespace DemoApp;

class Vehicle

{
    public $model;
    public $brand;
    public $price;
    public $weight;
    public $power;
    public $speed;
    public $description;
    public $seats;

    public function __construct($model, $brand)
    {
        $this->model = $model;
        $this->brand = $brand;
    }

    //seteriai
    public function setModelBrand($model, $brand)
    {
        $this->model=$model;
        $this->brand=$brand;
    }
    //geteris
    public function getModelBrand($model, $brand)
    {
        return [
        $this->model=$model,
        $this->brand=$brand
        ];
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

//metodai
    public function changeModel($model){
        $this->model = $model;
    }
    public function changeBrand($brand){
        $this->brand = $brand;
    }
    public function changePrice($price){
        $this->price = $price;
    }
    public function changeWeight($weight){
        $this->weight = $weight;
    }

    public function showPower(){
       return  $this->power;
    }
    public function showSpeed(){
        return  $this->speed;
    }
    public function showDescription(){
        return  $this->description;
    }
    public function showPrice(){
        return  $this->price;
    }
    public function showSeats(){
        return  $this->seats;
    }




}