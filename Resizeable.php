<?php


interface Resizeable
{
    public function resize($percent);

}

class Circle implements Resizeable


{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return "DT hinh tron " . pi() * pow($this->radius, 2);

    }

    public function resize($percent)
    {
        $newRadius = ((1 + $percent / 100) * $this->getRadius());
        $this->setRadius($newRadius);

    }
}

class Rectangle implements Resizeable
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function getHeight()
    {
        return $this->height;
    }


    public function getWidth()
    {
        return $this->width;
    }


    public function setHeight($height)
    {
        $this->height = $height;
    }


    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getArea()
    {
        return "dien tich hinh chu nhat la: ".$this->width * $this->height;
    }

    public function resize($percent)
    {
        $newWidth = ((1 + $percent / 100) * $this->getWidth());
        $newHeight = ((1 + $percent / 100) * $this->getHeight());
        $this->setWidth($newWidth);
        $this->setHeight($newHeight);
    }
}

$circle = new Circle(3);
echo $circle->getArea() . "</br>";
$circle->resize(100);
echo $circle->getArea()."</br>";


$rectangle = new Rectangle(3,6);
echo $rectangle->getArea()."</br>";
$rectangle->resize(100);
echo  $rectangle->getArea();