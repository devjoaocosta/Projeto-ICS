<?php
include('context.php');
$find_funcionario = "SELECT  nome, cargo FROM funcionarios WHERE id=" . $_GET['id'];
$resultado = mysqli_query($bd, $find_funcionario) or die(mysqli_error($bd));
while ($registro = mysqli_fetch_assoc($resultado))
{
	$cargo = $registro['cargo'];
	$nome = $registro['nome'];
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
            <h1>Editar Funcionario</h1>

            <div class="container">
                <hr>
                <h2>Nome do Funcionario</h2>
                <form method="post" action="editar_funcionario_post.php">
 
<?php
		
					echo "<input name='nome' type='text' value='". $nome . "'/><h2 class='afastamento'>Nome do Funcionario</h2>";
					echo "<textarea name='cargo' minlength='10' maxlength='100'>".$cargo."</textarea><br/>";
					echo "<input name='id' hidden value='". $_GET['id'] . "'/>";
					echo "<input name='id_gerente' hidden value='". $_GET['id_gerente'] . "'/>";
		
?>
                    <hr>
                    <input type="submit" class="BtPadraoAnima" value="Atualizar funcionario"/>		    
                </form>
                
            </div>
            <div class="botoes">
               
                <button>
					<?php echo "<a  class='BtPadraoAnima' href='meus_funcionarios.php?id=".$_GET['id_gerente']."'>Voltar</a>"; ?>
                </button>
            </div>
        </section>
    </main>
	<footer>
        <h3>Controle Funcionarios</h3>
    </footer>
</body>
<html>



