<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class FuncionarioDAO{

	//Carrega um elemento pela chave primária
	public function carregar($Cod){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM funcionarios WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:funcionarioView.php");

	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM funcionarios';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:funcionarioView.php");
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM funcionarios ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:funcionarioView.php");
	}
	
	//Apaga um elemento da tabela
	public function deletar($Cod){
		include("../../config/conexao.php");
		$sql = 'DELETE FROM funcionarios WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		header("location:funcionarioView.php");
	}
	
	//Insere um elemento na tabela
	public function inserir($funcionario){
		include("../../config/conexao.php");
		$sql = 'INSERT INTO funcionarios (Cod, Nome, NumeroPIS, RG, CPF, Login, Senha, Gerente, Administrador, Vendedor) VALUES (:Cod, :Nome, :NumeroPIS, :RG, :CPF, :Login, :Senha, :Gerente, :Administrador, :Vendedor)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':Cod',$funcionario->getCod()); 
		$consulta->bindValue(':Nome',$funcionario->getNome()); 
		$consulta->bindValue(':NumeroPIS',$funcionario->getNumeroPIS()); 
		$consulta->bindValue(':RG',$funcionario->getRG()); 
		$consulta->bindValue(':CPF',$funcionario->getCPF()); 
		$consulta->bindValue(':Login',$funcionario->getLogin()); 
		$consulta->bindValue(':Senha',$funcionario->getSenha()); 
		$consulta->bindValue(':Gerente',$funcionario->getGerente()); 
		$consulta->bindValue(':Administrador',$funcionario->getAdministrador()); 
		$consulta->bindValue(':Vendedor',$funcionario->getVendedor()); 
		$consulta->execute();
		header("location:funcionarioView.php");
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($funcionario){
		include("../../config/conexao.php");
		$sql = 'UPDATE funcionarios SET Cod = :Cod, Nome = :Nome, NumeroPIS = :NumeroPIS, RG = :RG, CPF = :CPF, Login = :Login, Senha = :Senha, Gerente = :Gerente, Administrador = :Administrador, Vendedor = :Vendedor WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':Cod',$funcionario->getCod()); 
		$consulta->bindValue(':Nome',$funcionario->getNome()); 
		$consulta->bindValue(':NumeroPIS',$funcionario->getNumeroPIS()); 
		$consulta->bindValue(':RG',$funcionario->getRG()); 
		$consulta->bindValue(':CPF',$funcionario->getCPF()); 
		$consulta->bindValue(':Login',$funcionario->getLogin()); 
		$consulta->bindValue(':Senha',$funcionario->getSenha()); 
		$consulta->bindValue(':Gerente',$funcionario->getGerente()); 
		$consulta->bindValue(':Administrador',$funcionario->getAdministrador()); 
		$consulta->bindValue(':Vendedor',$funcionario->getVendedor()); 
		$consulta->execute();
		header("location:funcionarioView.php");
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../config/conexao.php");
		$sql = 'DELETE FROM funcionarios';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		header("location:funcionarioView.php");
	}
}
?>