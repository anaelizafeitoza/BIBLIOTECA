<?php
	include "./BD/conexaoBD.php";

	function inserirPessoa($nome, $endereco, $preferencias)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO pessoa (nome, endereco, preferencias) VALUES (?, ?, ?)");
		$prepara->bind_param("sss", $nome, $endereco, $preferencias);
		$prepara->execute();	
	}

	function atualizarPessoa($nome, $endereco, $preferencias, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE pessoa SET nome = ?, endereco = ?, preferencias = ? WHERE id = ?");
	      $prepara->bind_param("sssi", $nome, $endereco, $preferencias, $id);
	      $prepara->execute();
	}

	function excluirPessoa($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM pessoa WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarPessoaId($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM pessoa WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      return $resultado->fetch_object();
	}

	function selecionarTodasPessoas()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM pessoa");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($p = $resultado->fetch_object()){
		  $pessoas[] = $p;
	      }
	      return $pessoas;
	}
?>
