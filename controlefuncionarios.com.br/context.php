<?php
	$bd = mysqli_connect('192.168.100.20', 'ics', 'ics') or die('Incapaz de Conectar');
	mysqli_select_db($bd, 'sitenoticias') or die(mysqli_error($bd));
?>
