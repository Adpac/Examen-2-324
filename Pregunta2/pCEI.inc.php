<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
	background : #222 url(background4.jpg);
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

  width  : 400px;
  height : 600px;
  margin : 0 auto;
  padding: 5px;

  background: #FFF url(background5.jpg);
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
input {
  position: relative;
border-radius: 50px 50px 50px 50px;
	height: 30px;
}
	</style>
</head>
<body>

		<p>Nombre del Partido <input type="Text" name="nombre"> </p>	
		<p>Sigla <input type="Text" name="nombre"> </p>	
		<p>Ingrese el logo del partido politico</p>
		<img id="imagenPrevisualizacion" src="img.png" width="300" height="300">
	
		<br>
		<input type="file" id="seleccionArchivos" name="imagen"  accept="image/*" size="20">
		<br>
		

	
	<?php 
		//Recibimos los datos de la imagen

		$nombre_imagen=$_FILES['imagen']['name'];
		$tipoimagen_imagen=$_FILES['imagen']['type'];
		$tamaño_Imagen=$_FILES['imagen']['size'];


		$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'Examen2 324/Pregunta2/';
		move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
		
	 ?>
	 <script type="text/javascript">
	 	const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
  		$imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

		// Escuchar cuando cambie
		$seleccionArchivos.addEventListener("change", () => {
		  // Los archivos seleccionados, pueden ser muchos o uno
		  const archivos = $seleccionArchivos.files;
		  // Si no hay archivos salimos de la función y quitamos la imagen
		  if (!archivos || !archivos.length) {
		    $imagenPrevisualizacion.src = "img.png";
		    return;
		  }
		  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
		  const primerArchivo = archivos[0];
		  // Lo convertimos a un objeto de tipo objectURL
		  const objectURL = URL.createObjectURL(primerArchivo);
		  // Y a la fuente de la imagen le ponemos el objectURL
		  $imagenPrevisualizacion.src = objectURL;
		});
	 </script>

</body>
</html>