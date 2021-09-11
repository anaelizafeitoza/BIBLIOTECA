<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-		giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<title>Livros - Atualização</title>
	</head>

  	<body>
		<div class="container">
			<header class="bg-primary text-white text-center">
				<h1> Sistema WEB para Compra de Livros</h1>
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

			<form method="POST" action="atualizarLivro.php">
			  <label for="livroEscolhido" class="form-label">Escolha qual livro você deseja atualizar dados no banco de dados: </label>
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
			  <button type="submit" class="btn btn-primary">Atualizar dados do livro </button>
			</form>
				<?php
						if (isset($_POST["livroEscolhido"]))
						{
							require_once "model/livros.php";
							$livro = selecionarLivroId($_POST["livroEscolhido"]);
							
							echo "<form method='POST' action='validacao_livros.php'>";
							echo "<input type='hidden' id='idOculto' name='idOculto' value='$livro->id'>";
							echo "<label for='name' class='form-label'>Nome do Livro: </label>";
							echo "<input type='text' class='form-control' id='nome' name='nome' value = '$livro->nome'>";

							echo "<label for='preco' class='form-label'> Preço: </label>";
							echo "<input type='number' class='form-control' id='preco' name='preco' min='0.00' step='0.01' value='$livro->preco'>";

							echo "<label for='paginas' class='form-label'> Páginas: </label>";
							echo "<input type='number' class='form-control' id='paginas' name='paginas' min='0' value='$livro->paginas'>";

							echo "<label for='descricao' class='form-label'> Descrição: </label>";
							echo "<textarea class='form-control' id='descricao' name='descricao' rows='5'> $livro->descricao </textarea>";
							
							echo "<label for='autor' class='form-label'> Autor: </label>";
							echo "<textarea class='form-control' id='autor' name='autor' rows='2'>$livro->autor</textarea>";
							echo "<br>";

							echo "<button type='submit' class='btn btn-primary'> Atualizar Livro </button>";
						echo"</form>";
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