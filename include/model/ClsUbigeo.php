<?php
	class ClsUbigeo extends ClsConexion {
		# CONSTRUCT
			public function __construct($cnx  = null)
			{
				$this->conn = $cnx;
			}
		# Método Listar Departamentos
			public function get_departamento()
			{
				$this->query = "CALL usp_get_ubigeo_departamento()";
				$this->execute_query();
				$data = $this->rows ;
				return $data;
			}
		# Método Listar Provincias por Departamento
			public function get_provincia_by_departamento($bean_ubigeo)
			{
				$codubigeo = $bean_ubigeo->getCodubigeo();

				$this->query = "CALL usp_get_ubigeo_provincia_by_codubigeo('".$codubigeo."')";
				$this->execute_query();
				$data = $this->rows ;
				return $data;
			}
		# Método Listar Distritos por Provincia
			public function get_distrito_by_provincia($bean_ubigeo)
			{
				$codubigeo = $bean_ubigeo->getCodubigeo();

				$this->query = "CALL usp_get_ubigeo_distrito_by_codubigeo('".$codubigeo."')";
				$this->execute_query();
				$data = $this->rows ;
				return $data;
			}
	}
