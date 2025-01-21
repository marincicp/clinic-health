<?php


namespace Repositories;

use Core\Database;

class AuthRepository
{

   private Database $db;

   public function __construct(Database $db)
   {

      $this->db = $db;


      var_dump(" iz AuthRepository");
   }
}
