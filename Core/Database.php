<?php

namespace Core;

use PDO;
use PDOException;

require_once "./Core/functions.php";
class Database
{

   private $conn;
   private $stmt;


   public  function __construct()
   {
      $this->connect();
   }

   private function connect()
   {
      $config = require_once "./Core/config.php";
      $dbConfig = $config["database"];

      $dsn = "mysql:host={$dbConfig['host']};port={$dbConfig['port']};dbname={$dbConfig['dbname']}";

      try {
         $this->conn = new PDO($dsn, "root", "", [PDO::FETCH_ASSOC]);
      } catch (PDOException $err) {
         // todo zavrsiti
         dd($err->getMessage());
      }
   }

   public function query($query, $params = []): static
   {

      $this->stmt = $this->conn->prepare($query);
      $this->stmt->execute($params);
      return $this;
   }


   public function fetchAll(): array
   {
      return $this->stmt->fetchAll();
   }


   public function find(): array
   {
      return $this->stmt->fetch();
   }
}
