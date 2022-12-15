<?php
$handel = fopen("elzero.text", "a");
//echo fgets($handel);
//echo fread($handel, 1024);
//fwrite($handel, "\r\nI love MAN UNITED");
fclose($handel);


//echo fread($handel, 1024);
echo '<pre>';
print_r(glob("*.*"));
echo "</pre>" ;