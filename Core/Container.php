<?php

namespace Core;

use Exception;

class Container
{

   private array $services = [];

   public function bind($name, $value)
   {
      return $this->services[$name] = $value;
   }

   public function resolve(string $className)
   {
      try {


         if (array_key_exists($className, $this->services)) {
            return $this->services["className"]();
         }


         $reflector = new \ReflectionClass($className);
         $contructor = $reflector->getConstructor();

         if ($contructor === null) {
            return new $className;
         }

         $dependencies = [];

         foreach ($contructor->getParameters() as $param) {
            $type = $param->getType();

            $dependencies[] = $this->resolve((string)$type);
         }
         return new $className(...$dependencies);
      } catch (Exception $err) {


         // todo zavrsiti
         var_dump($err->getMessage());

         exit();
      }
   }
}
