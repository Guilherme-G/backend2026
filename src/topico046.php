<?php
$a=50;
$b=120;
$c= ($a<=$b);
$d= !($a<=$b);
var_dump($c);
echo "<br>";
var_dump($d);

echo "<hr>";

$a=50;
$b=120;
$c=200;
$d=(($a<=$b) and ($a<=$c));
$e=(($a<=$b) &&  ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);

echo "<hr>";

$a=50;
$b=120;
$c=200;
$d=(($a>=$b) or !($a>=$c));// true  
$e=(($a>=$b) || ($a<=$c));// true
var_dump($d);
echo "<br>";
var_dump($e);

echo "<hr>";

$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));
$e=(($a>=$b) xor ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>