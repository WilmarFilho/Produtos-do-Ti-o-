<?php 
	class cliente {
		
		private $id;
		private $uf;
		private $cidade;
		private $email; 
		private $assunto; 

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function __get($atributo) {
			return $this->$atributo;
		}
	}
	
?>