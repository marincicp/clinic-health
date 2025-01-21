<?php

namespace Services;

use Repositories\AuthRepository;

class AuthService
{

   private AuthRepository $authRepository;


   public function __construct(AuthRepository $authRepository)
   {
      $this->authRepository = $authRepository;



      var_dump("iz service");
   }


   public static function login()
   {


      echo "loign service";
   }
}
