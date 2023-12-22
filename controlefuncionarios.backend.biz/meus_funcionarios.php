<?php
include('context.php');
if(isset($_POST['senha']) && isset($_POST['email']))
{
	$senhaPOST = $_POST['senha'];	
	$emailPOST = $_POST['email'];
	$find_gerente = "SELECT * FROM gerentes WHERE email='".$emailPOST."' and senha='".$senhaPOST . "'";
}
else if(isset($_GET['id']))
{
	$find_gerente = "SELECT * FROM gerentes WHERE id =".$_GET['id'];
}
else
{
	die("Erro no login");
}

	$resultado_find_gerente = mysqli_query($bd, $find_gerente) or die(mysqli_error($bd));
	while( $registro = mysqli_fetch_assoc($resultado_find_gerente))
	{
		$id = $registro['id'];
		$nome = $registro['nome'];
		$email = $registro['email'];
		$senha = $registro['senha'];
	}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Controle Funcionarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
        <h1>Controle Funcionarios</h1>
    </header>
	<main>
        <section>
<?php
$find_funcionarios = "SELECT * FROM funcionarios WHERE id_gerente = " . $id;
$resultado =  mysqli_query($bd, $find_funcionarios) or die(mysqli_error($bd));
?>
 			<h1>Meus Funcionarios</h1>
<?php
			echo "<a class='BtPadraoAnima' href='criar_funcionario.php?id=".$id."' >Criar novo funcionario</a>";
?>
			<a href='index.html'>Deslogar</a>


</p>
<?php
while ($funcionario = mysqli_fetch_assoc($resultado) )
{
	
	echo "<div class='Funcionarios'><a href='ver_funcionario.php?id=".$funcionario['id']."&id_gerente=".$id."'>";
		echo "<h2>" . $funcionario['titulo'] . "</h2>";
		echo "<p>De: " . $nome . "</p>";
		
	echo "</a>";
	echo "<div><a class='BtPadraoAnima' href='editar_funcionario.php?id=".$funcionario['id']."&id_gerente=".$id."'>Editar</a>";
	echo " <a class='BtPadraoAnima' href='apagar_funcionario.php?id=".$funcionario['id']."&id_gerente=".$id."'>Delete</a></div>";
	echo "</div><hr/>";

	
}
?>
	  </section>
    </main>
	<footer>
        <h3>Controle Funcionarios</h3>
    </footer>
</body>
<html>




