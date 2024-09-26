<?php 

/**
 * Librería que nos permite depurar código de php desde el navegador
 * Tracy Debugger
 * >composer require tracy/tracy
 */

 require_once 'vendor/autoload.php';

 use Tracy\Debugger;
 Debugger::enable();

 $frutas = ['Naranjas', 'Fresas', 'Melocotones'];

 Debugger::barDump($frutas, 'Frutas');

 echo "<h1>Debugueando con Tracy</h1>";

 try{
    throw new Exception("Error gordo gordísimo");
 }catch(Exception $e){
    Debugger::log($e);
 }

 