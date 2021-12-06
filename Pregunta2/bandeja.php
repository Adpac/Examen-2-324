<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
	<style type="text/css">
		@font-face{
  font-family : "handwriting";

  src : url('journal.eot');
  src : url('journal.eot?') format('eot'),
        url('journal.woff') format('woff'),
        url('journal.ttf') format('truetype');
}

@font-face{
  font-family : "typewriter";

  src : url('veteran_typewriter.eot');
  src : url('veteran_typewriter.eot?') format('eot'),
        url('veteran_typewriter.woff') format('woff'),
        url('veteran_typewriter.ttf') format('truetype');
}
html {
	background : #222 url(background3.jpg);
}
body {
  font  : 21px sans-serif;

  padding : 2em;
  margin  : 0;

   background: rgba(0, 0, 0, 0.5);
}
div{
	padding: 5px;
	width: 100%;
	height: 100%;
	 background: rgba(0, 0, 0, 0.5);
}
h1 {
	color: white;
}
table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
   background-color: white;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   background: #eee;
}
form {
  position: relative;

  width  : 300px;
  height : 100px;
  margin : 0 auto;
  padding: 5px;

  background: #FFF url(background.jpg);
}
a{
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    background: rgba(0.5, 0.5, 0.5, 1.0);
  
    border-radius: 50px 50px 50px 50px;
    text-decoration: none;
    color: white;
}
	</style>
<body>


<?php
session_start();
include "conexion.inc.php";
$sql="select * from seguimiento where usuario='".$_SESSION["usuario"]."' ";
$sql.="and fechafin is null";
$resultado=mysqli_query($conn, $sql);
?>
<div>

<table>
<tr>
	<td>Tramite</td>
	<td>Flujo</td>
	<td>Proceso</td>
	<td>Fecha Inicio</td>
	<td>Accion</td>
</tr>
<?php
while($fila=mysqli_fetch_array($resultado))
{
	echo "  <caption>Flujos</caption>";
	echo "<tr>";
	echo "<td>".$fila["notramite"]."</td>";
	echo "<td>".$fila["flujo"]."</td>";
	echo "<td>".$fila["proceso"]."</td>";
	echo "<td>".$fila["fechainicio"]."</td>";
	echo "<td><a ";
	echo "href='desflujo.php?flujo=$fila[flujo]&proceso=$fila[proceso]'";
	echo ">Mostrar<a/></td>";
	echo "</tr>";
}
?>
</table>
</div>
</body>
</html>