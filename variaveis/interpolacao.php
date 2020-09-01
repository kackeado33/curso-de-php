<div class="titulo">Interpolção</div>

<?php
$numero = 10;
echo $numero;
#String com aspas simples não interpola/interpreta variável
echo '<br> $numero'; 
#String com aspas duplas interpreta variável
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos"; // Errado
echo "<br>Eu tenho 5 {$objeto}s."; // Certo
#Da erro com espaços entre a chave e a variável
echo "<br>Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s.";