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

			<form method="POST" action="#">
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
							
						}
						else
						{
							header("Location: index.html");
						}
				?>

						<form method="POST" action="validacao_livros.php">
							<input type="hidden" id="idOculto" name="idOculto" value="<?php echo $livro->id;?>">
							<label for="name" class="form-label">Nome do Livro: </label>
							<input type="text" class="form-control" id="nome" nome="nome" value = "<?php echo $livro->nome;?>">

							<label for="preco" class="form-label"> Preço: </label>
							<input type="number" class="form-control" id="preco" name="preco" min="0.00" step="0.01" value="<?php echo $livro->preco;?>">

							<label for="paginas" class="form-label"> Páginas: </label>
							<input type="number" class="form-control" id="paginas" name="paginas" min="0" value="<?php echo $livro->paginas;?>">

							<label for="descricao" class="form-label"> Descrição: </label>
							<textarea class="form-control" id="descricao" name="descricao" rows="5"><?php echo $livro->descricao;?></textarea>
							
							<label for="autor" class="form-label"> Autor: </label>
							<textarea class="form-control" id="autor" name="autor" rows="2"><?php echo $livro->autor;?></textarea>
							<br>

							<button type="submit" class="btn btn-primary"> Atualizar Livro </button>
						</form>

					
						


			<hr>

			<footer class="bg-primary text-white text-center">
				<h6>Desenvolvido por: Matheus Guedes Vilas Boas</h6>
				<p> E-mail: matheus.vilasboas@ifsuldeminas.edu.br </p>
			</footer>
		</div>
 
  	</body>
</html>