<?php

$name = "zeyad";
$is_student = true;
$student_dis= 10 ;
$is_orphan = true ;
$orphan_dis= 15;
$country = "Egypt";
$country_dis = 50;
$price = 100;

if ($country == "Egypt"){
    if ($is_student == true){
        if ($is_orphan == true){
            echo " there is orphan Discount ";
            echo '<br>';
            echo "there is a country discount ";
            echo '<br>';
            echo "there is a student discount ";
            echo '<br>';
            echo "Total = ". ($price - $country_dis-$student_dis - $orphan_dis) ;        }else {
            echo " No orphan Discount ";
            echo '<br>';
            echo "there is a country discount ";
            echo '<br>';
            echo "there is a student discount ";
            echo '<br>';
            echo "Total = ". ($price - $country_dis-$student_dis) ;
        }
    }else {
        echo " No student Discount ";
        echo '<br>';
        echo "there is a country discount ";
        echo '<br>';
        echo "Total = ". ($price - $country_dis) ;

    }

}else {
    echo "No country Discount";
    echo '<br>';
    echo "Total = ". $price;
}

?>
