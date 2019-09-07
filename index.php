<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:sistema');
	}
?>
<!DOCTYPE html>
<html ng-app="myapp" ng-controller="controller">
<head>
	<title>Projeto TCC</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<center><h2>TCC</h2></center>
		</div>
	</div>
	<hr>
	<div class="row" id="loginform">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login</h3>
                </div>
            	<div class="panel-body">
                	<form ng-submit="myFunct()">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Usuário" name="username" id="username" type="text" ng-model="username" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Senha" name="password" id="password" type="password" ng-model="password">
                        	</div>
                        	<button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="login()"><span class="glyphicon glyphicon-log-in"></span> {{btnName}}</button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-success"><center>{{alert}}</center></div>
    	</div>
    </div>
</div>
<script src="myangular.js"></script>
</body>
</html>