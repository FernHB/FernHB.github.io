<?php
require ('conexion.php');
$id=$_GET['t'];
$query="SELECT * FROM alumnos WHERE dni='$id'";
$resultado=$mysqli->query($query);

while($registro=mysqli_fetch_array($resultado)) {

echo $registro['nombre'].PHP_EOL;
echo $registro['apellido_paterno'].PHP_EOL;
echo $registro['apellido_materno'];

}
?>
