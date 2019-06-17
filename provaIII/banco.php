<?php
function getConnection() {
  $username = 'root';
  $password = '';
  $conn = new PDO('mysql:host=localhost;dbname=trabalho',  $username, $password);
  return $conn;
}
 ?>
