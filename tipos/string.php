<div class="titulo">Tipo String</div>

<?php
#Parênteses no echo
echo 'Eu sou uma string';
echo '<br>';
#O acento no 'e' é calculado como um caractere a mais
var_dump("Eu também");
echo '<br>';

#Concatenação
#Não gera erro concatenar string com aspas duplas ou simples
echo "Nos também" . ' somos';
#Não é válido concatenar com ','
echo '<br>', "Também aceito", " virgulas";
echo '<br>';
#'\ skap'
echo "'Teste' " . '"Teste"' . '\' Teste\' ' . "\" Teste\" " . "\\";
echo '<br>';

print("<br>Também existe a função print");
#Sem parênteses
print"<br>Também existe a função print";

#Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letras será maiúscula');
echo '<br>' . ucwords('todas as primeiras letras serão maiúculas');
echo '<br>' . strlen('Quantos caracteres?');
#strlan não se da bem com o UTF-8
echo '<br>' . strlen('Eu também');
#Para contar de forma correta
echo '<br>' . mb_strlen('Eu também');
#Outra forma pra reforçar
echo '<br>' . mb_strlen('Eu também', 'utf-8');
echo '<br>' . substr('Só uma parte mesmo', 7, 6);
#troca o primeiro param pelo segundo
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');
echo '<br>';

var_dump(mb_strlen("Eu também", "utf-8"));