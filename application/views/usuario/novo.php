
<div class="row">
    <div class="col">
    	<form name="frmNovo" id="frmNovo" class="needs-validation" action="" method="post" novalidate>
    		<?= $barraBotao ?>
    		<div class="row">
    			<div class="col-md-6 mb-1">
    				<label for="tipousuario_id"><?=Kohana::message('usuario','tipousuario.singular') ?></label>
    				<select name="tipousuario_id" id="tipousuario_id" class="custom-select" required>
    					<option value="">Selecione</option>
    					<?php 
    					foreach($tipousuarios as $tipo){
    					?>
    					<option value="<?=$tipo->id?>"><?=$tipo->tipo?></option>	
    					<?php 
    					}
    					?>
    				</select>
    				<div class="invalid-feedback">* Campo Obrigatório.</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6 mb-1">
    				<label for="nomeusuario"><?=Kohana::message('usuario','nomeusuario') ?></label>
    				<input name="nomeusuario" id="nomeusuario" type="text" class="form-control" required/>
    				<div class="invalid-feedback">* Campo Obrigatório.</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6 mb-1">
    				<label for="email"><?= Kohana::message('usuario','email')?></label>
    				<input name="email" id="email" type="email" class="form-control" required/>
    				<div class="invalid-feedback">* Campo Obrigatório.</div> 
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6 mb-1">
    				<label for="senha"><?= Kohana::message('usuario','senha')?></label>
    				<input name="senha" id="senha" type="password" class="form-control" required/>
    				<div class="invalid-feedback">* Campo Obrigatório.</div>
    			</div>
    		</div>
    	</form>
    </div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation
		// styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
})();
</script>