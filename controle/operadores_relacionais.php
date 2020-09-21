<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); //true
var_dump(1 > 1); //false
var_dump(1 >= 1); //true
var_dump(4 < 23); //true
var_dump(1 <= 7); //true
var_dump(1 != 1); //false
var_dump(1 <> 1); //false //diferente também

var_dump(111 == '111');
echo '<br>';
var_dump(111 === '111');
echo '<br>';
var_dump(111 != '111');
echo '<br>';
var_dump(111 !== '111');
echo '<br>';
echo '<br>';

echo "<p>Relacionais no If/Else</p><hr>";

$idade = 27;
if($idade < 18) {
    echo "Menor de idade = $idade";
} else if($idade <= 65) {
    echo "Adulto = $idade";
} else {
    echo "Terceira idade = $idade";
}

echo "<p>Spaceship</p><hr>";
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

#Pra descobrir se é verdadeiro ou falso
echo "<p>Valores poder ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
p {
    margin-bottom: 0px;
}
hr {
    margin-top: 0px;
}
</style>