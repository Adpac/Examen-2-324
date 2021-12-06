<html>
<head>
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

body {
  font  : 21px sans-serif;

  padding : 2em;
  margin  : 0;
background : #222 url(background2.jpg);
  
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
form {
  position: relative;

  width  : 300px;
  height : 100px;
  margin : 0 auto;
  padding: 5px;

  background: #FFF url(background.jpg);
}
	</style>
</head>
<body>
	<div>
	<h1> Registro de estudiantes al CEI</h1>
<form action="controlindex.php" method="GET">
Usuario
<input type="text" name="usuario" value="">
<br>
Contraseña
<input type="password" name="contrasenia" value="">
<br>
<br>
<input type="submit" name="Aceptar" value="Aceptar">
</form>
</div>
</body>
</html>