<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Listar Usuários</title>
  </head>
  <body>
    <header><h1>USUÁRIOS CADASTRADOS</h1></header>

<table>
  <thead>
    <th>Id</th>
    <th>Nome</th>
    <th>Apelido</th>
    <th>E-mail</th>
    <th>Telefone</th>
  </thead>
  <tbody>
    <?php
    require_once "banco.php";
    $sql = "select id,nome, email, apelido, telefone from cadastro";
    foreach (getConnection()->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['apelido']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['telefone']."</td>";
      echo "</tr>";
    }
    ?>
  </body>
</table>
    <div class="botao">
      <a href="index.php"  class="button button-login">Novo Cadastro</a>
    </div>
    <div>
      <form class="formExcluir" method="POST" action="excluir.php">
        <input type = "text" name="id" placeholder="Digite o ID para excluir:">
        <input type = "submit" value = "Excluir">
      </form>
    </div>


    <footer>TRABALHO PROG III</footer>
  </body>
</html>
