<?php
include('context.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$add = "INSERT INTO gerentes (nome,email,senha) VALUES ('".$nome ."','".$email."','".$senha."')";
$resultado = mysqli_query($bd, $add) or die(mysqli_error($db));
?>

<script>
	alert("Gerente adicionado com sucesso");
	window.location = "index.html";
</script>
