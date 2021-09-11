<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-		giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<title>Pessoas - Atualização</title>
	</head>

  	<body>
		<div class="container">
			<header class="bg-primary text-white text-center">
				<h1> Sistema WEB para Adoção de Animais</h1>
			</header>

			<hr>
			<div class="row">
				
				<div class="col-2">
					<a href="index.php" class="btn btn-primary">Página Inicial</a>
				</div>
			
				<div class="col-2">
					<a href="quem_somos.php" class="btn btn-primary">Quem Somos</a>
				</div>
				<div class="col-2">
					<a href="livros.php" class="btn btn-primary">Livros</a>
                </div>
				<div class="col-2">
					<a href="compras.php" class="btn btn-primary">Compras</a>
				</div>
				<div class="col-2">
					<a href="pessoas.php" class="btn btn-primary">Pessoas</a>
				</div>
				<div class="col-2">
					<a href="login.php" class="btn btn-success">Login</a>
				</div>
				<div class="col-2">
					<a href="logout.php" class="btn btn-danger">Logout</a>
				</div>
			</div>
			<hr>

			<form method="POST" action="#">
			  <label for="pessoaEscolhida" class="form-label">Escolha qual pessoa você deseja atualizar dados no banco de dados: </label>
			  <select class="form-select" id="pessoaEscolhida" name="pessoaEscolhida">
				<?php
					require_once "model/pessoa.php";
					$pessoas = selecionarTodasPessoas();
					foreach ($pessoas as $p)
					{
						echo "<option value = $p->id>" . $p->nome . "</option>";	
					}
				?>
			  </select><br>
			  <button type="submit" class="btn btn-primary">Atualizar dados da pessoa </button>
			</form>
			
			<?php
				if (isset($_POST["pessoaEscolhida"]))
				{
					require_once "model/pessoa.php";
					$pessoa = selecionarPessoaId($_POST["pessoaEscolhida"]);
			?>
					<form method="POST" action="validacao_pessoa.php">
						<input type="hidden" id="idOculto" name="idOculto" value=<?php echo $pessoa->id;?>">
						<label for="nome" class="form-label">Nome da Pessoa: </label>
						<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $pessoa->nome;?>">

						<label for="endereco" class="form-label">Endereço: </label>
						<input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $pessoa->endereco;?>">

						<label for="preferencias" class="form-label">Preferências:</label>
						<textarea class="form-control" id="preferencias" name="preferencias" rows="5"><?php echo $pessoa->preferencias;?></textarea><br>

						<button type="submit" class="btn btn-primary">Atualizar Pessoa </button>
					</form>
			<?php				
				}
			
			?>

			<hr>
			<footer class="bg-primary text-white text-center">
				<h6>Desenvolvido por: Ana Eliza Feitoza e Raphael Almeida</h6>
				<p> IFSULDEMINAS </p>
			</footer>
		</div>
 
  	</body>
</html>
 
