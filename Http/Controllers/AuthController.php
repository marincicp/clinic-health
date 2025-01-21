<?php


namespace Http\Controllers;

use Services\AuthService;

class AuthController extends Controller
{

   private AuthService $authService;

   public function __construct(AuthService $authService)
   {

      $this->authService = $authService;


      var_dump("iz controllera");
   }


   public   function index() {}



   public  function store()
   {
      echo "hello indx";
   }
}
