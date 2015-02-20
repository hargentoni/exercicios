<?php 
 function autoload($className)
 {
 	$className = ltrim($className, '\\');
 	$fileName = '';
 	$namespace = '';
 	if ($lastNsPos = strrpos($className, '\\')){
 		$namespace = subtr($className, 0, $lastNsPos);
 		$fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
 	}
 	$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

 	require 'lib'.DIRECTORY_SEPARATOR.$fileName;

 }

 ?>