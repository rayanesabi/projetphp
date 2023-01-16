<?php
require_once 'Config.php';

final class Connection {

    private PDO $pdo;

    private static ?self $instance = null;
   private const db_server_name = "mysql-caramelange.alwaysdata.net"; 
   private const db_username = "295328";
   private  const db_password = "projetphp";
   private  const db_name = "caramelange_feur";

    private function __construct() {
        $dsn = sprintf('mysql:dbname=%s;host=%s', self::db_name, self::db_server_name);
        $this->pdo = new PDO($dsn, self::db_username, self::db_password);
    }

    public function query($query) {
        return $this->pdo->query($query);
    }

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function save(string $S_table, array $A_parametres) {

    }
}