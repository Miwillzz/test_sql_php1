<?php include('php/head.php');?>
	
	<div class="container">
		<h1 class="mt-4 d-flex justify-content-center">INSERTAR NUEVO</h1>
		<form action="php/insert.php" method="post">
			<div class="mb-3">
				<label class="form-label">Id</label>
				<input class="form-control" type="text" name="id_cliente">
			</div>
			<div class="mb-3">
				<label class="form-label">Nombre</label>
				<input class="form-control" type="text" name="nombre_cliente">
			</div>
			<div class="mb-3">
				<label class="form-label">Correo</label>
				<input class="form-control" type="text" name="correo_cliente">
			</div>
			<div class="mb-3">
				<label class="form-label">Ciudad</label>
				<input class="form-control" type="text" name="ciudad_cliente">
			</div>
			<div>
				<button type="submit" class="btn btn-primary">Registrar</button>
			</div>
		</form>
	</div>

<?php include('php/end.php');?>