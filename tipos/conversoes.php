<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

#Int para float
echo "<p>Int para Float</p>";
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

#Float para int
echo "<p>Float para Int</p>";
var_dump((int) 2.8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(2.999)); //Para arredondar

#Operações com string
echo "<p>Operações com String</p>";
#Strinfo para int
var_dump((int) "10.5");
echo '<br>';
#String para float
var_dump((float) "10.5");
echo '<br>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>';
echo is_string("3" . 2);
echo is_string("3" + 2);
echo '<br>';
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "cinco 5");
echo '<br>';
var_dump(1 + "2+5");
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';