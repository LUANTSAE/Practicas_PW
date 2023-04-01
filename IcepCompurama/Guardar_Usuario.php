<?php
// Conectar a la base de datos






$conexion=mysqli_connect('localhost','root','','pruebas');


if($conexion){
echo'conecxion exitosa';
}else{
echo 'no se conecto';
}



// Verificar la conexión


// Recibir los datos del formulario
$username = $_POST["username"];
$password = $_POST["password"];

// Guardar los datos en la base de datos
$sql = "INSERT INTO usuarios (USUARIO, PASSWORD) VALUES ('$username', '$password')";

if ($conexion->query($sql) === TRUE) {
  echo "Usuario guardado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>