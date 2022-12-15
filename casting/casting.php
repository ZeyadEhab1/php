<?php

$integer = (int) 15.2 + (int)14.7 +(int) (10.5 + 10.5) ;
$gettype = gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer

echo $integer;
echo "<br>" ;
echo $gettype;



echo "<br>" ;

?>


<!DOCTYPE html >
<html lang="en">
<head>
    <meta charest ="UTF-8">
    <title> Document </title>
    <style> header {
            background : #e3e3e3;
            padding : 2em;
            text-align : center ;

        }

    </style>
</head>
<body>
<header>

    <h1> <?= 'Hello, ' . htmlspecialchars($_GET['name']) ?></h1>
</header>
</body>
</html>
