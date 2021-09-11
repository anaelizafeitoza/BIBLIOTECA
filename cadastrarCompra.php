<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-		giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<title>Compras - Cadastro</title>
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
			  <label for="pessoaEscolhida" class="form-label">Escolha qual pessoa realizará a compra: </label>
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
			  <label for="livroEscolhido" class="form-label">Escolha qual livro será comprado: </label>
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
			  <button type="submit" class="btn btn-primary">Cadastrar compra </button>
			</form>
			
			
			
			<?php
				if (isset($_POST["livroEscolhido"]) and isset($_POST["pessoaEscolhida"]))
				{
					require_once "model/compra.php";
					inserirCompra($_POST["livroEscolhido"], $_POST["pessoaEscolhida"]);
					echo "Compra realizada com sucesso";
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