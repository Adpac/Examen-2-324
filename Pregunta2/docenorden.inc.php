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
form {
  position: relative;
  margin-top: 30%;

  width  : 400px;
  height : 200px;
  margin : 0 auto;
  padding: 10px;

  background: #FFF url(background5.jpg);
}
select{
	width: 70px;
	height: 40px;
	border-radius: 50px 50px 50px 50px;
	padding: 10px;
	}
	</style>

</head>
<body>
	
		<p>Esta todo en orden?</p>
		<select name="pregunta" id="pregunta">
			 <option value="SI">SI</option>
  			 <option value="NO">NO</option>
  
		</select>
		<br>
		<br>


</body>
</html>