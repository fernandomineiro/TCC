var app = angular.module("myapp", []);
app.controller("controller", function($scope, $http) {
	$scope.btnName = "Login";
	$scope.alert = "Digite os campos";
	$scope.login = function() {
		if ($scope.username == null) {
            alert("Digite seu usuário");
        } 
        else if ($scope.password == null) {
            alert("Digite sua senha");
        }  
        else {
        	$scope.btnName = "Carregando...";
        	$scope.alert = "Checando sua conta. Espere...";
            $http.post(
                "login.php", {
                    'username': $scope.username,
                    'password': $scope.password,
                }
            ).success(function(data) {
            	if(data!=''){
            		setTimeout(function() {
    					$scope.alert = "Faliu. Usuário não encontrado";
            			$scope.btnName = "Login";
            			$scope.$apply();
  					}, 3000);
            	}
            	else{
            		setTimeout(function() {
	            		$scope.username = null;
	                	$scope.password = null;
	                	$scope.alert = "Login Sucesso. Bem vindo!";
	                	$scope.btnName = "Login";
	                	$scope.$apply();
	                }, 3000);
	                setTimeout(function() {	
            			window.location.reload();
            		}, 4000);
  					
            	}
            });
        }
	}
	
});