<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(TRUE);
echo '<br>' . var_dump(FALSE);
echo '<br>' . var_dump('false');

#Verifica se é um valor booleano
echo '<br>' . is_bool(false);
echo '<br>' . is_bool(true);


#Fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //Apenas o zero é false dos números
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000001);
echo '<br>' . var_dump((bool) ""); //False
echo '<br>' . var_dump((bool) " "); //True
echo '<br>' . var_dump((bool) "0"); //Zero na string da false
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");

#Usando negação
echo '<br>' . var_dump(!!"false"); //True
echo '<br>' . var_dump(!"false"); //False
