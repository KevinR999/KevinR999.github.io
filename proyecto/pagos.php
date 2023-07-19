<?php
 include_once('db.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$productos=$_POST['productos'];
$pago=$_POST['pago'];
$datos=$_POST['datos'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$total=$_POST['total'];
$telefono=$_POST['telefono'];

echo "Los datos son los siguientes: <br>";
echo "$nombres,$apellidos,$productos,$pago,$datos,$ciudad,$total, $telefono";

                          


          $conectar=conn();
          $sql="INSERT INTO pagos (nombres, apellidos, productos, pago, datos, direccion, ciudad, total, telefono)
          VALUES ( '$nombres', '$apellidos', '$productos', '$pago', '$datos','$direccion', '$ciudad', '$total', '$telefono')";
          $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

          echo "$sql";
?>