<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class administrador{
		//Atributos
		private $cod;
 		private $login;
 		private $senha;

 		public function getcod(){
			return $this->cod;
		}
		public function getlogin(){
			return $this->login;
		}
		public function getsenha(){
			return $this->senha;
		}
		public function setcod($cod){
			$this->cod=$cod;
		}
		public function setlogin($login){
			$this->login=$login;
		}
		public function setsenha($senha){
			$this->senha=$senha;
		}
		
		
	}
?>