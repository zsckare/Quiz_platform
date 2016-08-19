<?php $consulta = new UserModel();?>
<div class="row">
	<div class="row card padding-largo">
		<h3 class="center-align">
			<?=$values?>
		</h3>
	</div>
	<div class="row">
		<div class="col s4 m4 l4 card">
			<div class="row">
				<h4 class="center-align">Alumnos Inscritos</h4>
			</div>
			
			<div class="row">
				<?php foreach ($ids as $row) { ?>
					<?php $student = $consulta->getById($row['id_student']); ?>
						<?php foreach ($student as $row) { ?>
							<p class="center-align" ><?=$row['name']?>  <?=$row['last_name']?>  </p>
						<?php } ?>
				<?php } ?>
			</div>


		</div>
		<div class="col s5 m7 l7 card offset-l1 offset-m1">
			<div class="row">
				<h4 class="center-align">Ultimos Examenes</h4>
			</div>
			<div class="row">
				<?php foreach ($quiz as $key) { ?>
					<p class="center-align"> <?=$key['name']?></p>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
		<h4>Agregar Examen</h4>
		<p></p>
		
		<form class="padding-largo" method="post" action="/quiz/create" >
			<input type="hidden" name="id_subject" value="<?=$subject_id?>">
			<div class="row">
				<div class="row">
					<div class="col input-field">
						<label for="name">Nombre del Examen</label>
						<input type="text" id="name" name="name">
					</div>
				</div>
				<div class="row">
					<div class="col s12 m4 l4 input-field">
						<label for="start_date">Fecha de inicio</label>
						  <input type="date" class="datepicker" id="start_date" name="start_date">
					</div>
				</div>
				<div class="row">
					<input type="submit" value="Agregar" class="btn primary">
				</div>

				
			</div>
		</form>

    </div>
    <div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
</div>


<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large green modal-trigger" href="#modal1" >
      <i class="large material-icons">add</i>
    </a>
 </div>