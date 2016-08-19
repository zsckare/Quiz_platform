<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<link rel="stylesheet" href="/assets/css/styles.css">
	<link rel="stylesheet" href="/assets/css/messages.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blue-grey lighten-5" >
		
	<nav class=" light-blue darken-1" >
    <div class="nav-wrapper">
      <a href="/" class="brand-logo left">Sajis</a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php if(isset($_SESSION['type'])){ ?>
      	<?php if($_SESSION['type'] == 1){ ?>
	      
	        <li><a href="/subject">Materias</a></li>
	        <li><a href="/">Components</a></li>
	        <li><a href="/">JavaScript</a></li>
	    
	    <?php }?>
      <?php }?>

	<?php if (isset($_SESSION['name'])) { ?>
		<li><a href="/session/logout">Cerrar Session</a></li>
	<?php } ?>
  		</ul>
    </div>
  </nav>

	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12 padding-largo">
				<?=$yield ?>	
			</div>
		</div>
		
	</div>
	
	<script src="http://code.jquery.com/jquery-2.2.0.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	<script src="/assets/js/main.js" ></script>
	<script src="/assets/js/messages.js" ></script>
</body>
</html>
