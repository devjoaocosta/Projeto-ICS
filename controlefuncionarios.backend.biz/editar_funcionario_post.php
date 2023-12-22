<?php
include('context.php');
$nome = $_POST['nome']; 
$cargo = $_POST['cargo'];
$id_gerente= $_POST['id_gerente'];
$id = $_POST['id'];

$upd = "UPDATE funcionarios SET nome='".$nome."',cargo='".$cargo."' WHERE id=".$id;
$resultado = mysqli_query($bd, $upd) or die(mysqli_error($bd));
?>
<script>
	alert("funcionario atualizado com sucesso");
	<?php
	echo "window.location='meus_funcionarios.php?id=" . $id_gerente ."';"; 
	?>
</script>
