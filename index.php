<?php 
//forma correcta de hacer un include
include_once('class.Primera.php');
include_once('ejemplo/class.Segunda.php');

$objeto = new Primera('Esto es lo que sale al pasar un parametro por __construct');
$objeto->Imprimir();

 ?>