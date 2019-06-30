<?php

	/* 
	   Classe DAO */
	   
class EmpresaDAO{

	//Carrega um elemento pela chave primária
	public function carregar($Cod){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM empresa WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM empresa';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:empresaView.php");
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrdenandoPor($coluna){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM empresa ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($Cod){
		include("../../config/conexao.php");
		$sql = 'DELETE FROM empresa WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		header("location:empresaView.php");

	}
	
	//Insere um elemento na tabela
	public function inserir($empresa){
		include("../../config/conexao.php");
		$sql = 'INSERT INTO empresa (Cod, Nome, Slogan, Foto, LinkInstagram, Linkfacebook, LinkTwitter, Email, celular, Fixo) VALUES (:Cod, :Nome, :Slogan, :Foto, :LinkInstagram, :Linkfacebook, :LinkTwitter, :Email, :celular, :Fixo)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':Cod',$empresa->getCod()); 
		$consulta->bindValue(':Nome',$empresa->getNome()); 
		$consulta->bindValue(':Slogan',$empresa->getSlogan()); 
		$consulta->bindValue(':Foto',$empresa->getFoto()); 
		$consulta->bindValue(':LinkInstagram',$empresa->getLinkInstagram()); 
		$consulta->bindValue(':Linkfacebook',$empresa->getLinkfacebook()); 
		$consulta->bindValue(':LinkTwitter',$empresa->getLinkTwitter()); 
		$consulta->bindValue(':Email',$empresa->getEmail()); 
		$consulta->bindValue(':celular',$empresa->getCelular()); 
		$consulta->bindValue(':Fixo',$empresa->getFixo()); 
		$consulta->execute();

	
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($empresa){
		include("../../config/conexao.php");
		$sql = 'UPDATE empresa SET Cod = :Cod, Nome = :Nome, Slogan = :Slogan, Foto = :Foto, LinkInstagram = :LinkInstagram, Linkfacebook = :Linkfacebook, LinkTwitter = :LinkTwitter, Email = :Email, celular = :celular, Fixo = :Fixo WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':Cod',$empresa->getCod()); 
		$consulta->bindValue(':Nome',$empresa->getNome()); 
		$consulta->bindValue(':Slogan',$empresa->getSlogan()); 
		$consulta->bindValue(':Foto',$empresa->getFoto()); 
		$consulta->bindValue(':LinkInstagram',$empresa->getLinkInstagram()); 
		$consulta->bindValue(':Linkfacebook',$empresa->getLinkfacebook()); 
		$consulta->bindValue(':LinkTwitter',$empresa->getLinkTwitter()); 
		$consulta->bindValue(':Email',$empresa->getEmail()); 
		$consulta->bindValue(':celular',$empresa->getCelular()); 
		$consulta->bindValue(':Fixo',$empresa->getFixo()); 
		$consulta->execute();
		header("location:empresaView.php");
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../../config/conexao.php");
		$sql = 'DELETE FROM empresa';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>