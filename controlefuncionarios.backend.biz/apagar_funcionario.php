<?php
include('context.php');
$id= $_GET['id'];
$id_gerente = $_GET['id_gerente'];
$del = "DELETE FROM funcionarios WHERE id = " . $id ;
$resultado = mysqli_query($bd, $del) or die(mysqli_error($bd));
?>
<script>
	alert("funcionario removido com sucesso");
	<?php
	echo "window.location='meus_funcionarios.php?id=" . $id_gerente ."';"; 
	?>
</script>
