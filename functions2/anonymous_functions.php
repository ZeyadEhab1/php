<?php

$msg = "Hi ";
$say_hi = function ($someone) use ($msg){
    return "$msg $someone";
};

echo $say_hi("zeyad");


echo '<br>........................ </br>';


$nums = [10 ,20 ,30, 40, 50];
function add_five ($item){
    return $item+5;
};

$after_adding = array_map("add_five" , $nums);

echo '<pre>';
print_r($after_adding);
echo '</pre>';

echo '<br>........................ </br>';



$after_adding_ten = array_map(function ($item) {return $item+10; } , $nums);

echo '<pre>';
print_r($after_adding_ten);
echo '</pre>';


