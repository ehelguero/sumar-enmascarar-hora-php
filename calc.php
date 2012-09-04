<?php
#1- pedir la hora via formular
if($_GET['hora'] && $_GET['hora']!=" "){
	$hora = $_GET['hora'];

	#2- guardar la fecha actual fomato Y-m-d
	$fecha = date('Y-m-d');
				
	#3- concatenar la variable fecha y la hora que se pidio en l formulario. en este ejemplo es '07:00'
	$fecha = date_create($fecha . $hora);

	#4- le damos formato a la fecha
	$fecha = date_format($fecha, 'd/m/Y H:i'); // 's' segundos
				
	#5- guardamos el dia para saber cuando es viernes==5
	$control_dia = date('w'); // , strtotime('+3 days');
	//echo "A partir de esta fecha: " . $fecha . ", calculamos la hora de salida <br/><br/>";

	if($control_dia == 5){
	echo "+7 horas y 00 minutos --> ". date('H:i',strtotime($fecha . '+7 hour'));	
	}
	else{
		echo "+9 horas y 25 minutos --> ". date('H:i',strtotime($fecha . '+9 hour +25 minutes'));
		}
	}
?>		