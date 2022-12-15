<?php
function calc (...$nums) {
   /* echo func_num_args() . "<br>";
    echo func_get_arg(3) . "<br>";
    print_r(func_get_args());
*/
    /*
    $result = 0;
    foreach (func_get_args() as $arg) :
        $result += $arg;
    endforeach;
    echo $result;
*/
    $result = 0;
    foreach ($nums as $num) :
        $result += $num;
    endforeach;
    echo $result;
}

echo calc(5,9,4,7 );
