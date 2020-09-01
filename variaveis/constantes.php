<div class="titulo">Constantes</div>

<?php
#Padronização muito forte pra definir em PHP, é usando letras maiúsculas e separadas com underline
#Essa função é uma das formas pra definir constantes
define('TAXA_DE_JUROS', 5.9);
echo "Taxa de juros " . TAXA_DE_JUROS . "!";

const NOVA_TAXA = 2.5;
echo "<br>Nova taxa " . NOVA_TAXA . "!";

#Não da pra atribuir uma variável numa constante
$valorVariavel = 2.8;
//const NOVISSIMA_TAXA = $valorVariavel;
//const NOVISSIMA_TAXA = 2.8 + 1.2;

#Para atribuir uma variável numa constante
define('NOVISSIMA_TAXA', $valorVariavel);
echo "<br> Novissima taxa " .   NOVISSIMA_TAXA . "!";

echo "<br>" . PHP_VERSION;
echo "<br>" . PHP_INT_MAX;

echo "<br>" . __LINE__;
echo "<br>" . __FILE__;
echo "<br>" . __DIR__;