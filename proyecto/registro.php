
<?php
 include_once('db.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

echo "Los datos son los siguientes: <br>";
echo "$nombres,$apellidos,$edad,$correo,$usuario,$contraseña";

                          


$conectar=conn();
$sql="INSERT INTO registro (nombres, apellidos, edad, correo, usuario, contraseña)
VALUES ( '$nombres', '$apellidos', '$edad', '$correo', '$usuario','$contraseña')";
$resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

?>