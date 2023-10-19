<div class="titulo">Operações aritiméticas</div>

<?php
echo "\$ echo 1 + 1 ~> ", 1 + 1, '<br>';
echo "\$  var_dump(1 + 1.0) ~> ", var_dump(1 + 1.0);
echo '<br>';
echo "\$ echo 1 + 2.5 ~> ", 1 * 2.5, '<br>';
echo "\$ echo 10 - 2 ~> ", 10 - 2, '<br>';
echo "\$ echo 2 * 5 ~> ", 2 * 5, '<br>';
echo "\$ echo 7 / 5 ~> ", 7 / 5, '<br>';
echo "\$ echo intdiv(7, 4) ~> ", intdiv(7, 4), '<br>';
echo "\$ echo round(7 / 4) ~> ", round(7 / 4), '<br>';
echo "\$ echo 7 % 4 ~> ", 7 % 4, '<br>';
echo "\$ echo 4 ** 2 ~> ", 4 ** 2, '<br>';
echo "<p>Precedência de operadores: <br>
      ()  ~>  **  ~>  /  ~>  %  ~>  + -</p>";

echo "\$ echo 2 + 3 * 4 ~> ", 2 + 3 * 4, '<br>';
echo "\$ echo (2 + 3) * 4 ~> ", (2 + 3) * 4, '<br>';
echo "\$ echo 2 + 3 * 4 ** 2 ~> ", 2 + 3 * 4 ** 2, '<br>';
echo "\$ echo ((2 + 3) * 4) ** 2 ~> ", ((2 + 3) * 4) ** 2, '<br>';
