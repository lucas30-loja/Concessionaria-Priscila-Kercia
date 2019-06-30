<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Compra_veiculos_cliente_funcionario{
		//Atributos
		private $FK_Veiculos_Cod;
 		private $FK_Cliente_Cod;
 		private $FK_Funcionarios_Cod;
 				
		//Métodos Getters e Setters
		public function getFK_Veiculos_Cod(){
			return $this->FK_Veiculos_Cod;
		}
		public function getFK_Cliente_Cod(){
			return $this->FK_Cliente_Cod;
		}
		public function getFK_Funcionarios_Cod(){
			return $this->FK_Funcionarios_Cod;
		}
		
		public function setFK_Veiculos_Cod($FK_Veiculos_Cod){
			$this->FK_Veiculos_Cod=$FK_Veiculos_Cod;
		}
		public function setFK_Cliente_Cod($FK_Cliente_Cod){
			$this->FK_Cliente_Cod=$FK_Cliente_Cod;
		}
		public function setFK_Funcionarios_Cod($FK_Funcionarios_Cod){
			$this->FK_Funcionarios_Cod=$FK_Funcionarios_Cod;
		}
		
	}
?>