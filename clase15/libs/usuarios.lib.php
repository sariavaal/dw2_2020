<?php

// crear
function crear_usuario($conn, $nombre, $usuario,$contrasena,$correo )
{
  $nombre = filter_var($nombre ,FILTER_SANITIZE_SPECIAL_CHARS );
  $usuario = filter_var($usuario ,FILTER_SANITIZE_SPECIAL_CHARS );
  $correo = filter_var($correo ,FILTER_SANITIZE_EMAIL );
  $correo = filter_var($correo , FILTER_VALIDATE_EMAIL);
$sql="INSERT INTO usuarios (id, nombre, usuario, contrasena, correo, administrador)
  VALUES (NULL, '".$nombre."', '".$usuario."', '".$contrasena."', '".$correo."',0)";
  //echo $sql;
  $filas=$conn->query($sql);
}

function actualizarcontra($conn,$contrasena,$id)
{
  $sql='update usuarios set contrasena = \'' . $contrasena . '\' where id = '.$id ;
//  echo "\n".$sql;die;
  $filas=$conn->query($sql);
}

function actualizardatos($conn,$nombre,$correo,$id)
{ 
  $sql='update usuarios set nombre = \'' . $nombre . '\' ,correo = \'' . $correo . '\'  where id = '.$id ;
//  echo "\n".$sql;die;
  $filas=$conn->query($sql);
}
// modificar

// borrar

// cambiar password



 ?>
