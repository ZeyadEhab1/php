<?php


$msg = "Hi ";
$say_hi =  fn($someone) => "$msg $someone";

echo $say_hi("zeyad");


echo '<br>........................ </br>';


$nums = [10, 20, 30, 40, 50];
$after_adding_ten = array_map(fn($item) => $item + 10, $nums);

echo '<pre>';
print_r($after_adding_ten);
echo '</pre>';


