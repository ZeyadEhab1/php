<?php
$val ="wsml";
//if (filter_var($val, FILTER_VALIDATE_BOOL)){
if (filter_var($val, 258)){
    echo "true";
}else {
    echo "fals";
};


echo "<br>";
var_dump(filter_var($val, 258, FILTER_NULL_ON_FAILURE));

echo "<br>";




//######################## validation url + null flag
$url= "https://elzero.org";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE));
echo "<br>";


//######################## validation url + path require flag مسار
$url= "https://elzero.org/category";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
echo "<br>";


//######################## validation url + QUERY flag
$url= "https://elzero.org/?id=4";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED));
echo "<br>";


//######################## validation url + the past 3 flags
$url= "https://elzero.org/category/?id=4";
var_dump(filter_var($url, FILTER_VALIDATE_URL,
    [ "flags"=>FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
echo "<br>";




//######################## validation  int
$int = "84";
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT
    ,["flags" => FILTER_NULL_ON_FAILURE, "options"=>["min_range"=> 50 , "max_range"=>100]]));

echo "<br>";

//########################
$email = "zeyad¥ehab@gmail.com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
echo "<br>";




