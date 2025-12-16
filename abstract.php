<?php


abstract class Vehicle
{
    abstract public function move();
}


class Car extends Vehicle
{
    public function move()
    {
        return "The car is driving";
    }
}


class Airplane extends Vehicle
{
    public function move() {
        return "the airplane is flying";
    }
}


$arrs = [new Car() , new Airplane()];


foreach($arrs as $arr){
    echo $arr->move() . "\n";
}