<div class="titulo">Tipo booleano</div>

<?php
echo TRUE, '<br>';
echo FALSE, '<br>';
echo var_dump(true), '<br>';
echo var_dump(False), '<br>';
echo var_dump('false'), '<br>';
echo is_bool(false), '<br>';
echo is_bool('true'), '<br>';

echo '<p>Regras:</p>';
echo var_dump((bool) 0), '<br>';
echo var_dump((bool) 20), '<br>';
echo var_dump((bool) -1), '<br>';
echo var_dump((bool) 0.0), '<br>';
echo var_dump((bool) 0.0001), '<br>';
echo var_dump((bool) ""), '<br>';
echo var_dump((bool) " "), '<br>';
echo var_dump((bool) "0"), '<br>';
echo var_dump((bool) "00"), '<br>';

echo var_dump(!!"00"), '<br>';
