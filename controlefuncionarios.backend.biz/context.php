<?php
	$bd = mysqli_connect('192.168.100.20', 'usuario', 's') or die('Incapaz de Conectar');
	mysqli_select_db($bd, 'sitefuncionarios') or die(mysqli_error($bd));
?>
