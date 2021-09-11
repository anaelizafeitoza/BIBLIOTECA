<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-		giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<title>Livros - Consulta</title>
	</head>

  	<body>
		<div class="container">
			<header class="bg-primary text-white text-center">
				<h1> Sistema WEB para Compra de Livros </h1>
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
				<label for="livroEscolhido" class="form-label">Escolha qual livro você deseja consultar do banco de dados: </label>
				<select class="form-select" id="livroEscolhido" name="livroEscolhido">
				<?php
						require_once "model/livros.php";
						$livros = selecionarTodosLivros();
						foreach ($livros as $a)
						{
							echo "<option value = $a->id>" . $a->nome . "</option>";
						}
					?>
				</select><br>
				<button type="submit" class="btn btn-primary">Consultar dados do livro </button>
			</form>
			
			<?php
				if (isset($_POST["livroEscolhido"]))
				{
					require_once "model/livros.php";
					$livro = selecionarLivroId($_POST["livroEscolhido"]);
					echo "Nome: " . $livro->nome . "<br>";
					echo "Preço: " . $livro->preco . "<br>";
					echo "Páginas: " . $livro->paginas . "<br>";
					echo "Descrição: " . $livro->descricao . "<br>";
					echo "Autor: " . $livro->autor . "<br>";
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