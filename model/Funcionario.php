<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Funcionario{
		//Atributos
		private $Cod;
 		private $Nome;
 		private $NumeroPIS;
 		private $RG;
 		private $CPF;
 		private $Login;
 		private $Senha;
 		private $Gerente;
 		private $Administrador;
 		private $Vendedor;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->Cod;
		}
		public function getNome(){
			return $this->Nome;
		}
		public function getNumeroPIS(){
			return $this->NumeroPIS;
		}
		public function getRG(){
			return $this->RG;
		}
		public function getCPF(){
			return $this->CPF;
		}
		public function getLogin(){
			return $this->Login;
		}
		public function getSenha(){
			return $this->Senha;
		}
		public function getGerente(){
			return $this->Gerente;
		}
		public function getAdministrador(){
			return $this->Administrador;
		}
		public function getVendedor(){
			return $this->Vendedor;
		}
		
		public function setCod($Cod){
			$this->Cod=$Cod;
		}
		public function setNome($Nome){
			$this->Nome=$Nome;
		}
		public function setNumeroPIS($NumeroPIS){
			$this->NumeroPIS=$NumeroPIS;
		}
		public function setRG($RG){
			$this->RG=$RG;
		}
		public function setCPF($CPF){
			$this->CPF=$CPF;
		}
		public function setLogin($Login){
			$this->Login=$Login;
		}
		public function setSenha($Senha){
			$this->Senha=$Senha;
		}
		public function setGerente($Gerente){
			$this->Gerente=$Gerente;
		}
		public function setAdministrador($Administrador){
			$this->Administrador=$Administrador;
		}
		public function setVendedor($Vendedor){
			$this->Vendedor=$Vendedor;
		}
		
	}
?>