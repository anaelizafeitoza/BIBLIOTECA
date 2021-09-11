<?php
	$erros="";
	if (!isset($_POST["nome"]) || !isset($_POST["endereco"]) || !isset($_POST["preferencias"]) || strlen($_POST["preferencias"]) == 0)
	{
		$erros .= "Todos os campos devem ser preenchidos <br>";
	}
	if ( strlen($erros) == 0)
	{
		if (isset($_POST["idOculto"]))
		{
			require_once "model/pessoa.php";
			atualizarPessoa($_POST["nome"], $_POST["endereco"], $_POST["preferencias"], $_POST["idOculto"]);
			echo "Atualização efetuada com sucesso! <br>";
		}
		else
		{
			require_once "model/pessoa.php";
			inserirPessoa($_POST["nome"], $_POST["endereco"], $_POST["preferencias"]);
			echo "Cadastro efetuado com sucesso! <br>";
		}
		echo "Você será redirecionado para a página inicial do sistema.<br>";
		header ("refresh:5;url=index.html");
	}
	else
	{
		echo $erros . "<br>";
		echo "Você será redirecionado para a página de cadastro.<br>";
		header ("refresh:5;url=cadastrarPessoa.html");
	}
?>
			