<div class="titulo">Tipo string</div>

<?php

echo 'Eu sou uma string', '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação

echo ("Nós também" . ' somos'), '<br>';
echo "Também aceito", " virgulas", '<br>';

echo "'Teste' " . '"Teste" '. '\'Teste\' '. "\"Teste\" " . "\\", '<br>';

print("Também existe a função print<br>");
print "Também existe a função print<br>";

echo strtoupper('maximizado'), '<br>';
echo strtolower('MINIMIZADO'), '<br>';
echo ucfirst('só a primeira letra'), '<br>';
echo ucwords('todas as palavras'), '<br>';
echo strlen('Quantas letras?'), '<br>';
echo mb_strlen("Eu também", "utf-8"), '<br>';
echo substr('Só uma parte mesmo', 7, 6), '<br>';
echo str_replace('isso', 'aquilo', 'Trocar isso isso'), '<br>';
