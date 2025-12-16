<?php


class Shape
{


    public function area()
    {
        return 0;
    }
}


class Rectangle extends Shape
{
    public float $width;
    public float $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function area()
    {
        return $this->width * $this->height;
    }
}



class Circle extends Shape
{
    public float $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * $this->radius * $this->radius;
    }
}


$shapes = [
    new Rectangle(width: 10 , height: 5),
    new Circle(radius: 3),
];


foreach($shapes as $shape){
    echo $shape->area() ."\n";
}