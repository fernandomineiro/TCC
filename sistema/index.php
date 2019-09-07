<!DOCTYPE html>
<html ng-app="mem_app" ng-controller="controller" ng-init="showdata()">
<head>
	<meta charset="UTF-8"> 
	<title>Sistema do TCC</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Sistema pro TCC</h1>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>Lista de pessoas
				<a href="#addnew" data-toggle="modal" class="btn btn-primary pull-right" ng-click="insert()"><i class="fa fa-plus"></i> Nova pessoa</a>
			</h2>
			<table class="table table-bordered table-striped">
				<thead>
					<th>Nome</th>
					<th>Sobre nome</th>
					<th>Ação</th>
				</thead>
				<tbody>
					<tr ng-repeat="mem in member">
						<input type="hidden" value="{{mem.id}}">
						<td>{{mem.firstname}}</td>
						<td>{{mem.lastname}}</td>
						<td>
							<a href="#addnew" data-toggle="modal" class="btn btn-success" ng-click="update(mem.id, mem.firstname, mem.lastname)"><i class="fa fa-edit"></i> Editar</a> || <a href="#delete" data-toggle="modal" class="btn btn-danger" ng-click="delmem(mem.id)"><i class="fa fa-trash"></i> Deletar</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<center><a href="../logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Sair</a></center>
<script src="myangular.js"></script>
<?php include('modal.php'); ?>
</body>
</html>