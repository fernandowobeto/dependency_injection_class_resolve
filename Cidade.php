<?php

class Cidade
{

   protected $pid;

   public function __construct ()
   {
      $this->pid = uniqid();
   }

   public function  getPid()
   {
      return $this->pid;
   }

   public function salvar (Request $request)
   {
      var_dump($request->get());
   }

}