<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
#Verifica se a variável esta setada
echo isset($somaDosNumeros);

echo '<br>';
#Pra não setar uma variável
unset($somaDosNumeros);
var_dump($somaDosNumeros);

#Mesma variável com dois tipos
$variavel = 10;
echo '<br>' . $variavel;
$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);