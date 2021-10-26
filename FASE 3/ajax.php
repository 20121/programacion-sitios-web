<!DOCTYPE html>
<html lang="es">
<head>
  <title>Consultar datos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['p']);

$con = mysqli_connect('localhost','root','12345678','BDUNAD301127_30');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM Tabla301127_30 WHERE Codigo = '".$q."'";
$result = mysqli_query($con,$sql);
?>
<table class="table table-bordered" >
<tr style="background-color: #36AED1">
<th>Codigo</th>
<th>Nombre_Producto</th>
<th>Marca_Producto</th>
<th>Precio_Compra</th>
<th>Cantidad_Compra</th>
</tr>
<?php
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Codigo'] . "</td>";
  echo "<td>" . $row['Nombre_Producto'] . "</td>";
  echo "<td>" . $row['Marca_Producto'] . "</td>";
  echo "<td>" . $row['Precio_Compra'] . "</td>";
  echo "<td>" . $row['Cantidad_Compra'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>