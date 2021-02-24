<?php

spl_autoload_register(function($className){
    require $className . ".php";
});

$factory = new ShapeFactory();
// hình tròn Shape::CIRCLE
$shapeCircle = $factory->getShape(Shape::SQUARE);
$shapeCircle->draw();