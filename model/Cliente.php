<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Cliente{
		//Atributos
		private $Cod;
 		private $SegundoNome;
 		private $UltimoNome;
 		private $PrimeiroNome;
 		private $CPF;
 		private $CNH;
 		private $Cidade;
 		private $Estado;
 		private $Login;
 		private $RG;
 		private $Senha;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->Cod;
		}
		public function getSegundoNome(){
			return $this->SegundoNome;
		}
		public function getUltimoNome(){
			return $this->UltimoNome;
		}
		public function getPrimeiroNome(){
			return $this->PrimeiroNome;
		}
		public function getCPF(){
			return $this->CPF;
		}
		public function getCNH(){
			return $this->CNH;
		}
		public function getCidade(){
			return $this->Cidade;
		}
		public function getEstado(){
			return $this->Estado;
		}
		public function getLogin(){
			return $this->Login;
		}
		public function getRG(){
			return $this->RG;
		}
		public function getSenha(){
			return $this->Senha;
		}
		
		public function setCod($Cod){
			$this->Cod=$Cod;
		}
		public function setSegundoNome($SegundoNome){
			$this->SegundoNome=$SegundoNome;
		}
		public function setUltimoNome($UltimoNome){
			$this->UltimoNome=$UltimoNome;
		}
		public function setPrimeiroNome($PrimeiroNome){
			$this->PrimeiroNome=$PrimeiroNome;
		}
		public function setCPF($CPF){
			$this->CPF=$CPF;
		}
		public function setCNH($CNH){
			$this->CNH=$CNH;
		}
		public function setCidade($Cidade){
			$this->Cidade=$Cidade;
		}
		public function setEstado($Estado){
			$this->Estado=$Estado;
		}
		public function setLogin($Login){
			$this->Login=$Login;
		}
		public function setRG($RG){
			$this->RG=$RG;
		}
		public function setSenha($Senha){
			$this->Senha=$Senha;
		}
		
	}
?>