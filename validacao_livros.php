<?php
	$erros="";
	if (!isset($_POST["nome"]) || !isset($_POST["preco"]) || !isset($_POST["paginas"]) || !isset($_POST["descricao"]) || !isset($_POST["autor"]) || strlen($_POST["descricao"]) == 1 || strlen($_POST["autor"]) == 1)
	{
		$erros .= "Todos os campos devem ser preenchidos <br>";
	}
	if ( !is_numeric($_POST["preco"]))
	{
		$erros .= "O campo 'Preço' deve ser numérico! <br>";
	}
	if ( !is_numeric($_POST["paginas"]))
	{
		$erros .= "O campo 'Páginas' deve ser numérico! <br>";
	}
	if ( (int)$_POST["preco"] < 1 )
	{
		$erros .= "O campo 'Preço' deve ser maior ou igual a 1! <br>";
	}
	if ( (int)$_POST["paginas"] < 1 )
	{
		$erros .= "O campo 'Páginas' deve ser maior ou igual a 1! <br>";
	}
	if ( strlen($erros) == 0)
	{	
		if (isset($_POST["idOculto"]))
		{
		require_once "model/livros.php";
		atualizarLivro($_POST["nome"], $_POST["preco"], $_POST["paginas"], $_POST["descricao"], $_POST["autor"], $_POST["idOculto"]);
		echo "Atualização efetuada com sucesso! <br>";
		}
		else
		{
			require_once "model/livros.php";
			inserirLivro($_POST["nome"], $_POST["preco"], $_POST["paginas"], $_POST["descricao"], $_POST["autor"]);
			echo "Cadastro efetuado com sucesso! <br>";
		}
		echo "Você será redirecionado para a página inicial do sistema.<br>";
		header ("refresh:5;url=index.php");
	}	
	else
	{
		echo $erros . "<br>";
		echo "Você será redirecionado para a página de cadastro.<br>";
		header ("refresh:5;url=cadastrarLivro.php");
	}
?>