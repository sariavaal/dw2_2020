<?php
session_start();
require_once("libs/conex.php");
require_once("libs/acceso.lib.php");
require_once("libs/usuarios.lib.php");
if($_POST) {
    actualizardatos($conn,$_POST['nombre'],$_POST['correo'], $_SESSION['id']);
    $_SESSION["nombre"] = $_POST['nombre'];
    $_SESSION["correo"] = $_POST['correo'];
    header('Location:index.php?tipo=exito&mensaje=Datos actualizados.');
}

 ?>