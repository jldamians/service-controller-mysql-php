var myApp = angular.module('myApp',['myApp.service']);

myApp.controller('CtrlUbigeo', function($scope, serviceUbigeo) {
    $scope.departamentos = [] ;
    $scope.provincias = [] ;
    $scope.distritos = [] ;

    $depa = '' ;
    $prov = '' ;

    departamento() ;

    function departamento(){
	    serviceUbigeo.get_departamento().
	    success(function(data, status){
	    	$scope.departamentos = data ;
	    });
    };

    $scope.provincia = function () {
	    serviceUbigeo.get_provincia($scope.depa).
	    success(function(data, status){
            $scope.provincias = data ;
            $scope.distritos = [] ;
	    });
    };

    $scope.distrito = function(){
        serviceUbigeo.get_distrito($scope.prov).
        success(function(data, status){
            $scope.distritos = data ;
        });
    };
});
