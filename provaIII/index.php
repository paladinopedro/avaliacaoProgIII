<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>AVALIAÇÃO PRÁTICA - PROG III</title>
  </head>
  <body>
    <header><h1>AVALIAÇÃO PROG III</h1></header>
    <div>
      <form class="cor formPrincipal" method="POST" action="cadastro.php">
        <div><h3>CADASTRO DE CONTATO</h3></div>
        <div>
          <input type="text" name="nome" placeholder="Digite seu Nome:">
        </div>
        <div>
          <input type="text" name="apelido" placeholder="Digite seu Apelido:">
        </div>
        <div>
          <input type="text" name="telefone" placeholder="Digite seu Telefone:">
        </div>
        <div>
          <input type="email" name="email" placeholder="Digite seu Email:">
        </div>
        <div>
          <input type="submit" name="enviar" value="Enviar">
        </div>
      </form>
      <div class="altura">
        <form class="cor"><a href="lista.php"  class="button button-login" >Usuario já cadastrados</a></form>
      </div>
    </div>
    <footer>TRABALHO PROG III</footer>
  </body>
</html>
