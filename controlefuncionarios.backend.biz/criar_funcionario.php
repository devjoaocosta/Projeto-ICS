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
            <h1>Criar Funcionario</h1>

            <div class="container">
                <hr>
                <h2>Nome do Funcionario</h2>
                <form method="post" action="criar_funcionario_post.php">
                    <input type="text"  name="nome"/>
                
                	<h2 class="afastamento">Cargo do Funcionario</h2>
                	<textarea type="text"  name="cargo" minlength="10" maxlength="100"></textarea><br/>
                    <input name='id_gerente' hidden value='1'/>
<?php
					echo "<input name='id_gerente' hidden value='". $_GET['id'] . "'/>";
?>
                    <hr>
                    <input type="submit" class="BtPadraoAnima" value="Criar funcionario"/>		    
                </form>
                
            </div>
            <div class="botoes">
               
                <button>
					<?php echo "<a  class='BtPadraoAnima' href='meus_funcionarios.php?id=".$_GET['id']."'>Voltar</a>"; ?>
                </button>
            </div>
        </section>
    </main>
	<footer>
        <h3>Controle Funcionarios</h3>
    </footer>
</body>
<html>



