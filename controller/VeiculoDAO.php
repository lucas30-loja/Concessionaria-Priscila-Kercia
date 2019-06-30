<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class VeiculoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($Cod){
		include("../config/conexao.php");		
		$sql = 'SELECT * FROM veiculos WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:veiculoView.php");
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM veiculos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:veiculoView.php");
	}

	public function buscarVeiculo($Cod){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM veiculos WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:veiculoView.php");
	}

	public function listarTodosStatus($status){
		include("../../config/conexao.php");
		$sql = 'SELECT * FROM veiculos WHERE status = :status';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":status",$status);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:veiculoView.php");
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../../config/conexao.php");		
		$sql = 'SELECT * FROM veiculos ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		header("location:veiculoView.php");
	}
	
	//Apaga um elemento da tabela
	public function deletar($Cod){
		include("../../config/conexao.php");		
		$sql = 'DELETE FROM veiculos WHERE Chassi = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":Cod",$Cod);
		$consulta->execute();
		header("location:veiculoView.php");

		}
	
	//Insere um elemento na tabela
	public function inserir($veiculo){
		include("../../config/conexao.php");		
		$sql = 'INSERT INTO veiculos (Chassi, Modelo, Ano, Fabricante, Marca, Preco, Cor, Promocao, DataPromocao, Foto, Status) VALUES (:Chassi, :Modelo, :Ano, :Fabricante, :Marca, :Preco, :Cor, :Promocao, :DataPromocao, :Foto, :Status)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':Chassi',$veiculo->getChassi()); 
		 
		$consulta->bindValue(':Modelo',$veiculo->getModelo()); 
		$consulta->bindValue(':Ano',$veiculo->getAno()); 
		$consulta->bindValue(':Fabricante',$veiculo->getFabricante()); 
		$consulta->bindValue(':Marca',$veiculo->getMarca()); 
		$consulta->bindValue(':Preco',$veiculo->getPreco()); 
		$consulta->bindValue(':Cor',$veiculo->getCor()); 
		$consulta->bindValue(':Promocao',$veiculo->getPromocao()); 
		$consulta->bindValue(':DataPromocao',$veiculo->getDataPromocao());
		$consulta->bindValue(':Foto',$veiculo->getFoto()); 
		$consulta->bindValue(':Status',$veiculo->getStatus());
		 
		$consulta->execute();
		header("location:veiculoView.php");
	
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($veiculo){
		include("../../config/conexao.php");		
		$sql = 'UPDATE veiculos SET Chassi = :Chassi, Cod = :Cod, Modelo = :Modelo, Ano = :Ano, Fabricante = :Fabricante, Marca = :Marca, Preco = :Preco, Cor = :Cor, Promocao = :Promocao, DataPromocao = :DataPromocao, Status = :Status, Foto = :Foto WHERE Cod = :Cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':Chassi',$veiculo->getChassi()); 
		$consulta->bindValue(':Cod',$veiculo->getCod()); 
		$consulta->bindValue(':Modelo',$veiculo->getModelo()); 
		$consulta->bindValue(':Ano',$veiculo->getAno()); 
		$consulta->bindValue(':Fabricante',$veiculo->getFabricante()); 
		$consulta->bindValue(':Marca',$veiculo->getMarca()); 
		$consulta->bindValue(':Preco',$veiculo->getPreco()); 
		$consulta->bindValue(':Cor',$veiculo->getCor()); 
		$consulta->bindValue(':Promocao',$veiculo->getPromocao()); 
		$consulta->bindValue(':DataPromocao',$veiculo->getDataPromocao()); 
		$consulta->bindValue(':Status',$veiculo->getStatus()); 
		$consulta->bindValue(':Foto',$veiculo->getFoto());
		 
		$consulta->execute();
		header("location:veiculoView.php");
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
include("../../config/conexao.php");		$sql = 'DELETE FROM veiculos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		header("location:veiculoView.php");
	}
}
?>