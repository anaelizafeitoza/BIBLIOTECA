<?php

    include "./BD/conexaoBD.php";

    function inserirLivro ($nome, $preco, $paginas, $descricao, $autor) 
    { 
        global $conexao;
        $prepara = $conexao->prepare("INSERT INTO livro (nome, preco, paginas, descricao, autor)  VALUES (?, ?, ?, ?, ?)");
        $prepara->bind_param("sdiss", $nome, $preco, $paginas, $descricao, $autor);
		$prepara->execute();	
	}

	function atualizarLivro ($nome, $preco, $paginas, $descricao, $autor, $id) 
    { 
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE livro SET nome = ?, preco = ?, paginas = ?, descricao = ?, autor = ? WHERE id = ?");
	      $prepara->bind_param("sdissi", $nome, $preco, $paginas, $descricao, $autor, $id);
          $prepara->execute();	
	}

	function excluirLivro($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM livro WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarLivroId($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM livro WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      return $resultado->fetch_object();
	}

	function selecionarTodosLivros()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM livro");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($a = $resultado->fetch_object()){
		  $livros[] = $a;
	      }
	      return $livros;
	}
?>
