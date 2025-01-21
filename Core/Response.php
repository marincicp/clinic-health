<?php

namespace Core;

class Response
{

   const NOT_FOUND = 404;
   const FORBIDDEN = 403;
   const SUCCESS  = 200;
   const BAD_REQUEST  = 500;


   public static function abort($statusCode = null, $message = "Page not found")
   {

      if ($statusCode === null) {
         $statusCode = static::NOT_FOUND;
      }

      http_response_code($statusCode);
      header("Content-Type: application/json");
      echo   json_encode(["message" => $message]);
      exit();
   }
}
