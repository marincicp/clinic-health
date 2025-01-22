<?php

namespace Core;

use Exception;

class Container
{
   private array $intances = [];
   private array $services = [];

   public function bind(string $name, callable $value): callable
   {
      return $this->services[$name] = $value;
   }

   public function resolve(string $className): object
   {
      try {

         if (array_key_exists($className, $this->intances)) {
            return $this->intances[$className];
         }


         if (array_key_exists($className, $this->services)) {
            $this->intances[$className] =  $this->services[$className]();

            return $this->intances[$className];
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
