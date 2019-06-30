<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Veiculo{
		//Atributos
		private $Foto;
		private $Chassi;
 		private $Cod;
 		private $Modelo;
 		private $Ano;
 		private $Fabricante;
 		private $Marca;
 		private $Preco;
 		private $Cor;
 		private $Promocao;
 		private $DataPromocao;
 		private $Status;
 			
		//Métodos Getters e Setters
		public function getChassi(){
			return $this->Chassi;
		}
		public function getStatus(){
			return $this->Status;
		}
		public function getCod(){
			return $this->Cod;
		}
		public function getModelo(){
			return $this->Modelo;
		}
		public function getAno(){
			return $this->Ano;
		}
		public function getFabricante(){
			return $this->Fabricante;
		}
		public function getMarca(){
			return $this->Marca;
		}
		public function getPreco(){
			return $this->Preco;
		}
		public function getCor(){
			return $this->Cor;
		}
		public function getPromocao(){
			return $this->Promocao;
		}
		public function getDataPromocao(){
			return $this->DataPromocao;
		}
		public function getFoto(){
			return $this->Foto;
		}
		
		
		
		public function setChassi($Chassi){
			$this->Chassi=$Chassi;
		}
		public function setCod($Cod){
			$this->Cod=$Cod;
		}
		public function setModelo($Modelo){
			$this->Modelo=$Modelo;
		}
		public function setAno($Ano){
			$this->Ano=$Ano;
		}
		public function setFabricante($Fabricante){
			$this->Fabricante=$Fabricante;
		}
		public function setMarca($Marca){
			$this->Marca=$Marca;
		}
		public function setPreco($Preco){
			$this->Preco=$Preco;
		}
		public function setCor($Cor){
			$this->Cor=$Cor;
		}
		public function setPromocao($Promocao){
			$this->Promocao=$Promocao;
		}
		public function setDataPromocao($DataPromocao){
			$this->DataPromocao=$DataPromocao;
		}
		public function setFoto($Foto){
			$this->Foto=$Foto;
		}
		public function setStatus($Status){
			$this->Status=$Status;
		}
		
	}
?>