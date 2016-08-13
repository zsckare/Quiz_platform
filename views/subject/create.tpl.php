<div class="row">
	<div class="row">
		<h3 class="center-align">Crear Nueva Materia</h3>
	</div>
	<div class="row">
		<form action="/subject/create" method="post">
			<div class="row">
				<div class="input-field col s6 offset-m3">
		          <input placeholder="Nombre de la Materia" id="first_name" type="text" class="validate" name="name">
		          <label for="first_name">Nombre de la Materia</label>
		        </div>
			</div>

			<div class="row">
				<div class="input-field col s6 offset-m3">
		          <input placeholder="Codigo de la Materia" id="first_name" type="text" class="validate" name="code">
		          <label for="first_name">Codigo de la Materia</label>
		        </div>
			</div>
			<input type="hidden" value="" name="id_user">
			<div class="row">
				<div class="center-align">
					<input type="submit" value="Crear" class="btn">
				</div>
			</div>


		</form>
	</div>
</div>