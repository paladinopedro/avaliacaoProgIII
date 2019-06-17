<?php

require_once "banco.php";
$id = $_POST['id'];

try{
  $sql = "DELETE FROM cadastro WHERE id=:id";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':id', $id);
if ($stmt->execute())
  include ("lista.php");
else
  echo "Falhou";
}catch(PDOException $e) {
echo 'Erro: ' . $e->getMessage();
}
?>
