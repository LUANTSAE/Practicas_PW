<?php

$conexion=mysqli_connect('localhost','root','','pruebas');
if($conexion){
echo'conecxion exitosa';
}else{
echo 'no se conecto';
}
?>