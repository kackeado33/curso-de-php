<div class="titulo">operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
#Mesmo dividindo com números inteiros,
#a resposta vem quebrada
echo 7 / 4, '<br>';
#Pra dividir com números inteiros e vim  o inteiro
#tirando o arredondamento
echo intdiv(7, 4), '<br>';
#Arredonda pra inteiro
echo round(7 / 4), '<br>';
#Resto da divisão (modulo)
echo 7 % 4, '<br>';
echo 7 % 2,'<br>';
echo 8 % 2, '<br>';
echo 7 / 0, '<br>';
#echo intdiv(7, 0), '<br>'; // Erro!
#Exponenciação (4 elevado ao 2)
echo 4 ** 2, '<br>';

#Precedência de operadores:
#() => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4 ) ** 2;