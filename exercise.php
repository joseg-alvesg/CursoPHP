  <!DOCTYPE html>
<html lang="pt">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/exercise.css" rel="stylesheet">
    <title>Curso PHP COD3R</title>
  </head>
  <body class="exercise">
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
      <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
      <div class="conteudo">
        <?php
          include("{$_GET['dir']}/{$_GET['file']}.php")
        ?>
        </div>
      </main>
      <footer class="rodape">
        CODER & ALUNOS © <?php echo date('Y') ?>
        </footer>
      </body>
    </html>
