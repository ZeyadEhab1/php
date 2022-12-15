<?php
//mkdir("zeyadehabosmanllll", 0700);
//echo fileperms("zeyadehabosmanllll") . "<br>";
//chmod("16832",0644);
//echo fileperms("zeyadehabosmanllll") . "<br>";
//rmdir("zeyadehabosmanllll");


echo basename(__FILE__). "<br>";
echo basename(__FILE__, ".php"). "<br>";
echo dirname(__FILE__ ). "<br>";
echo realpath(__FILE__ ). "<br>";

echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";

echo pathinfo(__FILE__)["basename"]. "<br>";


