<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-		giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<title>Livros</title>
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

			<h3 class="text-center"> O que você deseja saber sobre as compras? </h3>
			<div class="col-12">
				<a href="cadastrarCompra.php" class="btn btn-success col-12"> Cadastrar compra efetuada</a>
			</div>
			<br>
			<div class="col-12">
				<a href="consultarCompra.php" class="btn btn-primary col-12"> Consultar Dados de uma compra</a>
			</div>
			<br>
			<div class="col-12">
				<a href="atualizarCompra.php" class="btn btn-warning col-12"> Atualizar Dados de uma compra</a>
			</div>
			<br>
			<div class="col-12">
				<a href="removerCompra.php" class="btn btn-danger col-12"> Remover uma compra</a>
			</div>
			

			<hr>
			

			<footer class="bg-primary text-white text-center">
				<h6>Desenvolvido por: Ana Eliza Feitoza e Raphael Almeida</h6>
				<p> IFSULDEMINAS </p>
			</footer>
		</div>
  	</body>
</html>