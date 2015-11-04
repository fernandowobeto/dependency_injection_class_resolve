<?php

include 'Request.php';
include 'Base.php';
include 'Cidade.php';
include 'Estado.php';


$route = 'Cidade@salvar';

list($class, $method) = explode('@', $route);

$reflectionClass = new ReflectionClass($class);

$reflectionMethod = $reflectionClass->getMethod($method);

$class = $reflectionClass->newInstance();

$reflectionMethod = new ReflectionMethod($class, $method);

$parameters = array();

$parametersMethod = $reflectionMethod->getParameters();

if(count($parametersMethod)){
   foreach($parametersMethod AS $parameter){
      if($parameter->getClass()){

         $parameters[] = $parameter->getClass()->newInstance();
      }
   }
}


$reflectionMethod->invokeArgs($class, $parameters);