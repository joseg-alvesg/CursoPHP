<!DOCTYPE html>
<html lang="pt">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <link href="assets/css/style.css" rel="stylesheet"> <title>Curso PHP COD3R</title>
  </head>
  <body>
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
      <div class="conteudo">
        <nav class="modulos">
          <div class="modulo verde">
            <h3>Básico</h3>
            <ul>
              <li><a href="exercise.php?dir=basico&file=ola">Olá PHP</a></li>
              <li><a href="exercise.php?dir=basico&file=html">Integração HTML</a></li>
              <li><a href="exercise.php?dir=basico&file=css">Integração CSS</a></li>
              <li><a href="exercise.php?dir=basico&file=comentarios">Comentários PHP</a></li>
              <li><a href="exercise.php?dir=basico&file=desafio">Desafio</a></li>
            </ul>
          </div>
          <div class="modulo vermelho">
            <h3>Tipos</h3>
            <ul>
              <li><a href="exercise.php?dir=tipos&file=int">Tipo interito</a></li>
              <li><a href="exercise.php?dir=tipos&file=float">Tipo float</a></li>
              <li><a href="exercise.php?dir=tipos&file=aritimeticas">Op. aritiméticas</a></li>
              <li><a href="exercise.php?dir=tipos&file=desafio_precedencia">Desafio precedência</a></li>
              <li><a href="exercise.php?dir=tipos&file=string">Tipo string</a></li>
              <li><a href="exercise.php?dir=tipos&file=desafio_string">Desafio string</a></li>
              <li><a href="exercise.php?dir=tipos&file=boolean">Tipo booleano</a></li>
              <li><a href="exercise.php?dir=tipos&file=conversoes">Conversões</a></li>
            </ul>
          </div>
          <div class="modulo azul">
            <h3>Variáveis</h3>
            <ul>
              <li><a href="exercise.php?dir=variaveis&file=basico">Variáveis</a></li>
              <li><a href="exercise.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
              <li><a href="exercise.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
              <li><a href="exercise.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
              <li><a href="exercise.php?dir=variaveis&file=variaveis_variaveis">Variaveis variaveis</a></li>
              <li><a href="exercise.php?dir=variaveis&file=desafio_variaveis">Desafio variaveis</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </main>
    <footer class="rodape">
      CODER & ALUNOS © <?= date('Y'); ?>
      </footer>
    </body>
  </html>
