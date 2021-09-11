<?php
	include "./BD/conexaoBD.php";
	function inserirCompra($idLivro, $idPessoa)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO compra (idLivro, idPessoa) VALUES (?, ?)");
		$prepara->bind_param("ii", $idLivro, $idPessoa);
		$prepara->execute();	
	}

	function atualizarCompra($idLivro, $idPessoa, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE compra SET idLivro = ?, idPessoa = ? WHERE id = ?");
	      $prepara->bind_param("iii", $idLivro, $idPessoa, $id);
	      $prepara->execute();
	}

	function excluirCompra($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM compra WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarTodasCompras()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT compra.id, livro.nome as anome, pessoa.nome as pnome FROM compra, livro, pessoa WHERE compra.idLivro = livro.id and 						compra.idPessoa = pessoa.id");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($ad = $resultado->fetch_object()){
		  $compras[] = $ad;
	      }
	      return $compras;
	}
?>
