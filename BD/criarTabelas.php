<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "tpPHP";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE TABLE livro (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR (30),
		preco DOUBLE,
		paginas INT,
		descricao VARCHAR (100),
		autor VARCHAR (100)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela livro criada com sucesso";
	else
		echo "Erro criando a tabela livro: " . $conexao->error;

	$sql = "CREATE TABLE pessoa (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR (30),
		endereco VARCHAR (100),
		preferencias VARCHAR (100)
		)";
        
	if ($conexao->query($sql) === TRUE)
		echo "Tabela pessoa criada com sucesso";
	else
		echo "Erro criando a tabela pessoa: " . $conexao->error;

	$sql = "CREATE TABLE compra (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		idLivro INT UNSIGNED,
		idPessoa INT UNSIGNED,
		FOREIGN KEY (idLivro) REFERENCES livro (id),
		FOREIGN KEY (idPessoa) REFERENCES pessoa (id)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela compra criada com sucesso";
	else
		echo "Erro criando a tabela compra: " . $conexao->error;

	$conexao->close();
?>


