<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //not

echo "<p class='divisao'>Tabela verdade 'AND' (E)</p>";
#Todos tem que ser verdadeiro pra da verdadeiro
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');
#Também posso usar assim
var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND true);
var_dump(false AND false);

echo "<p class='divisao'>Tabela verdade 'OR' (OU)</p>";
#Só é falso se todos forem falsos
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
#Também posso usar assim
var_dump(true OR true);
var_dump(true OR false);
var_dump(false OR true);
var_dump(false OR false);

echo "<p class='divisao'>Tabela verdade 'XOR' (OU Exclusivo)</p>";
#Tem que da um verdadeiro e outro falso pra ser verdadeiro
var_dump(true XOR true);
var_dump(true XOR false);
var_dump(false XOR true);
var_dump(false XOR false);
#Também pode usar assim
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'M';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";
// $podeSeAposentar = $pagouPrevidencia && 
//     (
//         ($idade >= 60 && $sexo ==='F') || 
//         ($idade >= 65 && $sexo === 'M')
//     );

if($idade >= 60 && $sexo ==='F') {
    echo "Pode se aposentar -> $sexo.";
} else if ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo.";
} else {
    echo 'Vai ter que trabalhar mais um pouco...!';
} 