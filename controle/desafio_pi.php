<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

echo "<br> $pi";

if($pi !== pi()) {
    echo "<br>Iguais";
} else {
    echo "<br>Diferentes";
}

$piErrado = 2.8;
 #Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($piErrado - pi());

if($pi - pi() <= 0.01) {
    echo "<br>Praticamente iguais";
} else {
    echo "Valor errado";
}

if($pi - $piErrado <= 0.01) {
    echo "<br>Iguais";
} else {
    echo "<br>Valor errado";
}