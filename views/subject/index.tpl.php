<div class="row">
	<div class="row">
		<h3 class="center-align">
			Materias
		</h3>
	</div>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="row big-padding">
				<table class="table ">
							<thead>
								<tr>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody class="big-padding" >
								<?php foreach ($values as $row) {?>
									<tr>
										<td><?= $row['name'] ?></td>
										<td><?= $row['code'] ?></td>
										<td>
											<a href="/subject/read/?subject=<?= $row['id_subject'] ?>">Ver</a>
											<a href="">Editar</a>
											<a href="">Borrar</a>
										</td>
									</tr>

								<?php }?>
							</tbody>
						</table>
			</div>
		</div>
	</div>

</div>