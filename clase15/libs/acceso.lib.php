<?php
require_once("libs/conex.php");
function usuariovalidar($usuario, $contrasena, $conn)
  {
    $usuario = filter_var($usuario ,FILTER_SANITIZE_SPECIAL_CHARS );
  $sql='SELECT * FROM usuarios where usuario="'.$usuario.'" and contrasena= "'.$contrasena.'" ';
  //echo $sql;
  $filas=$conn->query($sql);
  if ($filas->num_rows==1)
    {
    $d=$filas->fetch_assoc();
    $_SESSION['id']=$d['id'];
    $_SESSION['usuario']=$d['usuario'];
    $_SESSION['correo']=$d['correo'];
    $_SESSION['nombre']=$d['nombre'];
    $_SESSION['administrador']=$d['administrador'];
    header('Location:index.php?tipo=exito&mensaje=acceso exitoso');  
  } else {
      header('Location:index.php?tipo=error&mensaje=error');
    }
  }
  function usuariosalir()
  {
  session_destroy();
  }

  function contravalidar($usuario, $contrasena, $conn)
  {
  $sql='SELECT * FROM usuarios where usuario="'.$usuario.'" and contrasena= "'.$contrasena.'" ';
  //echo $sql;
  $filas=$conn->query($sql);
  if ($filas->num_rows==1)
    {
    return 1;
}
 else {
     return 0;
    }
  }
  


 ?>
