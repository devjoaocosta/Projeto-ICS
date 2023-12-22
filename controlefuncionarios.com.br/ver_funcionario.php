<?php
include('context.php');
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
	<h1>CRIAR FUNCIONARIO</h1>
	<main>
        <section>	
<?php
$find_funcionario = "SELECT * FROM funcionarios WHERE id = " . $_GET['id'];
$funcionario = mysqli_query($bd, $find_funcionario) or die(mysqli_error($bd));$find_gerente = "SELECT * FROM gerentes WHERE id =" . $_GET['id'];
?>
<?php 
while($registro = mysqli_fetch_assoc($funcionario))
{
	$find_gerente = "SELECT nome, email FROM gerentes WHERE id = " . $registro['id_gerente'];
	$gerente = mysqli_query($bd, $find_gerente) or die(mysqli_error($bd));
	while($nome_email = mysqli_fetch_assoc($gerente))
	{ $nome = $nome_email['nome']; $email = $nome_email['email'];}
	
	echo "<div class='nome'><h1>" . $registro['nome'] . "</h1><div class='contato'><span>Gerente: " . $nome . "</span><br/><span>Email: " . $email . "</span></div></div>";
	
	echo "<div class='bloco'><hr/><p>" . $registro['cargo'] . "</p><hr/><div class='bot'><button><a  class='BtPadraoAnima' href='index.php'>Voltar</a></button></div></div>";
	
} 
?>		
		</section>
    </main>
	
	
	<footer>
        <h3>Controle Funcionarios</h3> 
    </footer>
</body>
<html>




