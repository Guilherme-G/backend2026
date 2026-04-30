<?php
echo "<h1>While</h1>";
$i = 0;
while ($i<=10) {
    echo "$i";
    $i+= 2;
}
/*
1) valor inicial?
0
2) condição?
$i < 5
3) contador?
$i++
4) quantas vezes o looping foi executado?
5
5)valor que torna a condição falsa?
5
--------------//--------------------
1) valor inicial?
11
2) condição?
$i < 15
3) contador?
$i++
4) quantas vezes o looping foi executado?
4
5)valor que torna a condição falsa?
15
--------------//--------------------
1) valor inicial?
4
2) condição?
$i>-1
3) contador?
$i--
4) quantas vezes o looping foi executado?
5
5)valor que torna a condição falsa?
-1
--------------//--------------------
1) valor inicial?
0
2) condição?
$i <=  10
3) contador?
$i+= 2
4) quantas vezes o looping foi executado?
6
5)valor que torna a condição falsa?
12
*/
echo "<hr>";
echo "<h1>Do While</h1>";
$i = 7;
do {
    echo "$i";
    $i++;
}
while ($i<5);
/*
1) valor inicial?
7
2) condição?
$i < 5
3) contador?
$i++
4) quantas vezes o looping foi executado?
1
5)valor que torna a condição falsa?
5
*/
echo "<hr>";
echo "<h1>For</h1>";
for ($i=0; $i<5; $i++) {
    echo "$i";
}//ou
echo "<br>";
for ($i=0; $i<5; $i++) echo "$i";
echo "<hr>";
echo "<h1>Looping aninhado</h1>";
for ($i=0; $i<3; $i++) {//externo
    for ($j=0; $j<2; $j++) {//interno
        echo "$i$j <br>";
    }
}
?>