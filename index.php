<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Calcular hora de salida</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Los estilos -->	
	<link href="css/estilos.css" rel="stylesheet">
	<!-- js -->  
	<script src="js/jquery-1.8.1.min.js"></script>  
	<script src="js/jquery.maskedinput-1.3.js"></script>
	<script src="js/mi_script.js"></script>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="bootstrap/js/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div id="contenedor">
			<h1><img src="img/logo.png" alt="Johny´s Code" /></h1>
			<div id="calc_salida">
				<h2>Hora de entrada</h2>
				<p class="exito">La hora señalada es correcta.</p>
				<p clasS="error">La hora introducida es incorrecta.</p>
		    	<form id="form_calc" action="calc.php" method="post" accept-charset="utf-8">
			    	<input id="time" type="text" name="hora" value="" onblur="valida(this.value);" />
		    		<input type="submit" name="submit" value="Calcular Salida" class="btn btn-primary btn-large" />
		    	</form>
			</div>
			<div id="resultado"></div>
		</div>
	</div>
</body>
</html>