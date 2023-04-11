<?php

require_once("../../controlador/conexion.php");
require_once("../../controlador/validarSesion.php"); // hacer archivo  para inicio de seiciion 
$email = $_POST["email"];
$pass = $_POST["pass"];

$objetoConsultas = new ValidarSesion(); // Clase global  aca va iniciar sesion y cerrar sesion 
$objetoConsultas->iniciarSesion($email, $pass);

?>