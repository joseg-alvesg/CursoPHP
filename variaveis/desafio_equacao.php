<div class="titulo">Desafio Equação</div>

<?php

$n1 = (6 * (3 + 2)) ** 2;
$d1 = 3 * 2;
$n2 = (1 - 5) * (2 - 7);
$d2 = 2;
$s1 = $n1 / $d1;
$s2 = ($n2 / $d2) ** 2;
$s = ($s1 - $s2) ** 3;
$i = 10 ** 3;
$f = $s / $i;

echo '
$n1 = (6 * (3 + 2)) ** 2;
<br>
$d1 = 3 * 2;
<br>
$n2 = (1 - 5) * (2 - 7);
<br>
$d2 = 2;
<br>
$s1 = $n1 / $d1;
<br>
$s2 = ($n2 / $d2) ** 2;
<br>
$s = ($s1 - $s2) ** 3;
<br>
$i = 10 ** 3;
<br>
$f = $s / $i;
<br>
';
echo 'Resultado: ' . $f;

