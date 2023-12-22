<?php
include('context.php');
$nome = $_POST['nome']; 
$cargo = $_POST['cargo'];
$id_gerente= $_POST['id_gerente'];

$add = "INSERT INTO funcionarios (nome, cargo, id_gerente) VALUES ('" .
	$nome . "','" . $cargo . "'," . $id_gerente . ")";
$resultado = mysqli_query($bd, $add) or die(mysqli_error($bd));
?>
<script>
	alert("funcionario criado com sucesso");
	<?php
	echo "window.location='meus_funcionarios.php?id=" . $id_gerente ."';"; 
	?>
</script>
