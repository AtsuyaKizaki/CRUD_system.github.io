<?php
$dsn = 'mysql:host=localhost; dbname=mydb;charset=utf8;';
$user='root';
$password='';
try {
  $db = new PDO($dsn , $user , $password);

} catch (PDOException $e) {
  echo ' DB接続エラー: ' . $e->getMessage();
}
 ?>
