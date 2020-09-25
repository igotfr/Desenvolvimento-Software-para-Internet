<?php
// https://www.devmedia.com.br/crud-com-php-pdo/28873
// https://www.php.net/manual/pt_BR/class.pdo.php
// https://codeshack.io/super-fast-php-mysql-database-class/

class ConexaoMySQL {
  public $conexao;

  public function __construct($dbFile = "../setting.ini") {
    if ( !$settings = parse_ini_file($dbFile, TRUE) )
      throw new exception("Unable to open $dbFile .");

    try {
      $this->conexao = new PDO("{$settings["database"]["driver"]}:host={$settings["database"]["host"]};dbname={$settings["database"]["database"]}", $settings["database"]["username"], $settings["database"]["password"]);
      $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch ( PDOException $e ) {
      echo "Error: {$e->getMessage()}";
    }
  }
}