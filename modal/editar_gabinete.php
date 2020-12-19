	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header alert alert-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Gabiente</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_gabinete" name="editar_gabinete">
			<div id="resultados_ajax2"></div>
			  <div class="form-group">
				<label for="mod_nombre" class="col-sm-3 control-label">Designação</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_gabinete" name="mod_gabinete"  required>
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
			  </div>
			   
			  
			 
			  <div class="form-group">
				<label for="mod_descripcion" class="col-sm-3 control-label">Descrição</label>
				<div class="col-sm-8">
				  <textarea class="form-control" id="mod_descripcion" name="mod_descripcion" ></textarea>
				</div>
			  </div>

			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar Dados</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>