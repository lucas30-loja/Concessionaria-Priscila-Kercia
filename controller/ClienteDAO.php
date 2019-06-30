<?php

	/* 
	   Classe DAO */
	   
class ClienteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($Cod){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM cliente WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM cliente';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:clienteView.php");

	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM cliente ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($Cod){
		include("../../config/conexao.php");
		$sql = 'DELETE FROM cliente WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		header("location:clienteView.php");
	}
	
	//Insere um elemento na tabela
	public function inserir($cliente){
		include("../../config/conexao.php");
		$sql = 'INSERT INTO cliente (Cod, SegundoNome, UltimoNome, PrimeiroNome, CPF, CNH, Cidade, Estado, Login, RG, Senha) VALUES (:Cod, :SegundoNome, :UltimoNome, :PrimeiroNome, :CPF, :CNH, :Cidade, :Estado, :Login, :RG, :Senha)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':Cod',$cliente->getCod()); 
		$consulta->bindValue(':SegundoNome',$cliente->getSegundoNome()); 
		$consulta->bindValue(':UltimoNome',$cliente->getUltimoNome()); 
		$consulta->bindValue(':PrimeiroNome',$cliente->getPrimeiroNome()); 
		$consulta->bindValue(':CPF',$cliente->getCPF()); 
		$consulta->bindValue(':CNH',$cliente->getCNH()); 
		$consulta->bindValue(':Cidade',$cliente->getCidade()); 
		$consulta->bindValue(':Estado',$cliente->getEstado()); 
		$consulta->bindValue(':Login',$cliente->getLogin()); 
		$consulta->bindValue(':RG',$cliente->getRG()); 
		$consulta->bindValue(':Senha',$cliente->getSenha()); 
		$consulta->execute();
		header("location:clienteView.php");



	}
	
	//Atualiza um elemento na tabela
	public function atualizar($cliente){
		include("../../config/conexao.php");
		$sql = 'UPDATE cliente SET Cod = :Cod, SegundoNome = :SegundoNome, UltimoNome = :UltimoNome, PrimeiroNome = :PrimeiroNome, CPF = :CPF, CNH = :CNH, Cidade = :Cidade, Estado = :Estado, Login = :Login, RG = :RG, Senha = :Senha WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':Cod',$cliente->getCod()); 
		$consulta->bindValue(':SegundoNome',$cliente->getSegundoNome()); 
		$consulta->bindValue(':UltimoNome',$cliente->getUltimoNome()); 
		$consulta->bindValue(':PrimeiroNome',$cliente->getPrimeiroNome()); 
		$consulta->bindValue(':CPF',$cliente->getCPF()); 
		$consulta->bindValue(':CNH',$cliente->getCNH()); 
		$consulta->bindValue(':Cidade',$cliente->getCidade()); 
		$consulta->bindValue(':Estado',$cliente->getEstado()); 
		$consulta->bindValue(':Login',$cliente->getLogin()); 
		$consulta->bindValue(':RG',$cliente->getRG()); 
		$consulta->bindValue(':Senha',$cliente->getSenha());
		$consulta->execute();
		header("location:clienteView.php");

	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../../config/conexao.php");
		$sql = 'DELETE FROM cliente';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	public function logar($cliente){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM cliente  WHERE Login = :login and Senha = :senha';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":login",$cliente->getLogin());
		$consulta->bindValue(":senha",$cliente->getSenha());
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:index.php");
	}
}


?>