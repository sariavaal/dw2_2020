<?php
session_start();
require_once("libs/conex.php");
require_once("libs/acceso.lib.php");
require_once("libs/usuarios.lib.php");
if($_POST)
  {
  $esvalido= contravalidar($_SESSION['usuario'],md5($_POST['contrasenaactual']), $conn);
  if ($esvalido){
    //cambiar
    actualizarcontra($conn,md5($_POST['contrasenanueva']),$_SESSION['id']);
    header('Location:index.php?tipo=exito&mensaje=contraseña cambiada');
  }else{
    header('Location:index.php?tipo=error&mensaje=contraseña invalida');
  }
  //sugerenciaGuardar($conn, $_POST['nombre'], $_POST['telefono'],$_POST['correo'], $_POST['sugerencias']);
  }

 ?>