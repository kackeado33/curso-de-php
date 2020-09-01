<div class="titulo">Atribuições</div>

<?php
$title = "Atribuição";

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 1; 
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;

#Decrementa uma unidade
$numero--; //--$numero
echo '<br>' . $numero;
#Acrescenta uma unidade
$numero++; //++$numero
echo '<br>' . $numero;

#Atribuição subtrativa
$numero -= 5;
echo '<br>' . $numero;
#Atribuição aditiva
$numero += 5;
echo '<br>' . $numero;
#Atribuição multiplicativa
$numero *= 2;
echo '<br>' .$numero;
#Atribuição divisiva
$numero /= 2;
echo '<br>' . $numero;
#Atribuição modular
$numero %= 7;
echo '<br>' . $numero;
#Atribuição usando potência
$numero **= 2;
echo '<br>' . $numero;
#Contatenar com atribuição
$numero .= 1;
echo '<br>' . $numero;

#Atribuir um valor padrão
//$variavelInxistente = "Valor inexistente";
echo '<br>' . $variavelInxistente;
$valor = $variavelInxistente ?? "Valor default";
echo '<br>' . $valor;