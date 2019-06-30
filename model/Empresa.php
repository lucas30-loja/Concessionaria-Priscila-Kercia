<?php

	/* 
	   Atributos e métodos da classe */
	   
	class Empresa{
		//Atributos
		private $Cod;
 		private $Nome;
 		private $Slogan;
 		private $Foto;
 		private $LinkInstagram;
 		private $Linkfacebook;
 		private $LinkTwitter;
 		private $Email;
 		private $celular;
 		private $Fixo;
 				
		//Métodos Getters e Setters
		public function getCod(){
			return $this->Cod;
		}
		public function getNome(){
			return $this->Nome;
		}
		public function getSlogan(){
			return $this->Slogan;
		}
		public function getFoto(){
			return $this->Foto;
		}
		public function getLinkInstagram(){
			return $this->LinkInstagram;
		}
		public function getLinkfacebook(){
			return $this->Linkfacebook;
		}
		public function getLinkTwitter(){
			return $this->LinkTwitter;
		}
		public function getEmail(){
			return $this->Email;
		}
		public function getCelular(){
			return $this->celular;
		}
		public function getFixo(){
			return $this->Fixo;
		}
		
		public function setCod($Cod){
			$this->Cod=$Cod;
		}
		public function setNome($Nome){
			$this->Nome=$Nome;
		}
		public function setSlogan($Slogan){
			$this->Slogan=$Slogan;
		}
		public function setFoto($Foto){
			$this->Foto=$Foto;
		}
		public function setLinkInstagram($LinkInstagram){
			$this->LinkInstagram=$LinkInstagram;
		}
		public function setLinkfacebook($Linkfacebook){
			$this->Linkfacebook=$Linkfacebook;
		}
		public function setLinkTwitter($LinkTwitter){
			$this->LinkTwitter=$LinkTwitter;
		}
		public function setEmail($Email){
			$this->Email=$Email;
		}
		public function setCelular($celular){
			$this->celular=$celular;
		}
		public function setFixo($Fixo){
			$this->Fixo=$Fixo;
		}
		
	}
?>