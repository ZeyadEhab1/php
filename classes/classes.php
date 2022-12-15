<?php
/*
class Car
{
    public $color = 'red';
    public $weight = 9000;
    public function __construct ($color , $weight)
    {
        $this->color=$color;
        $this->weight=$weight;
    }




    public function getColor()
    {
        return $this->color;
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        Echo "I am destroyed ". $this->color.PHP_EOL;
    }


}
$myCar = new Car('green ',2500);
echo $myCar->getColor();
*/


class todo {
    public $description;
    public $compeleted = false;

    public function __construct ($description) {
        $this->description = $description;
    }


    public function compelete (){
        $this->compeleted = true;

}
    public function is_compeleted (){
        return $this->compeleted;
    }


}

$tasks =[
    new todo("go to the store"),
    new todo("gym"),
    new todo("work")
];

$tasks[0]->compelete();
$tasks[2]->compelete();


require 'index.view.php';
