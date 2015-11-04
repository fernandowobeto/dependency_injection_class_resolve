<?php

namespace Model;

class Estado extends Base
{

   protected $table = 'estados';
   protected $index = 'id';

   public function __construct($nome)
   {
      $this->nome = $nome;
   }

}