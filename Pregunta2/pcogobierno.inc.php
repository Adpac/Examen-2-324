<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cogobierno</title>
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
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
h3{
	background-color: white;
	padding: 10px;
	padding-bottom: -2px;
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
	<h1>Representantes de Cogobierno</h1>



		<div id="Secretaria general" >
			<h3>Secretaria Ejecutiva</h3>
		   <table id="tablasecgral" border="1px">
			<thead>
				<td>Cargo</td>
				<td>Nombre</td>
				<td>CI</td>
				<td>Num. reg. Univ</td>
				<td>Subir documentos</td>
			</thead>
			<tbody>
				<tr>
					<td>Titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
		</table>
		</div>

		<div id="HCF" >
			<h3>Honorable consejo facultativo</h3>
		   <table id="tablasecgral" border="1px">
			<thead>
				<td>Cargo</td>
				<td>Nombre</td>
				<td>CI</td>
				<td>Num. reg. Univ</td>
				<td>Subir documentos</td>
			</thead>
			<tbody>
				<tr>
					<td>Titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
		</table>
		</div>


		<div id="CAF" >
			<h3>Consejo academico facultativo</h3>
		   <table id="tablasecgral" border="1px">
			<thead>
				<td>Cargo</td>
				<td>Nombre</td>
				<td>CI</td>
				<td>Num. reg. Univ</td>
				<td>Subir documentos</td>
			</thead>
			<tbody>
				<tr>
					<td>Titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
		</table>
		</div>

				<div id="HCC" >
			<h3>Honorable consejo de la Carrera</h3>
		   <table id="tablasecgral" border="1px">
			<thead>
				<td>Cargo</td>
				<td>Nombre</td>
				<td>CI</td>
				<td>Num. reg. Univ</td>
				<td>Subir documentos</td>
			</thead>
			<tbody>
				<tr>
					<td>Titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
		</table>
		</div>

				<div id="CAC" >
			<h3>Consejo Academico de la Carrera</h3>
		   <table id="tablasecgral" border="1px">
			<thead>
				<td>Cargo</td>
				<td>Nombre</td>
				<td>CI</td>
				<td>Num. reg. Univ</td>
				<td>Subir documentos</td>
			</thead>
			<tbody>
				<tr>
					<td>Titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do titular</td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
				<tr>
					<td>2do Suplente </td>
					<td><input type="text" name="nombre"></td>
					<td><input type="text" name="CI"></td>
					<td><input type="text" name="Num. Reg Univ."></td>
					<td><input type="file" name="cargar documentos"></td>
				</tr>
		</table>
		</div>
		<?php  

		?>
		<br>

	<input type="submit" name="Subir archivos">

	

</body>
</html>