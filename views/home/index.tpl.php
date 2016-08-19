<section>
	<?php if(isset($_SESSION['name'])){ ?>
		<h5>BIENVENIDO</h5>


		<?=$_SESSION['type']?>
		<?php 

			$pass = Security::getEncrypt("12345");

		?>

		<?= $pass?>



	<?php }else{ ?>
	<div class="row">
		<form action="/session/login" method="POST">
			
			<div class="row">
				<h4 class="center-align">
					Iniciar Sesion
				</h4>
			</div>

			<div class="row">
				<div class="input-field col s6 offset-m3">
		          <input id="first_name" type="email" class="validate" name="email" required>
		          <label for="first_name">Correo</label>
		        </div>
			</div>

			<div class="row">
				<div class="input-field col s6 offset-m3">
		          <input  id="first_name" type="password" class="validate" name="password">
		          <label for="first_name">Contraseña</label>
		        </div>
			</div>
			<input type="hidden" value="" name="id_user">
			<div class="row">
				<div class="center-align">
					<input type="submit" value="Iniciar Sesion" class="btn light-blue darken-1">
				</div>
			</div>
		</form>
	</div>
	<?php }?>
</section>