<?php
include_once "./database/mysql.php";

$db = new ConexaoMySql("./setting.ini");

// implementar uma função insert com foreach depois
try {
  $stmt = $db->conexao->prepare("INSERT INTO Pessoa (nome, telefone) VALUES(:nome, :telefone)");
  $stmt->execute(array(
    ":nome" => "Firme",
    ":telefone" => "1111111111"
  ));
} catch ( PDOException $e ) {
  echo "Error: {$e->getMessage()}";
}