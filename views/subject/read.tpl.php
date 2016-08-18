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
		<div class="col s5 m5 l7 card offset-l1 offset-m1">
			<div class="row">
				<h4 class="center-align">Ultimos Examenes</h4>
			</div>
		</div>
	</div>
</div>