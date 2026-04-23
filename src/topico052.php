<?php
$hora = 18;

if ($hora < 12) {
    echo "Bom dia!";
} elseif ($hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>

<hr>

<?php
$semaforo = "verde";

if ($semaforo == "verde") {
    echo "Pode atravessar.";
} elseif ($semaforo == "amarelo") {
    echo "Atenção, prepare-se para parar.";
} elseif ($semaforo == "vermelho") {
    echo "Pare, não atravesse.";
} else {
    echo "Sinal de trânsito desconhecido.";
}
?>