<?php
include('context.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Controle Funcionarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./bunitin.css" media="screen" />
</head>
<body>
	<header>
        <h1>Controle Funcionarios</h1>
    </header>
<?php
$comando = "SELECT * FROM funcionarios";
$resultado =  mysqli_query($bd, $comando) or die(mysqli_error($bd));
?>
	<main>
        <section>
    
			<h1>FUNCIONARIOS</h1>
			<a href='http://controlefuncionarios.backend.biz' class="BtPadraoAnima">Logar</a>
			<?php
			while ($registro = mysqli_fetch_assoc($resultado) )
			{
				$gerente_find = "SELECT nome FROM gerentes where id = " . $registro['id_gerente']; 
				$gerente_nome = mysqli_query ($bd, $gerente_find) or die(mysqli_error($bd));
				while ($nome = mysqli_fetch_assoc($gerente_nome)){$gerente = $nome['nome'];}
				
				echo "<div class='Funcionarios'><a href='ver_funcionario.php?id=" . $registro['id'] . "'>";
					echo "<h2>" . $registro['nome'] . "</h2>";
					echo "<p>De: " . $gerente . "</p>";
				echo "</div></a><hr />";
				
			}
			?>

        </section>
    </main>
	<footer>
        <h3>Controle Funcionarios</h3>
    </footer>

</body>
<html>



