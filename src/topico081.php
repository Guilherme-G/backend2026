<?php
echo "<h1>array variável indexada</h1>";
//$array = array ("valor1", "valor2", "valor3"); // forma antiga
$array = ["valor1", "valor2", "valor3"]; // forma nova

echo "<br>array[0] = " . $array[0];
echo "<br>array[1] = " . $array[1];
echo "<br>array[2] = " . $array[2];

$uf = ["SP", "RJ", "MG", "ES"];
echo "<br>uf[2] = " . $uf[2];

echo '<pre>';
print_r($array);
echo '</pre>';

echo "<hr>";
echo "<h1>array variável associativa</h1>";
$estudante = [
    "id" => 1,
    "ra" => 123456,
    "nome" => "Bete",
    "curso" => "TADS"
];

echo "<br>id: " . $estudante["id"];
echo "<br>RA: " . $estudante["ra"];
echo "<br>Nome: " . $estudante["nome"];
echo "<br>Curso: " . $estudante["curso"];
echo '<pre>';
print_r($estudante);
echo '</pre>';
echo "<hr>";
echo "<h1>array variável multidimensional</h1>";
$matriz = [
["10", "navio","30"],
["40", "bote", "60"],
["agua", "80", "aviao"]
];
echo "<br>" . $matriz[2][0];
echo "<br>" . $matriz[0][1];
echo "<br>" . $matriz[1][1];
echo "<br>" . $matriz[2][2];

echo '<pre>';
print_r($matriz);
echo '</pre>';

echo "<hr>";
echo "<h1>array variável multidimensional associativa</h1>";

$bd = [
    ["id"=>1, "nome"=>"Bete", "curso"=>"TADS"],
    ["id"=>2, "nome"=>"Cleide", "curso"=>"TBD"],
    ["id"=>3, "nome"=>"Beto", "curso"=>"TJD"]
];
echo "<br>id: " . $bd [1]["id"];
echo "<br>curso: " . $bd [2]["curso"];
echo "<br>nome: " . $bd [0]["nome"];
?>