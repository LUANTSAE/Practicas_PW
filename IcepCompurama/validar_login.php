<?php
// Conectar a la base de datos






$conexion=mysqli_connect('localhost','root','','pruebas');


if($conexion){
echo'conecxion exitosa';
}else{
echo 'no se conecto';
}




// Obtener los valores del formulario
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// Validar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE USUARIO = '$usuario' AND PASSWORD = '$contrasena'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 1) {
  // Iniciar sesión y redirigir al usuario a la página de inicio
  session_start();
  $_SESSION["usuario"] = $usuario;
  header("Location: usuarios.php");
} else {
  // Mostrar un mensaje de error si las credenciales son inválidas
  echo "Usuario o contraseña inválidos.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
?>