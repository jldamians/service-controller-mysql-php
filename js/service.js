var myApp = angular.module('myApp.service', []);

myApp.service('serviceUbigeo', function($http) {
    var url_    = 'include/ajax/ubigeo.php' ;

    this.get_departamento = function(){
        var method_ = 'GET' ;
        var params_ = {'op': 'depa'} ;

        return $http({url: url_, method: method_, params: params_}) ;
    };
    this.get_provincia = function(departamento){
        var method_ = 'GET' ;
        var params_ = {'op': 'prov', 'departamento': departamento} ;

        return $http({url: url_, method: method_, params: params_}) ;
    };
    this.get_distrito = function(provincia){
        var method_ = 'GET' ;
        var params_ = {'op': 'dist', 'provincia': provincia} ;

        return $http({url: url_, method: method_, params: params_}) ;
    };

});