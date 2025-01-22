<?php

namespace Core;


class App
{
   private Router $router;
   private object $container;

   public function __construct()
   {

      $this->container = new Container;
      $this->router = new Router($this->container);
   }


   public function getRouter()
   {
      return $this->router;
   }

   public function getContainer()
   {
      return $this->container;
   }
}
