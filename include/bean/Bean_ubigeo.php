<?php
	class Bean_ubigeo{
		//Constructor
			public function __construct(){}
		//Atributos
			private $codubigeo;
			private $lugar;
			private $longitud;
			private $latitud;
		//Propiedades
			public function setCodubigeo($codubigeo_){ $this->codubigeo=$codubigeo_;}
			public function getCodubigeo(){ return $this->codubigeo;}
			public function setLugar($lugar_){ $this->lugar=$lugar_;}
			public function getLugar(){ return $this->lugar;}
			public function setLongitud($longitud_){ $this->longitud=$longitud_;}
			public function getLongitud(){ return $this->longitud;}
			public function setLatitud($latitud_){ $this->latitud=$latitud_;}
			public function getLatitud(){ return $this->latitud;}
	}