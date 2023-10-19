<div class="titulo">Desafio string</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string.
// qual o método que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?

$str = '!AbcaBcabc';

echo strpos($str, 'abc'), '<br>';
echo stripos($str, 'abc'), '<br>';
