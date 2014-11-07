<?php
	require_once '../model/ClsConexion.php';

	require_once '../model/ClsUbigeo.php';

	require_once '../bean/Bean_Ubigeo.php';

	$objUbigeo = new ClsUbigeo() ;
	$ubigeo    = new Bean_Ubigeo() ;

	if( $_GET['op'] == 'depa'){
		$data = $objUbigeo->get_departamento() ;

		$json_data = json_encode($data) ;

		echo  $json_data ;
	}
	if( $_GET['op'] == 'prov'){
		$ubigeo->setCodubigeo($_GET['departamento']) ;
		$data = $objUbigeo->get_provincia_by_departamento($ubigeo) ;

		$json_data = json_encode($data) ;

		echo  $json_data ;
	}
	if( $_GET['op'] == 'dist'){
		$ubigeo->setCodubigeo($_GET['provincia']) ;
		$data = $objUbigeo->get_distrito_by_provincia($ubigeo) ;

		$json_data = json_encode($data) ;

		echo  $json_data ;
	}