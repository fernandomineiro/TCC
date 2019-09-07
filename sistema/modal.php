<!-- Add/Edit Modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">{{ title }}</h4>
			</div>
			<div class="modal-body">
				<form ng-submit="myFunc()">
			    	<div class="form-group">
						<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			<label for="firstname">Nome</label>
				    		</div>
				    		<div class="col-md-10">
				    			<input type="text" class="form-control" ng-model="firstname" placeholder="Entre com nome">
				    		</div>
				    	</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			<label for="lastname">Sobrenome</label>
				    		</div>
				    		<div class="col-md-10">
				    			<input type="text" class="form-control" ng-model="lastname" placeholder="Entre com sobrenome">
				    		</div>
				    	</div>
			    	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
				<button type="submit" class="{{ btnClass }}" ng-click="action()" data-dismiss="modal"><i class="{{ icon }}"></i> {{ btnName }}</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Deletar pessoa</h4>
			</div>
			<div class="modal-body">
				<h4 class="text-center">Você quer mesmo deletar?</h4>
				<input type="hidden">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
				<button type="button" class="btn btn-danger" ng-click="delete()" data-dismiss="modal"><i class="fa fa-trash"></i> Deletar</button>
			</div>
		</div>
	</div>
</div>
