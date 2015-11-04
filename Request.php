<?php

class Request
{

   protected $post;
   protected $get;

   public function __construct()
   {
      $this->post = $_POST;
      $this->get  = $_GET;
   }

   public function get($name = null)
   {
      if (!is_null($name)) {
         return isset($this->get[$name]) ? $this->get[$name] : null;
      }

      return $this->get;
   }

   public function post($name = null)
   {
      if (!is_null($name)) {
         return isset($this->post[$name]) ? $this->post[$name] : null;
      }

      return $this->post;
   }


}