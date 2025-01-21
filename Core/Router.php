<?php

namespace Core;


require "./Core/functions.php";

class Router
{
   private array $routes = [];
   private Container $container;


   public function __construct(Container $container)
   {
      $this->container = $container;
   }



   private function add(string $uri, string $controller, string $action, string $method): array
   {
      return    $this->routes[] = [
         "uri" => $uri,
         "controller" => $controller,
         "action" => $action,
         "method" => $method
      ];
   }

   public function get(string $uri, string $controller, string $action): array
   {
      return $this->add($uri, $controller, $action, "GET");
   }

   public function delete(string $uri, string $controller, string $action): array
   {
      return $this->add($uri, $controller, $action, "DELETE");
   }


   public function PUT(string $uri, string $controller, string $action): array
   {
      return $this->add($uri, $controller, $action, "PUT");
   }

   public function post(string $uri, string $controller, string $action): array
   {
      return $this->add($uri, $controller, $action, "POST");
   }



   public function route(string $uri, string $method)
   {

      foreach ($this->routes as $route) {
         if ($route["uri"] === $uri && $route["method"] === $method) {
            $controller = $this->container->resolve($route["controller"]);
            return  call_user_func([$controller, $route["action"]]);
         }
      }

      Response::abort();
   }
}
