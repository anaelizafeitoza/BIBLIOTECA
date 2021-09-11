<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-		giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<title>Adoção - Atualização</title>
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
			  <label for="compraEscolhida" class="form-label">Escolha qual compra você deseja atualizar do banco de dados: </label>
			  <select class="form-select" id="compraEscolhida" name="compraEscolhida">
				<?php
					require_once "model/compra.php";
					$compras = selecionarTodasCompras();
					foreach ($compras as $ad)
					{
						echo "<option value = $ad->id>Livro: " . $ad->anome . " - Leitor: " . $ad->pnome . "</option>";		
					}
				?>
			  </select><br>
			  <button type="submit" class="btn btn-primary">Atualizar compra </button>
			</form>
			
			<?php
				if (isset($_POST["compraEscolhida"]))
				{
			?>
					<form method="POST" action="#">
					  <input type="hidden" id="compraEscolhida" name="compraEscolhida" value=<?php echo $_POST["compraEscolhida"];?>">
					  <label for="pessoaEscolhida" class="form-label">Escolha qual pessoa correta que realizou a compra: </label>
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
					  <label for="livroEscolhido" class="form-label">Escolha qual o novo livro comprado: </label>
					  <select class="form-select" id="livroEscolhido" name="livroEscolhido">
						<?php
								require_once "model/livros.php";
								$animais = selecionarTodosLivros();
								foreach ($livros as $a)
								{
									echo "<option value = $a->id>" . $a->nome . "</option>";
								}
						?>
					  </select><br>
					  <button type="submit" class="btn btn-primary">Atualizar Compra </button>
					</form>
			
					<?php
						if (isset($_POST["livroEscolhido"]) and isset($_POST["pessoaEscolhida"]))
						{
							require_once "model/compra.php";
							atualizarCompra($_POST["livroEscolhido"], $_POST["pessoaEscolhida"], $_POST["compraEscolhida"]);
							echo "Compra realizada com sucesso";
						}
					
			
			
					
				}
			?>

			<hr>

			<footer class="bg-primary text-white text-center">
				<h6>Desenvolvido por: Matheus Guedes Vilas Boas</h6>
				<p> E-mail: matheus.vilasboas@ifsuldeminas.edu.br </p>
			</footer>
		</div>
 
  	</body>
</html>
 
