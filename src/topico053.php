<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>

<?php
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y H:i:s");
echo $data;
?>

<hr>

<?php
$nome = "uninove";
echo "nome = $nome";
echo "<br>md5 = " . md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>hash = $hash";