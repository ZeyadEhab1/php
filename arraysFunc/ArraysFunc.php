<?php


$names =["ahmed", "osama", "zeyad", "adel"];
echo '<pre>';
print_r(array_chunk($names , 2) );
echo '</pre>';

echo '<br>';


$countries = ["eg" => "Egypt", "om" => "Oman" , "en" => "England", "usa" => "united state"];

echo '<pre>';
print_r(array_chunk($countries , 2 , true) );
echo '</pre>';

echo '<pre>';


// ####################


print_r(array_change_key_case($countries , CASE_UPPER) );
echo '</pre>';

$keys = ["Y", "M", "A", "AD"];
$values =["yasser", "mohamed", "adham", "adel"];



// ####################


echo '<pre>';
print_r(array_combine($keys, $countries) );
echo '</pre>';

// ####################

$counting = ["A", "P", "P", "P", "D", "D"];
echo '<pre>';
print_r(array_count_values( $counting) );
echo '</pre>';

// ####################



$family = ["ahmed", "osama", "zeyad", "adel", ["basmala", "mariam"]];

echo '<pre>';
print_r( $family);

print_r(array_reverse( $family, true) );
echo '</pre>';


// ####################


echo '<pre>';
print_r(array_flip($countries ) );
echo '</pre>';


// ####################


$search = ["1", 2, 3, 4 ];
if (in_array(1, $search, true)){
    echo 'the element is found';
}else {     echo 'the element is not found';}

echo '<br>';


$courses = ["php"=>100 , "c"=>200 , "python"=>250];

if (array_key_exists("php",$courses)){
    echo "the cours cost is " . $courses["php"];
}

echo '<br>';

// ####################

$chars = ["A", "b", "c", "d"];
echo '<pre>';
print_r($chars );
echo '</pre>';

$first= array_shift($chars);

echo '<pre>';
print_r($chars );
echo '</pre>';




$last= array_pop($chars);

echo '<pre>';
print_r($chars );
echo '</pre>';


array_push($chars, "x", "y", "z" );


echo '<pre>';
print_r($chars );
echo '</pre>';


array_push($chars, "1");
$chars []="1";

echo '<pre>';
print_r($chars );
echo '</pre>';



array_unshift($chars, "one", "two", "three" );
echo '<pre>';
print_r($chars );
echo '</pre>';



// ####################


$names = ["ahmed", "osama", "zeyad", "adel", ["basmala", "mariam"]];
sort($names);
echo '<pre>';
print_r($names);
echo '</pre>';

rsort($names) ;
echo '<pre>';
print_r($names);
echo '</pre>';

// ####################

$Fname = ["ahmed", "osama", "zeyad", "adel", "basmala", "mariam"];
$Lname= ["salama" , "khalil", "ehab", "shakal", "hossam", "tamer" ];

function hi_mr ($frist , $last){
    return "Hello mr.$frist $last" ;
}
echo '<pre>';
print_r(array_map("hi_mr", $Fname, $Lname));
//print_r(array_map(fn($F, $L)=> "HEllO MR.$F $L ", $Fname, $Lname));
echo '</pre>';









